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
        '/animaux' => [[['_route' => 'animaux', '_controller' => 'App\\Controller\\AnimauxController::index'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/registerBanq' => [[['_route' => 'register_don', '_controller' => 'App\\Controller\\RegisterDonController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/a(?'
                    .'|nimaux/single/([^/]++)(*:195)'
                    .'|rticle/single/([^/]++)(*:225)'
                .')'
                .'|/panier/(?'
                    .'|addA(?'
                        .'|rticle/([^/]++)(*:267)'
                        .'|nimal/([^/]++)(*:289)'
                    .')'
                    .'|removeA(?'
                        .'|rticle/([^/]++)(*:323)'
                        .'|nimal/([^/]++)(*:345)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        195 => [[['_route' => 'animal', '_controller' => 'App\\Controller\\AnimauxController::animal'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'article', '_controller' => 'App\\Controller\\ArticleController::article'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'panier_add_article', '_controller' => 'App\\Controller\\PanierController::addArticle'], ['id'], null, null, false, true, null]],
        289 => [[['_route' => 'panier_add_animal', '_controller' => 'App\\Controller\\PanierController::addAnimal'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'panier_remove_article', '_controller' => 'App\\Controller\\PanierController::removeArticle'], ['id'], null, null, false, true, null]],
        345 => [
            [['_route' => 'panier_remove_animal', '_controller' => 'App\\Controller\\PanierController::removeAnimal'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
