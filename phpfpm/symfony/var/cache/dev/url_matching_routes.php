<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/auteur' => [[['_route' => 'auteur_index', '_controller' => 'App\\Controller\\AuteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/auteur/new' => [[['_route' => 'auteur_new', '_controller' => 'App\\Controller\\AuteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/book' => [[['_route' => 'book_index', '_controller' => 'App\\Controller\\BookController::index'], null, ['GET' => 0], null, true, false, null]],
        '/book/new' => [[['_route' => 'book_new', '_controller' => 'App\\Controller\\BookController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/auteur/([^/]++)(?'
                    .'|(*:26)'
                    .'|/edit(*:38)'
                    .'|(*:45)'
                .')'
                .'|/book/([^/]++)(?'
                    .'|(*:70)'
                    .'|/edit(*:82)'
                    .'|(*:89)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:128)'
                    .'|wdt/([^/]++)(*:148)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:194)'
                            .'|router(*:208)'
                            .'|exception(?'
                                .'|(*:228)'
                                .'|\\.css(*:241)'
                            .')'
                        .')'
                        .'|(*:251)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'auteur_show', '_controller' => 'App\\Controller\\AuteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        38 => [[['_route' => 'auteur_edit', '_controller' => 'App\\Controller\\AuteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        45 => [[['_route' => 'auteur_delete', '_controller' => 'App\\Controller\\AuteurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        70 => [[['_route' => 'book_show', '_controller' => 'App\\Controller\\BookController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'book_edit', '_controller' => 'App\\Controller\\BookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'book_delete', '_controller' => 'App\\Controller\\BookController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        128 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        148 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        208 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        228 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        241 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        251 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
