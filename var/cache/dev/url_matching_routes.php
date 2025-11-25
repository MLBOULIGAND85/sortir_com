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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/lieu' => [[['_route' => 'app_lieu', '_controller' => 'App\\Controller\\LieuController::index'], null, null, null, false, false, null]],
        '/lieu/new' => [[['_route' => 'app_lieu_new', '_controller' => 'App\\Controller\\LieuController::new'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sortie/creation' => [[['_route' => 'sortie_creation', '_controller' => 'App\\Controller\\SortieController::creationSortie'], null, null, null, false, false, null]],
        '/admin/user_list' => [[['_route' => 'admin_user_list', '_controller' => 'App\\Controller\\UserController::listUsers'], null, null, null, false, false, null]],
        '/admin/userlist' => [[['_route' => 'admin_user_userlist', '_controller' => 'App\\Controller\\UserController::addUsersList'], null, null, null, false, false, null]],
        '/ville' => [[['_route' => 'app_ville', '_controller' => 'App\\Controller\\VilleController::index'], null, null, null, false, false, null]],
        '/ville/nouvelle' => [[['_route' => 'app_ville_nouvelle', '_controller' => 'App\\Controller\\VilleController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:238)'
                .'|/sortie/(?'
                    .'|list(?:/(\\d+))?(*:272)'
                    .'|de(?'
                        .'|tail/([^/]++)(*:298)'
                        .'|inscription/([^/]++)(*:326)'
                    .')'
                    .'|inscription/([^/]++)(*:355)'
                    .'|update/([^/]++)(*:378)'
                    .'|annulation/([^/]++)(*:405)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:431)'
                    .'|update/([^/]++)(*:454)'
                .')'
                .'|/admin/user_(?'
                    .'|gestion/(\\d+)(*:491)'
                    .'|delete/(\\d+)(*:511)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        238 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        272 => [[['_route' => 'sortie_list', 'page' => 1, '_controller' => 'App\\Controller\\SortieController::list'], ['page'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        298 => [[['_route' => 'sortie_detail', '_controller' => 'App\\Controller\\SortieController::sortieDetail'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'sortie_deinscription', '_controller' => 'App\\Controller\\SortieController::sortieDeinscription'], ['id'], null, null, false, true, null]],
        355 => [[['_route' => 'sortie_inscription', '_controller' => 'App\\Controller\\SortieController::sortieInscription'], ['id'], null, null, false, true, null]],
        378 => [[['_route' => 'sortie_update', '_controller' => 'App\\Controller\\SortieController::updateSortie'], ['id'], null, null, false, true, null]],
        405 => [[['_route' => 'sortie_annulation', '_controller' => 'App\\Controller\\SortieController::sortieAnnuler'], ['id'], null, null, false, true, null]],
        431 => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], ['id'], null, null, false, true, null]],
        454 => [[['_route' => 'app_user_update', '_controller' => 'App\\Controller\\UserController::update'], ['id'], null, null, false, true, null]],
        491 => [[['_route' => 'admin_user_gestion', '_controller' => 'App\\Controller\\UserController::gererUser'], ['id'], ['GET' => 0], null, false, true, null]],
        511 => [
            [['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
