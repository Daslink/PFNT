<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'empleado_index' => [[], ['_controller' => 'App\\Controller\\EmpleadoController::index'], [], [['text', '/empleado/']], [], []],
    'empleado_new' => [[], ['_controller' => 'App\\Controller\\EmpleadoController::new'], [], [['text', '/empleado/new']], [], []],
    'empleado_show' => [['id'], ['_controller' => 'App\\Controller\\EmpleadoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/empleado']], [], []],
    'empleado_edit' => [['id'], ['_controller' => 'App\\Controller\\EmpleadoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/empleado']], [], []],
    'empleado_delete' => [['id'], ['_controller' => 'App\\Controller\\EmpleadoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/empleado']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
    'orden_index' => [[], ['_controller' => 'App\\Controller\\OrdenController::index'], [], [['text', '/orden/']], [], []],
    'orden_new' => [[], ['_controller' => 'App\\Controller\\OrdenController::new'], [], [['text', '/orden/new']], [], []],
    'orden_show' => [['id'], ['_controller' => 'App\\Controller\\OrdenController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/orden']], [], []],
    'orden_edit' => [['id'], ['_controller' => 'App\\Controller\\OrdenController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/orden']], [], []],
    'orden_delete' => [['id'], ['_controller' => 'App\\Controller\\OrdenController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/orden']], [], []],
    'periodo_index' => [[], ['_controller' => 'App\\Controller\\PeriodoController::index'], [], [['text', '/periodo/']], [], []],
    'periodo_new' => [[], ['_controller' => 'App\\Controller\\PeriodoController::new'], [], [['text', '/periodo/new']], [], []],
    'periodo_show' => [['id'], ['_controller' => 'App\\Controller\\PeriodoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/periodo']], [], []],
    'periodo_edit' => [['id'], ['_controller' => 'App\\Controller\\PeriodoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/periodo']], [], []],
    'periodo_delete' => [['id'], ['_controller' => 'App\\Controller\\PeriodoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/periodo']], [], []],
    'producto_index' => [[], ['_controller' => 'App\\Controller\\ProductoController::index'], [], [['text', '/producto/']], [], []],
    'producto_new' => [[], ['_controller' => 'App\\Controller\\ProductoController::new'], [], [['text', '/producto/new']], [], []],
    'producto_show' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], []],
    'producto_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], []],
    'producto_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
