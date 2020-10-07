<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/visiteur/seConnecterVisiteur' => [[['_route' => 'seConnecterVisiteur', '_controller' => 'App\\Controller\\VisiteurController::seConnecterVisiteur'], null, null, null, false, false, null]],
        '/visiteur/menu' => [[['_route' => 'menuV', '_controller' => 'App\\Controller\\VisiteurController::visiteur'], null, null, null, false, false, null]],
        '/visiteur/ChoixMois' => [[['_route' => 'choixMois', '_controller' => 'App\\Controller\\VisiteurController::choixMois'], null, null, null, false, false, null]],
        '/visiteur/consulter' => [[['_route' => 'consulter', '_controller' => 'App\\Controller\\VisiteurController::consulter'], null, null, null, false, false, null]],
        '/visiteur/saisir' => [[['_route' => 'saisir', '_controller' => 'App\\Controller\\VisiteurController::saisir'], null, null, null, false, false, null]],
        '/comptable/menu' => [[['_route' => 'comptable', '_controller' => 'App\\Controller\\ComptableController::comptable'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
