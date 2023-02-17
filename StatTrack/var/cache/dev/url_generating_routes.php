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
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_front' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/front']], [], [], []],
    'fronttournament' => [[], ['_controller' => 'App\\Controller\\FrontController::front_tournament'], [], [['text', '/front/tournament']], [], [], []],
    'front_show_tournament' => [['id'], ['_controller' => 'App\\Controller\\FrontController::front_tournament_show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/front/tournament/show']], [], [], []],
    'app_main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'create' => [[], ['_controller' => 'App\\Controller\\MainController::create'], [], [['text', '/create']], [], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\MainController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update']], [], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\MainController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'app_tournament_index' => [[], ['_controller' => 'App\\Controller\\TournamentController::index'], [], [['text', '/tournament/']], [], [], []],
    'app_tournament_new' => [[], ['_controller' => 'App\\Controller\\TournamentController::new'], [], [['text', '/tournament/new']], [], [], []],
    'app_tournament_show' => [['id'], ['_controller' => 'App\\Controller\\TournamentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tournament']], [], [], []],
    'app_tournament_edit' => [['id'], ['_controller' => 'App\\Controller\\TournamentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tournament']], [], [], []],
    'app_tournament_delete' => [['id'], ['_controller' => 'App\\Controller\\TournamentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tournament']], [], [], []],
];
