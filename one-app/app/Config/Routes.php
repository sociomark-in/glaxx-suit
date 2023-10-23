<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('(:segment)', static function ($routes) {
    /* different app Routes */
    $routes->group('app', static function ($routes) {
        
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
