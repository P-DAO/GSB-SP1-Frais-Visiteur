<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/visiteur/connexion' => [[['_route' => 'seConnecterVisiteur', '_controller' => 'App\\Controller\\VisiteurController::seConnecterVisiteur'], null, null, null, false, false, null]],
        '/visiteur/deconnexion' => [[['_route' => 'seDeconnecterVisiteur', '_controller' => 'App\\Controller\\VisiteurController::seDeconnecterVisiteur'], null, null, null, false, false, null]],
        '/visiteur/compte' => [[['_route' => 'CompteVisiteur', '_controller' => 'App\\Controller\\VisiteurController::visiteur'], null, null, null, false, false, null]],
        '/visiteur/choixMois' => [[['_route' => 'choixMois', '_controller' => 'App\\Controller\\VisiteurController::choixMois'], null, null, null, false, false, null]],
        '/visiteur/consulter' => [[['_route' => 'consulter', '_controller' => 'App\\Controller\\VisiteurController::consulter'], null, null, null, false, false, null]],
        '/visiteur/saisir' => [[['_route' => 'saisir', '_controller' => 'App\\Controller\\VisiteurController::saisir'], null, null, null, false, false, null]],
        '/comptable/compte' => [[['_route' => 'CompteComptable', '_controller' => 'App\\Controller\\ComptableController::comptable'], null, null, null, false, false, null]],
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
