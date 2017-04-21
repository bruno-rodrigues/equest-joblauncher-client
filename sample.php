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

    echo "--- Get data for posted job\n";
    $jobs = $api->getJobs($draft->getRequisitionNumber());
    foreach ($jobs as $job) {
        printf(
            " * %s\t%s\t%s\n",
            $job->getId(),
            $job->getRequisitionNumber(),
            $job->getPosition()->getTitle()
        );
    }
    // display posting details
    echo "--- Get posting info\n";
    $postings = $api->getJobPostings($jobs[0]->getId());
    foreach ($postings as $posting) {
        echo indent((string) $posting) . "\n";
    }
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