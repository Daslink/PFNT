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
        '/empleado' => [[['_route' => 'empleado_index', '_controller' => 'App\\Controller\\EmpleadoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/empleado/new' => [[['_route' => 'empleado_new', '_controller' => 'App\\Controller\\EmpleadoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/periodo' => [[['_route' => 'periodo_index', '_controller' => 'App\\Controller\\PeriodoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/periodo/new' => [[['_route' => 'periodo_new', '_controller' => 'App\\Controller\\PeriodoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/producto' => [[['_route' => 'producto_index', '_controller' => 'App\\Controller\\ProductoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/producto/new' => [[['_route' => 'producto_new', '_controller' => 'App\\Controller\\ProductoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/empleado/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/p(?'
                    .'|eriodo/([^/]++)(?'
                        .'|(*:243)'
                        .'|/edit(*:256)'
                        .'|(*:264)'
                    .')'
                    .'|roducto/([^/]++)(?'
                        .'|(*:292)'
                        .'|/edit(*:305)'
                        .'|(*:313)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'empleado_show', '_controller' => 'App\\Controller\\EmpleadoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'empleado_edit', '_controller' => 'App\\Controller\\EmpleadoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'empleado_delete', '_controller' => 'App\\Controller\\EmpleadoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        243 => [[['_route' => 'periodo_show', '_controller' => 'App\\Controller\\PeriodoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'periodo_edit', '_controller' => 'App\\Controller\\PeriodoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'periodo_delete', '_controller' => 'App\\Controller\\PeriodoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        292 => [[['_route' => 'producto_show', '_controller' => 'App\\Controller\\ProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'producto_edit', '_controller' => 'App\\Controller\\ProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [
            [['_route' => 'producto_delete', '_controller' => 'App\\Controller\\ProductoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
