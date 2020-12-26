<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/app/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AccountController::login', '_locale' => 'en'], null, null, null, false, false, null]],
        '/app/fr/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AccountController::login', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/app/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AccountController::logout', '_locale' => 'en'], null, null, null, false, false, null]],
        '/app/fr/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AccountController::logout', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/app/account-recovery' => [[['_route' => 'app_recovery', '_controller' => 'App\\Controller\\AccountController::emailRecovery', '_locale' => 'en'], null, null, null, false, false, null]],
        '/app/fr/account-recovery' => [[['_route' => 'app_recovery', '_controller' => 'App\\Controller\\AccountController::emailRecovery', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/app/account-email-verif' => [[['_route' => 'app_email_verif', '_controller' => 'App\\Controller\\AccountController::verifUser', '_locale' => 'en'], null, null, null, false, false, null]],
        '/app/fr/account-email-verif' => [[['_route' => 'app_email_verif', '_controller' => 'App\\Controller\\AccountController::verifUser', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/app/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/app/fr/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/app/project' => [[['_route' => 'app_project', '_controller' => 'App\\Controller\\ProjectController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/app/fr/project' => [[['_route' => 'app_project', '_controller' => 'App\\Controller\\ProjectController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/app/project/create' => [[['_route' => 'app_project_create', '_controller' => 'App\\Controller\\ProjectController::create', '_locale' => 'en'], null, null, null, false, false, null]],
        '/app/fr/project/create' => [[['_route' => 'app_project_create', '_controller' => 'App\\Controller\\ProjectController::create', '_locale' => 'fr'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/app/(?'
                    .'|re(?'
                        .'|set_pass/([^/]++)(*:199)'
                        .'|gister(?:/([^/]++))?(*:227)'
                    .')'
                    .'|fr/(?'
                        .'|re(?'
                            .'|set_pass/([^/]++)(*:264)'
                            .'|gister(?:/([^/]++))?(*:292)'
                        .')'
                        .'|project/(?'
                            .'|edit/([^/]++)(*:325)'
                            .'|([^/]++)/delete(*:348)'
                        .')'
                    .')'
                    .'|project/(?'
                        .'|edit/([^/]++)(*:382)'
                        .'|([^/]++)/delete(*:405)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\AccountController::resetPassword', '_locale' => 'en'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'app_register', 'token' => null, '_controller' => 'App\\Controller\\AccountController::register', '_locale' => 'en'], ['token'], null, null, false, true, null]],
        264 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\AccountController::resetPassword', '_locale' => 'fr'], ['token'], null, null, false, true, null]],
        292 => [[['_route' => 'app_register', 'token' => null, '_controller' => 'App\\Controller\\AccountController::register', '_locale' => 'fr'], ['token'], null, null, false, true, null]],
        325 => [[['_route' => 'app_project_edit', '_controller' => 'App\\Controller\\ProjectController::edit', '_locale' => 'fr'], ['id'], null, null, false, true, null]],
        348 => [[['_route' => 'app_project_delete', '_controller' => 'App\\Controller\\ProjectController::delete', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
        382 => [[['_route' => 'app_project_edit', '_controller' => 'App\\Controller\\ProjectController::edit', '_locale' => 'en'], ['id'], null, null, false, true, null]],
        405 => [
            [['_route' => 'app_project_delete', '_controller' => 'App\\Controller\\ProjectController::delete', '_locale' => 'en'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
