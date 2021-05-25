<?php

try {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'projekts':
                include('./templates/pages/projekts/projekts.php');
                break;
            case 'planning':
                include('./templates/pages/planning/planning.php');
                break;
            case 'teams':
                include('./templates/pages/teams/teams.php');
                break;
            default:
                break;
        }
    } else {
        include('./templates/pages/dashboard/dashboard.php');
    }
} catch (Exception $e) {
}
