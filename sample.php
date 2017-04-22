<?php
require_once __DIR__ . '/autoload.php';

$config = require __DIR__ . "/config.php";
$defaultConfiguration = Swagger\Client\Configuration::getDefaultConfiguration();
$defaultConfiguration
    ->setUsername($config["username"])
    ->setPassword($config["password"]);

$api = new Swagger\Client\Api\DefaultApi();
$api->getApiClient()->getConfig()
    ->setHost($config["endpoint"])
    ->addDefaultHeader("X-Accept-Version", "1.1")
    ->setDebug(false);

try {
    echo "--- Create draft\n";
    $draft = composeDraft();
    $draft = $api->createDraft($draft);
    echo "ID - {$draft->getId()}\n";
    echo "--- Get boards\n";
    $boards = $api->getBoards();
    $postingsArray = [];
    foreach ($boards as $board) {
        echo " * {$board->getName()}\n";
    }
    $postingsArray = [
        (new \Swagger\Client\Model\Posting())->setBoard($boards[0])
            ->setPostingInstructions(
                (new \Swagger\Client\Model\PostingInstructions())
                    ->setScheduledAt(new \DateTime("+1 day"))
                    ->setUnpostAt(new \DateTime("+ 2 day"))
            )
    ];
    echo "--- Post job to first available board\n";
    $api->postDraft($draft->getId(), $postingsArray);

    $jobs = displayJobs($draft->getRequisitionNumber(), $api);

    displayJobPostings($jobs[0], $api);

    echo "--- Update job\n";
    echo "---- Create draft\n";
    $draft = $jobs[0];
    // you have to reset link to reuse returned object
    $draft->setLinks(null);
    $draft->getPosition()->setTitle("Senior PHP Developer");
    $draft = $api->createDraft($draft);
    echo "---- Update on currently posted boards\n";
    $api->postDraft($draft->getId());

    $jobs = displayJobs($draft->getRequisitionNumber(), $api);

    $postings = displayJobPostings($jobs[0], $api);

    echo "--- Update posting istructions\n";
    $draft = $jobs[0];
    $draft->setLinks(null);
    $postings[0]
        ->getPostingInstructions()->setUnpostAt(null)->setScheduledAt(null);
    $draft = $api->createDraft($draft);
    $api->postDraft($draft->getId(), $postings);
    $postings = displayJobPostings($jobs[0], $api);

    echo "--- Delete posting\n";
    $api->deleteJobPosting($jobs[0]->getId(), $postings[0]->getId());

//    var_dump($draft->getLinks());
//    var_dump($draft);
} catch (\Swagger\Client\ApiException $ex) {
    var_dump($ex->getResponseBody());
    echo $ex;
}

function composeDraft()
{
    $draft = new \Swagger\Client\Model\Job();
    $draft->setRequisitionNumber(uniqid("api-client"));
    $position = new \Swagger\Client\Model\Position();
    $position->setTitle("PHP Developer");
    $position->setDescription("Super Developer");
    $position->setSkills("PHP, MySQL");
    $position->setBenefits("Medical insurance covered");
    $compensation = new \Swagger\Client\Model\Compensation();
    $range = new \Swagger\Client\Model\Range();
    $range->setMin(40000);
    $range->setMax(90000);
    $compensation->setRange($range);
    $compensation->setType("SALARY");
    $compensation->setCurrency("EUR");
    $position->setCompensation($compensation);
    $location = new \Swagger\Client\Model\Location();
    $location->setCountry("BY");
    $location->setState("BY-MI");
    $location->setCity("Minsk");
    $location->setZip("220012");
    $position->setLocation($location);
    $position->setTravelPercentage("0");
    $position->setTelecommutePercentage("0");
    $classification = new \Swagger\Client\Model\Classification();
    $classification->setType("PERMANENT");
    $classification->setTime("FULLTIME");
    $classification->setFunction("15000000");
    $classification->setIndustry(11);
    $position->setClassification($classification);
    $draft->setPosition($position);
    $draft->setCompany($company = new \Swagger\Client\Model\Company());
//    $company->setAccount($account = new \Swagger\Client\Model\Account());
//    $account->setName("Recruiter Name");
//    $account->setEmail("recruiter@example.com");
//    $account->setOrganization("Recruiter Org");
    $draft->setCandidateResponse($cr = new \Swagger\Client\Model\CandidateResponse());
    $cr->setUrl("http://example.com/apply");
    $cr->setEmail("apply@example.com");

    return $draft;
}

/**
 * @param string $requisition Optional filter. null to display all
 * @param \Swagger\Client\Api\DefaultApi $api
 * @return \Swagger\Client\Model\Job[]
 */
function displayJobs($requisition, \Swagger\Client\Api\DefaultApi $api) {
    echo "--- Get data for posted job\n";
    $jobs = $api->getJobs($requisition);
    foreach ($jobs as $job) {
        printf(
            " * %s\t%s\t%s\n",
            $job->getId(),
            $job->getRequisitionNumber(),
            $job->getPosition()->getTitle()
        );
    }
    return $jobs;
}

/**
 * @param \Swagger\Client\Model\Job $job
 * @param \Swagger\Client\Api\DefaultApi $api
 * @return \Swagger\Client\Model\Posting[]
 */
function displayJobPostings(\Swagger\Client\Model\Job $job, \Swagger\Client\Api\DefaultApi $api)
{
    echo "--- Get posting info\n";
    $postings = $api->getJobPostings($job->getId());
    foreach ($postings as $posting) {
        echo indent((string)$posting) . "\n";
    }
    return $postings;
}

function listJobs(\Swagger\Client\Api\DefaultApi $api)
{
    $response = $api->getJobs();
    foreach ($response as $job) {
        printf("%d\t%s\t %s\n", $job->getId(), $job->getRequisitionNumber(), $job->getPosition()->getTitle());
    }
}

function indent($text, $linePrefix = "\t")
{
    return preg_replace("/^/m", $linePrefix, $text);
}