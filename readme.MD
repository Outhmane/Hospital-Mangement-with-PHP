This is a simple hospital management application emphasized on patient appointment booking system. The tools and technology used to build this application are as follow-

Backend: PHP,MySql\
FrontEnd: HTML,CSS,JavaScript, JQuery, Bootstrap\
ThirdParty: Few composer packages including Illuminate, Faker, Email Validator and so on.\

-----------------------------------------------------------------------------------------


Run the following command(s) before running the application (Ignore first two composer commands if those do not work)-

$composer install \
$composer update \
$composer dumpautoload



Create a database in your phpMyAdmin environment (name it health_db or update config/dbConnection.php file if you want to name it different than ours) and run the following command:

$php updateDB.php

------------------------

Login Credentials:
------------------------
Username: cisAdmin\
Password: cispass

*Browse About page for default login credential of doctor/patient/nurse

-----------------------------------------------------------
Important notes
----------------------------------------------------------
The default name of the project root folder is "hospital_management" . If you name your project something else
then update SROOT constant in config.php file(located in config folder of the project) with your chosen project root folder name.
And of-course don't forget to run "php updateDB.php" command to load the database pre-populated with default login credentials and 
also with some dummy data.

----------------
Enjoy......!!!
