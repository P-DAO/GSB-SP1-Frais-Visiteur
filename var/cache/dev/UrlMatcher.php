<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/comptable' => [[['_route' => 'comptable', '_controller' => 'App\\Controller\\ComptableController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'index', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/visiteur/Connexion' => [[['_route' => 'seConnecterVisiteur', '_controller' => 'App\\Controller\\VisiteurController::seConnecterVisiteur'], null, null, null, false, false, null]],
        '/visiteur/Deconnexion' => [[['_route' => 'seDeconnecterVisiteur', '_controller' => 'App\\Controller\\VisiteurController::seDeconnecterVisiteur'], null, null, null, false, false, null]],
        '/visiteur/Compte' => [[['_route' => 'CompteVisiteur', '_controller' => 'App\\Controller\\VisiteurController::visiteur'], null, null, null, false, false, null]],
        '/visiteur/ChoixMois' => [[['_route' => 'choixMois', '_controller' => 'App\\Controller\\VisiteurController::choixMois'], null, null, null, false, false, null]],
        '/visiteur/consulter' => [[['_route' => 'consulter', '_controller' => 'App\\Controller\\VisiteurController::consulter'], null, null, null, false, false, null]],
        '/visiteur/saisir' => [[['_route' => 'saisir', '_controller' => 'App\\Controller\\VisiteurController::saisir'], null, null, null, false, false, null]],
        '/comptable/Compte' => [[['_route' => 'CompteComptable', '_controller' => 'App\\Controller\\ComptableController::comptable'], null, null, null, false, false, null]],
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
