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
                        include_once('entity/Projekt.php');
                        include_once('entity/MinTeam.php');

                        $projekt = getProjektDetail($_GET["id"]);
                        $teamInt = getTeamIdFromProjektDetail($_GET["id"])["team"];
                        $team = getTeamName($teamInt);
                        $projekt->setTeam($team);

                        $currentUserId = $_COOKIE["user"];
                        $members = getProjektMembers($_GET["id"], json_decode($currentUserId)->id);
                        $tickets = getTickets($_GET["id"]);

                        require('./templates/pages/projekts/projekt-detail.php');
                    }
                    break;
                case 'users/users-list':
                    include('core/DAL/database.php');

                    $users = getAllUsers();

                    include('./templates/pages/users/users-list.php');
                    break;
                case 'users/my-users':
                    include('core/DAL/database.php');

                    $currentUserId = $_COOKIE["user"];
                    $users = getFriends(json_decode($currentUserId)->id);

                    include('./templates/pages/users/my-users.php');
                    break;
                case 'users/user-detail':
                    if (isset($_GET["id"]) && $_GET["id"] > 0) {
                        require('./core/DAL/database.php');

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
                    if (isset($_GET["id"]) && $_GET["id"] > 0) {
                        require('./core/DAL/database.php');

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