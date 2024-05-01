<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_buscador' => [[], ['_controller' => 'App\\Controller\\BuscadorController::index'], [], [['text', '/buscador']], [], [], []],
    'app_buscador_clase' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Clases'], [], [['text', '/buscador_clase']], [], [], []],
    'app_ok' => [[], ['_controller' => 'App\\Controller\\BuscadorController::gestioneditarok'], [], [['text', '/ok']], [], [], []],
    'app_clase' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::clasesok'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/clase']], [], [], []],
    'app_buscador_subclase' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Subclases'], [], [['text', '/buscador_subclase']], [], [], []],
    'app_ok_subclases' => [[], ['_controller' => 'App\\Controller\\BuscadorController::SubclasesOk'], [], [['text', '/ok_subclases']], [], [], []],
    'app_subclase' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::subok'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/subclase']], [], [], []],
    'app_buscador_razas' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Razas'], [], [['text', '/buscador_razas']], [], [], []],
    'app_razas_ok' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Razas_Ok'], [], [['text', '/razas_ok']], [], [], []],
    'app_raza' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::razasok'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/raza']], [], [], []],
    'app_buscador_trasfondo' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Trasfondos'], [], [['text', '/buscador_trasfondo']], [], [], []],
    'app_ok_trasfondos' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Trasfondos_Ok'], [], [['text', '/ok_trasfondos']], [], [], []],
    'app_trasfondo' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::trasfondook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trasfondo']], [], [], []],
    'app_buscador_dotes' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Dotes'], [], [['text', '/buscador_dotes']], [], [], []],
    'app_ok_dotes' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Dotes_Ok'], [], [['text', '/ok_dotes']], [], [], []],
    'app_dote' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::doteok'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dote']], [], [], []],
    'app_buscador_hechizos' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Hechizos'], [], [['text', '/buscador_hechizos']], [], [], []],
    'app_ok_hechizos' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Hechizos_Ok'], [], [['text', '/ok_hechizos']], [], [], []],
    'app_hechizo' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::hechizook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hechizo']], [], [], []],
    'app_index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/index']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'test_public' => [[], ['_controller' => 'App\\Controller\\SeguridadController::test_public'], [], [['text', '/public/test_public']], [], [], []],
    'test_private' => [[], ['_controller' => 'App\\Controller\\SeguridadController::test_private'], [], [['text', '/private/test_private']], [], [], []],
    'App\Controller\BuscadorController::index' => [[], ['_controller' => 'App\\Controller\\BuscadorController::index'], [], [['text', '/buscador']], [], [], []],
    'App\Controller\BuscadorController::Buscador_Clases' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Clases'], [], [['text', '/buscador_clase']], [], [], []],
    'App\Controller\BuscadorController::gestioneditarok' => [[], ['_controller' => 'App\\Controller\\BuscadorController::gestioneditarok'], [], [['text', '/ok']], [], [], []],
    'App\Controller\BuscadorController::clasesok' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::clasesok'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/clase']], [], [], []],
    'App\Controller\BuscadorController::Buscador_Subclases' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Subclases'], [], [['text', '/buscador_subclase']], [], [], []],
    'App\Controller\BuscadorController::SubclasesOk' => [[], ['_controller' => 'App\\Controller\\BuscadorController::SubclasesOk'], [], [['text', '/ok_subclases']], [], [], []],
    'App\Controller\BuscadorController::subok' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::subok'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/subclase']], [], [], []],
    'App\Controller\BuscadorController::Buscador_Razas' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Razas'], [], [['text', '/buscador_razas']], [], [], []],
    'App\Controller\BuscadorController::Razas_Ok' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Razas_Ok'], [], [['text', '/razas_ok']], [], [], []],
    'App\Controller\BuscadorController::razasok' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::razasok'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/raza']], [], [], []],
    'App\Controller\BuscadorController::Buscador_Trasfondos' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Trasfondos'], [], [['text', '/buscador_trasfondo']], [], [], []],
    'App\Controller\BuscadorController::Trasfondos_Ok' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Trasfondos_Ok'], [], [['text', '/ok_trasfondos']], [], [], []],
    'App\Controller\BuscadorController::trasfondook' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::trasfondook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trasfondo']], [], [], []],
    'App\Controller\BuscadorController::Buscador_Dotes' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Dotes'], [], [['text', '/buscador_dotes']], [], [], []],
    'App\Controller\BuscadorController::Dotes_Ok' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Dotes_Ok'], [], [['text', '/ok_dotes']], [], [], []],
    'App\Controller\BuscadorController::doteok' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::doteok'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dote']], [], [], []],
    'App\Controller\BuscadorController::Buscador_Hechizos' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Buscador_Hechizos'], [], [['text', '/buscador_hechizos']], [], [], []],
    'App\Controller\BuscadorController::Hechizos_Ok' => [[], ['_controller' => 'App\\Controller\\BuscadorController::Hechizos_Ok'], [], [['text', '/ok_hechizos']], [], [], []],
    'App\Controller\BuscadorController::hechizook' => [['id'], ['_controller' => 'App\\Controller\\BuscadorController::hechizook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hechizo']], [], [], []],
    'App\Controller\IndexController::index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/index']], [], [], []],
    'App\Controller\LoginController::index' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SeguridadController::test_public' => [[], ['_controller' => 'App\\Controller\\SeguridadController::test_public'], [], [['text', '/public/test_public']], [], [], []],
    'App\Controller\SeguridadController::test_private' => [[], ['_controller' => 'App\\Controller\\SeguridadController::test_private'], [], [['text', '/private/test_private']], [], [], []],
];
