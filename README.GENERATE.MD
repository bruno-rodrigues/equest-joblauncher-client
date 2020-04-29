# joblauncher-client-php
## How To Generate
```
cd ..
curl -O https://repo1.maven.org/maven2/io/swagger/swagger-codegen-cli/2.2.1/swagger-codegen-cli-2.2.1.jar
java -jar swagger-codegen-cli-2.2.1.jar generate -l php -c joblauncher-client-php/config.json -o . -i /var/www/equest3/src/Equest/PostJobApiBundle/Resources/public/swagger.json
```
