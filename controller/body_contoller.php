<?php


try {
    if (isset($_COOKIE['user'])) {
        if (isset($_GET['pages'])) {
            switch ($_GET['pages']) {
                case 'projekts/projekts-list':
                    include('./templates/pages/projekts/projekts-list.php');
                    break;
                case 'projekts/projekt-detail':
                    require('./core/DAL/database.php');
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $projekt = getProjektDetail($_GET['id']);
                        $team = getTeam($projekt['team']);
                        $members = getProjektMembers($_GET['id']);
                        $tickets = getTickets($_GET['id']);
                        require('./templates/pages/projekts/projekt-detail.php');
                    }
                    // include('./templates/pages/projekts/projekt-detail.php');
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
                case 'signin':
                    include('./templates/signin.php');
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