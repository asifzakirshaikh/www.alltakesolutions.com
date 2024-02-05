<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->post('submit-details', 'Home::send_details');
$routes->get('about', 'About::index');

$routes->get('industries', 'Industries::index');

$routes->get('contact', 'Contact::index');
$routes->post('contact/submit', 'Contact::send_email');

$routes->get('unsubscribe', 'Contact::unsubscribe');
$routes->post('form_unsubscribe', 'Contact::form_unsubscribe');

$routes->get('unsubscribe-newsletter', 'Contact::unsubscribe_newsletter');
$routes->post('form_unsubscribe_newsletter', 'Contact::form_unsubscribe_newsletter');

$routes->post('request-proposal', 'Contact::requestProposal');

$routes->post('send-abm', 'Contact::sendABM');

// $routes->get('know-your-budget', 'Budget::index');
$routes->get('budget-calculator', 'Budget::knowYourBudget');
$routes->get('knowYourBudget', 'Budget::knowYourBudget');
$routes->post('submit', 'Budget::submit');
$routes->post('sendBudgetCalculatorForm', 'Contact::sendBudgetCalculatorForm');

$routes->get('subscribe-newsletter', 'Home::newsletter');
$routes->post('subscribe-newsletter', 'Home::subscribe_newsletter');

$routes->get('lets-connect', 'Home::connect');
$routes->post('lets-connect', 'Home::lets_connect');


//Routes for Legal
$routes->get('terms-and-conditions', 'Legal::terms_and_conditions');
$routes->get('gdpr-compliance', 'Legal::gdpr');
$routes->get('ccpa', 'Legal::ccpa');
$routes->get('privacy-policy', 'Legal::privacy_policy');

//Routes for Capabilities
//$routes->get('capabilities', 'Capabilities::index');
$routes->get('capabilities/marketing-strategy-and-profiling', 'Capabilities::marketing_strategy_profiling');
$routes->get('capabilities/content-marketing', 'Capabilities::content_marketing');
$routes->get('capabilities/digital-and-media', 'Capabilities::digital_and_media');


//Routes for Solutions
$routes->get('solutions', 'Solutions::index');
$routes->get('solutions/account-based-experience', 'Solutions::account_based_experience');
$routes->get('solutions/account-based-marketing', 'Solutions::account_based_marketing');
$routes->get('solutions/intent-based-profiling', 'Solutions::intent_based_profiling');
$routes->get('solutions/content-studio', 'Solutions::content_studio');
$routes->get('solutions/account-based-lead-generation', 'Solutions::lead_generation');

$routes->get('b2b-lead-generation', 'Solutions::b2b_lead_generation');
$routes->get('solutions/case-study', 'Solutions::case_study');
$routes->post('b2b-lead-generation-', 'Solutions::send_email');

//Routes for Legal
$routes->get('terms-and-conditions', 'Legal::terms_and_conditions');
$routes->get('gdpr-compliance', 'Legal::gdpr');
$routes->get('ccpa', 'Legal::ccpa');
$routes->get('privacy-policy', 'Legal::privacy_policy');

//Routes for Blogs
$routes->get('blogs', 'Blogs::index');
$routes->post('blogs/subscribe', 'Blogs::subscribe');
$routes->get('blogs/sign-in', 'Blogs::login');
$routes->get('blogs/sign-out', 'Blogs::logout');
$routes->post('blogs/user-login', 'Blogs::check_login');
$routes->get('blogs/view/(:any)', 'Blogs::view/$1');

//Routes for Infographics
$routes->get('infographics', 'Infographics::index');


$routes->get('account', 'Account::index', ['filter' => 'authGuard']);
$routes->get('account/blogs', 'Account::blogs', ['filter' => 'authGuard']);
$routes->get('account/add-blog', 'Account::add_blog', ['filter' => 'authGuard']);
$routes->post('account/insert-blog', 'Account::insert_blog',['filter' => 'authGuard']);
$routes->get('account/edit-blog-post/(:num)', 'Account::edit_blog_post/$1',['filter' => 'authGuard']);
$routes->post('account/update-blog-post/(:num)', 'Account::update_blog_post/$1',['filter' => 'authGuard']);
$routes->get('account/edit-blog/(:num)', 'Account::edit_blog/$1',['filter' => 'authGuard']);
$routes->post('account/update-blog/(:num)', 'Account::update_blog/$1',['filter' => 'authGuard']);
$routes->get('account/delete-blog/(:num)', 'Account::delete_blog/$1',['filter' => 'authGuard']);
$routes->get('account/infographics', 'Account::infographics', ['filter' => 'authGuard']);
$routes->get('account/add-infographics', 'Account::add_infographics', ['filter' => 'authGuard']);
$routes->post('account/insert-infographics', 'Account::insert_infographics',['filter' => 'authGuard']);
$routes->get('account/delete-infographics/(:num)', 'Account::delete_infographics/$1',['filter' => 'authGuard']);

$routes->get('hidden-form', 'Form::index');
$routes->get('webolytics-form', 'Form::web');
$routes->get('unifii-webolytics-form', 'Form::unifii');

$routes->get('modern-health-form', 'Form::modern');


$routes->get('budget3', 'Home::budget_3');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
