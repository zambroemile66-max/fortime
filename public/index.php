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

$router->get('jobs-details/:id', 'App\Controllers\JobController@jobsDetailsPage');
$router->get('job-application/:id', 'App\Controllers\JobController@jobApplicationPage');
$router->get('find-jobs', 'App\Controllers\JobController@findJobsPage');
$router->get('search', 'App\Controllers\JobController@searchPage');

$router->get('browse-companies', 'App\Controllers\CompanyController@browseCompaniesPage');
// $router->get('company-details', 'App\Controllers\CompanyController@companyDetailsPage');
$router->get('company-details/:id', 'App\Controllers\CompanyController@companyDetailsPage');

$router->get('login', 'App\Controllers\UserController@loginPage');
$router->post('login', 'App\Controllers\UserController@login');
$router->get('signup', 'App\Controllers\UserController@signupPage');
$router->post('signup', 'App\Controllers\UserController@signup');

$router->get('admin/dashboard', 'App\Controllers\Admin\DashboardController@dashboardPage');
$router->get('admin/profile', 'App\Controllers\Admin\ProfileController@profilePage');
$router->get('admin/company-profile', 'App\Controllers\Admin\CompanyProfileController@companyProfilePage');
$router->get('admin/applicants', 'App\Controllers\Admin\ApplicantController@applicantPage');
$router->get('admin/emails', 'App\Controllers\Admin\EmailController@emailPage');
$router->get('admin/jobs', 'App\Controllers\Admin\JobController@jobListingPage');
$router->get('admin/job-publish', 'App\Controllers\Admin\JobController@jobPublishPage');
$router->post('admin/job-publish', 'App\Controllers\Admin\JobController@jobPublish');

try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404($e->getMessage());
}