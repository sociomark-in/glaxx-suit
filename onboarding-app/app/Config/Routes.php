<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PageController::index');
// $routes->get('/portal/(:segment)/getting-started/choose-a-solution', '');
$routes->get('getting-started/sign-up', 'OnboardingController::sign_up');

$routes->group('portal', static function ($routes) {
    $routes->get('(:segment)/getting-started/choose-a-solution', 'OnboardingController::solutionChoice/$1');
});

$routes->group('api', static function ($routes) {
    $routes->post('onboarding', 'OnboardingController::authenticate');
});


// $route['default_controller'] = 'PageController';

// /* Getting Started  */
// $route['getting-started/sign-up'] = 'OnboardingController/sign_up';


// // {portal-name}/___
// $route['(:any)/getting-started/choose-a-solution'] = 'OnboardingController/choose_solution/$1';
// $route['(:any)/dashboard'] = 'OnboardingController/choose_solution/$1';

// $route['api/onboarding/new']['POST'] = 'OnboardingController/authenticate';
// $route['api/onboarding/solution']['POST'] = 'OnboardingController/solutionChoice';


