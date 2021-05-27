<?php

try {
    if (isset($_COOKIE['user'])) {
        if (isset($_GET['pages'])) {
            switch ($_GET['pages']) {
                case 'projekts/projekts-list':
                    include('./templates/pages/projekts/projekts-list.php');
                    break;
                case 'projekts/projekt-detail':
                    include('./templates/pages/projekts/projekt-detail.php');
                    break;
                case 'planning':
                    include('./templates/pages/planning.php');
                    break;
                case 'teams/teams-list':
                    include('./templates/pages/teams/teams-list.php');
                    break;
                case 'teams/team-detail':
                    include('./templates/pages/teams/team-detail.php');
                    break;
                default:
                    break;
            }
        } else {
            include('./templates/pages/dashboard.php');
        }
    } else {
        if (isset($_GET['connect'])) {
            switch ($_GET['connect']) {
                case 'login':
                    include('./templates/login.php');
                    break;
                default:
                    break;
            }
        } else {
            include('./templates/welcome_anonymous.php');
        }
    }
} catch (Exception $e) {
}
