Road to Codeception on how to set-up and run the tests

Setup for Codeception:

	1.	Download PHP from http://windows.php.net/download/
	2.	Extract in PHP folder and save in your machine like I saved “C:\Program Files\PHP”
	3.	Setup PHP path in your system environment variable.
	4.	Open command prompt and check php version.
	5.	Download Codecept.phar file from location http://codeception.com/builds as per your PHP version.
	6.	Save this file into your created project root directory.
	7.	Open command prompt and run below command.
	8.	You should see that “tests” folder and “codeception.yml” file generated under project directory.


Setup for Java:
	1.	Download JAVA  from http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html
	2.	Install it in your machine.
	3.	Setup JAVA path in your system environment variable.



Setup for SELENIUM SERVER and CHROME DRIVER:   

	1.	Download SELENIUM from http://www.seleniumhq.org/download/
	2.	Download CHROME DRIVER from   https://sites.google.com/a/chromium.org/chromedriver/downloads 
	3.	Save both files in 1 folder like I saved  “C:\Selenium”


Script Creation:

	1.	To create your first test just runs below command:

               php codecept.phar generate:cest acceptance MyFirstTest

                     You should see that test is generated under “tests\acceptance” directory.

	2.	Open file “acceptance.suite.yml” and set your application url like below:


				class_name: AcceptanceTester
				modules:
					enabled:
						 #- PhpBrowser
						 - WebDriver
						 - \Helper\Acceptance
					config:
					   PhpBrowser:
						  url: 'http://localhost/myapp'
					   WebDriver:
						  url: 'http://localhost/myapp'
						  wait: 3
						  browser: chrome
						  window_size: 800*600
						  capabilities:
							  unexpectedAlertBehaviour: 'accept'


	3.	Write your acceptance code into file “tests\acceptance\MyfirstTestCest.php” in created file like I have created:   Google search
                                  
 
						<?php
						$I = new AcceptanceTester($scenario);
						$I->wantTo('Google search testing keyword');
						$I->fillField('q','testing');
						$I->click('btnG');
						?>    
 
 
Run Test:

  For running test firstly runs command to start Selenium Server
1.	Run below command to Start SELENIUM SERVER:
java -Dwebdriver.chrome.driver=C:\Selenium\chromedriver.exe -jar C:\Selenium\selenium-server-standalone-3.0.0-beta2.jar
2.	Now run below command to execute test.
php codecept.phar run acceptance MyFirstTestCest.php --env chrome --steps --html

