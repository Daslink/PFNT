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
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/orden' => [[['_route' => 'orden_index', '_controller' => 'App\\Controller\\OrdenController::index'], null, ['GET' => 0], null, true, false, null]],
        '/orden/new' => [[['_route' => 'orden_new', '_controller' => 'App\\Controller\\OrdenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/periodo' => [[['_route' => 'periodo_index', '_controller' => 'App\\Controller\\PeriodoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/periodo/new' => [[['_route' => 'periodo_new', '_controller' => 'App\\Controller\\PeriodoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/producto' => [[['_route' => 'producto_index', '_controller' => 'App\\Controller\\ProductoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/producto/new' => [[['_route' => 'producto_new', '_controller' => 'App\\Controller\\ProductoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/orden/([^/]++)(?'
                    .'|(*:238)'
                    .'|/edit(*:251)'
                    .'|(*:259)'
                .')'
                .'|/p(?'
                    .'|eriodo/([^/]++)(?'
                        .'|(*:291)'
                        .'|/edit(*:304)'
                        .'|(*:312)'
                    .')'
                    .'|roducto/([^/]++)(?'
                        .'|(*:340)'
                        .'|/edit(*:353)'
                        .'|(*:361)'
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
        238 => [[['_route' => 'orden_show', '_controller' => 'App\\Controller\\OrdenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        251 => [[['_route' => 'orden_edit', '_controller' => 'App\\Controller\\OrdenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        259 => [[['_route' => 'orden_delete', '_controller' => 'App\\Controller\\OrdenController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        291 => [[['_route' => 'periodo_show', '_controller' => 'App\\Controller\\PeriodoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'periodo_edit', '_controller' => 'App\\Controller\\PeriodoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'periodo_delete', '_controller' => 'App\\Controller\\PeriodoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        340 => [[['_route' => 'producto_show', '_controller' => 'App\\Controller\\ProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'producto_edit', '_controller' => 'App\\Controller\\ProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        361 => [
            [['_route' => 'producto_delete', '_controller' => 'App\\Controller\\ProductoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
