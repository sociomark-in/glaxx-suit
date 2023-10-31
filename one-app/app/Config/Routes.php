<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// portal-name/app/people/1231232132/dashboard
$routes->group('(:segment)', static function ($routes) {                                    // (:segment) is portal_name
    /* different app Routes */
    $routes->group('home', static function ($routes) {
        $routes->group('getting-started', static function ($routes) {
            $routes->get('', 'PeopleController::index/$1');
            $routes->get('custom-dashboard', 'PeopleController::index/$1/$2');
        });
        // Initial Setup Routes
        $routes->group('people', static function ($routes) {
            $routes->group('app/(:segment)', static function ($routes) {                    // (:segment) is app_id
                $routes->group('dashboard', static function ($routes) {
                    $routes->get('', 'PeopleController::index/$1/$2');
                });
                $routes->group('setup', static function ($routes) {
                    $routes->get('organization', 'PeopleController::index/$1/$2');
                });
            });
            $routes->group('rekroot/(:segment)/setup', static function ($routes) {
                $routes->group('app/(:segment)', static function ($routes) {                // (:segment) is app_id
                    $routes->group('dashboard', static function ($routes) {
                        $routes->get('', 'PeopleController::index/$1/$2');
                    });
                    $routes->group('setup', static function ($routes) {
                        $routes->get('organization', 'PeopleController::index/$1/$2');
                        $routes->get('taxes', 'PeopleController::index/$1/$2');
                        $routes->get('pay-schedules', 'PeopleController::index/$1/$2');
                        $routes->get('statutory-details', 'PeopleController::index/$1/$2');
                        $routes->group('salary-components', static function ($routes) {
                            $routes->get('earnings', 'PeopleController::index/$1/$2');
                            $routes->get('deductions', 'PeopleController::index/$1/$2');
                        });
                    });
                });
            });
            $routes->group('app-setup', static function ($routes) {
            });
        });

        // people App Routes
        $routes->group('people', static function ($routes) {

            $routes->get('(:segment)/dashboard', 'PeopleController::index/$1/$2');
        });

        // rekroot App Routes 
        $routes->group('rekroot', static function ($routes) {
            $routes->get('(:segment)/dashboard', 'RekrootController::index/$1/$2');

            /* 
            // $routes->get('(:segment)/setup/(:segment)', 'PeopleSetupController::index/$1/$2/$3');
            
            organization
            indian-taxes
            pay-schedules
            statutory-details
            salary-components/earnings
            */

            $routes->group('(:segment)/settings/', static function ($routes) {
                $routes->get('salary-components/(:segment)', 'PeopleSettingsController::index/$1/$2/$3');
                /*
                organization
                organization/details
                indian-taxes
                pay-schedules
                statutory-details
                
                work-locations
                departments
                designations
                */
                $routes->get('(:segment)', 'PeopleSettingsController::index/$1/$2');
            });
        });

        /* 
        $routes->group('pagador', static function ($routes) {
            // pagador App Routes 
            $routes->get('(:segment)/dashboard', 'Home::index/$1/$2');
        });
        */
    });
});
