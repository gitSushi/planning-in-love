<?php


try {
    if (isset($_COOKIE["user"])) {
        if (isset($_GET["pages"])) {
            switch ($_GET["pages"]) {
                case 'projekts/projekts-list':
                    include('core/DAL/database.php');
                    $projects = getAllProjekts();
                    include('./templates/pages/projekts/projekts-list.php');
                    break;
                case 'projekts/my-projekts':
                    include('core/DAL/database.php');
                    $currentUserId = $_COOKIE["user"];
                    $projects = getMyProjekts(json_decode($currentUserId)->id);
                    include('./templates/pages/projekts/my-projekts.php');
                    break;
                case 'projekts/projekt-detail':
                    require('./core/DAL/database.php');
                    if (isset($_GET["id"]) && $_GET["id"] > 0) {
                        $projekt = getProjektDetail($_GET["id"]);
                        $team = getTeam($projekt['team']);
                        $currentUserId = $_COOKIE["user"];
                        $members = getProjektMembers($_GET["id"], json_decode($currentUserId)->id);
                        $tickets = getTickets($_GET["id"]);
                        // or filter only ids of $members
                        // $messages = getLastThreeMessagesOfEachMember($members);
                        require('./templates/pages/projekts/projekt-detail.php');
                    }
                    break;
                case 'users/users-list':
                    include('core/DAL/database.php');
                    $users = getAllsUsers();
                    include('./templates/pages/users/users-list.php');
                    break;
                case 'users/my-users':
                    include('core/DAL/database.php');
                    $currentUserId = $_COOKIE["user"];
                    $users = getFriends(json_decode($currentUserId)->id);
                    include('./templates/pages/users/my-users.php');
                    break;
                case 'users/user-detail':
                    require('./core/DAL/database.php');
                    if (isset($_GET["id"]) && $_GET["id"] > 0) {
                        $user = getUserDetail($_GET["id"]);
                        $messages = getThisUsersMessages($_GET["id"]);
                        require('./templates/pages/users/user-detail.php');
                    }
                    break;
                case 'teams/teams-list':
                    include('core/DAL/database.php');
                    $teams = getAllTeams();
                    include('./templates/pages/teams/teams-list.php');
                    break;
                case 'teams/my-teams':
                    include('core/DAL/database.php');
                    $currentUserId = $_COOKIE["user"];
                    $teams = getMyTeams(json_decode($currentUserId)->id);
                    include('./templates/pages/teams/my-teams.php');
                    break;
                case 'teams/team-detail':
                    require('./core/DAL/database.php');
                    if (isset($_GET["id"]) && $_GET["id"] > 0) {
                        $team = getTeam($_GET["id"]);
                        $messages = getSendersMessagesReceiversFromOneTeam($_GET["id"]);
                        require('./templates/pages/teams/team-detail.php');
                    }
                    break;
                default:
                    break;
            }
        } else {
            include('./templates/pages/dashboard.php');
        }
    } else {
        if (isset($_GET["connect"])) {
            switch ($_GET["connect"]) {
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