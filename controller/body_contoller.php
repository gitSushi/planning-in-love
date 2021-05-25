<?php

try {
    if (isset($_GET['pages'])) {
        // $content = $_GET['pages'];
        // $folder = explode('-', $content)[0];
        // $folder = (strrpos($folder, 's') == strlen($folder) - 1) ? $folder : $folder . 's';
        // if (is_file('./pages/$folder/$content.php')) {
        //     include('./pages/$folder/$content.php');
        // }
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
} catch (Exception $e) {
}
