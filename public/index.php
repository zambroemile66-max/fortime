<?php

use App\Exceptions\NotFoundException;
use Router\Router;

require'../vendor/autoload.php';

// const VIEWS = dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR;
define('VIEWS',dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);
// const SCRIPTS = dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR;
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);
$router->get('', 'App\Controllers\BlogController@homePage');

$router->get('jobs-details', 'App\Controllers\JobController@jobsDetailsPage');
$router->get('job-application', 'App\Controllers\JobController@jobApplicationPage');
$router->get('find-jobs', 'App\Controllers\JobController@findJobsPage');
$router->get('search', 'App\Controllers\JobController@searchPage');

$router->get('browse-companies', 'App\Controllers\CompanyController@browseCompaniesPage');
$router->get('company-details', 'App\Controllers\CompanyController@companyDetailsPage');

$router->get('login', 'App\Controllers\UserController@loginPage');
$router->get('signup', 'App\Controllers\UserController@signupPage');

try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404($e->getMessage());
}