<?php

/**
 * @return PDO
 */
function getDB()
{
    $host = "172.17.0.1";
    $db   = "bwb_pil";
    $user = "root";
    $pass = "root";
    $port = "3434";
    $charset = "utf8";
    $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

    global $db;

    if (!$db instanceof \PDO) {
        try {
            $db = new \PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }
    return $db;
}


/**
 * @return array|false self-explanatory
 */
function getAllUsers()
{
    include_once('entity/MinUser.php');

    return getDB()
        ->query(
            "SELECT id, logo, username, email
            FROM USER"
        )
        ->fetchAll(PDO::FETCH_CLASS, "MinUser");
}

/**
 * @param int userId
 * @return array I ain't no loner AND I have a function to prove it
 */
function getFriends($userId)
{
    include_once('entity/ExtendedUser.php');

    return getDB()
        ->query(
            "SELECT DISTINCT us.id, us.logo, us.username, us.email, us.firstname, us.lastname
            FROM USER_TEAM AS ust
            INNER JOIN USER AS us
            ON us.id = ust.user
            WHERE ust.team
            IN (SELECT team
                FROM USER_TEAM
                WHERE user = '$userId')
            AND ust.user != '$userId'"
        )
        ->fetchAll(PDO::FETCH_CLASS, "ExtendedUser");
}

/**
 * @param string username
 * @param string password
 * @return object|null user data
 */
function getUser($username, $password)
{
    // include_once('entity/MinUser.php');

    return getDB()
        ->query(
            "SELECT id, username
            FROM USER
            WHERE username = '$username'
            AND password = '$password'"
        )
        ->fetch(PDO::FETCH_ASSOC);
}

/**
 * @param int $id : selected user id
 * @return object|null user's details
 */
function getUserDetail($id)
{
    include_once('entity/MinUser.php');

    return getDB()
        ->query(
            "SELECT id, username, email, logo
            FROM USER
            WHERE id = '$id'"
        )
        ->fetchObject('MinUser');
}

/**
 * Because the id doesn't auto-increment
 * need the last one to know the next.
 * @return array the last user id
 */
function getLastUserId()
{
    return getDB()
        ->query(
            "SELECT MAX(id)
            FROM USER"
        )
        ->fetch(PDO::FETCH_ASSOC);
}

/**
 * @return hexadecimal one duo for hexColor
 */
function randomColorDuo()
{
    return dechex(mt_rand(0, 255));
}

/**
 * @return hexadecimal hexColor
 */
function randomHexColor()
{
    return randomColorDuo() . randomColorDuo() . randomColorDuo();
}

/**
 * Adds a new user
 * @param string $firstname
 * @param string $lastname
 * @param string $email
 * @param string $username
 * @param string $password
 * @return bool Success or failure
 */
function addUser($firstname, $lastname, $email, $username, $password)
{
    $id = getLastUserId()['MAX(id)'] + 1;
    $width = rand(100, 250);
    $colA = randomHexColor();
    $colB = randomHexColor();
    $logo = "http://dummyimage.com/{$width}x100.png/{$colA}/{$colB}";

    $user = getDB()->prepare(
        "INSERT INTO USER (id, firstname, lastname, email, logo, username, password)
        VALUES (:id, :firstname, :lastname, :email, :logo, :username, :password)"
    );

    $data = [
        'id' => $id,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'logo' => $logo,
        'username' => $username,
        'password' => $password
    ];

    return $user->execute($data);
}

/**
 * @return array List of all projekts as instances of Projekt()
 */
function getAllProjekts()
{
    include_once('entity/Projekt.php');

    return getDB()
        ->query(
            "SELECT project_id, project_name, description, logo, start_date, end_date
            FROM PROJECT"
        )
        ->fetchAll(PDO::FETCH_CLASS, 'Projekt');
}

/**
 * @param int $projektId
 * @return array List of all projekts as instances of Projekt() 
 */
function getMyProjekts($projektId)
{
    include_once('entity/Projekt.php');

    return getDB()
        ->query(
            "SELECT project_id, project_name, description, logo, start_date, end_date
            FROM PROJECT
            WHERE project_id
            IN (SELECT project
                FROM USER_PROJECT
                WHERE user = '$projektId')"
        )
        ->fetchAll(PDO::FETCH_CLASS, 'Projekt');
}

/**
 * @param int $projektId
 * @return object Infos of designated-by-id projekt
 */
function getProjektDetail($projektId)
{
    include_once('entity/Projekt.php');

    return getDB()
        ->query(
            "SELECT project_id, project_name, description, logo, start_date, end_date
            FROM PROJECT
            WHERE project_id = '$projektId'"
        )
        ->fetchObject('Projekt');
}

/**
 * @return int the id necessary for fetching the team details
 */
function getTeamIdFromProjektDetail($projektId)
{
    return getDB()
        ->query(
            "SELECT team
            FROM PROJECT
            WHERE project_id = '$projektId'"
        )
        ->fetch(PDO::FETCH_ASSOC);
}

/**
 * @param int $teamId
 * @return object|null Returns the team informations as an instance of ExtendedTeam()
 */
function getTeam($teamId)
{
    include_once('entity/ExtendedTeam.php');
    return getDB()
        ->query(
            "SELECT *
            FROM TEAM
            WHERE id = '$teamId'"
        )
        ->fetchObject("ExtendedTeam");
}

/**
 * @param int $teamId
 * @return array|null Returns the team members as an array of instances of MinUser()
 */
function getTeamMembers($teamId)
{
    include_once('entity/MinUser.php');

    return getDB()
        ->query(
            "SELECT DISTINCT us.id, us.logo, us.username, us.email
            FROM USER_TEAM AS ust
            INNER JOIN USER AS us
            ON us.id = ust.user
            WHERE team = '$teamId'"
        )
        ->fetchAll(PDO::FETCH_CLASS, "MinUser");
}

/**
 * @param int $teamId
 * @return object|null Returns the team name as an instance of MinTeam()
 */
function getTeamName($teamId)
{
    include_once('entity/MinTeam.php');
    return getDB()
        ->query(
            "SELECT name
            FROM TEAM
            WHERE id = '$teamId'"
        )
        ->fetchObject("MinTeam");
}

/**
 * @param int team id
 * @return array|null Returns the messages send and received from/by each members of a specific team.
 *                    But only returns the sender
 */
function getTeamMembersMessages($teamId)
{
    return getDB()
        ->query(
            "SELECT msg.header, msg.body, msg.send_date, u.username, u.logo, u.id
            FROM bwb_pil.MESSAGE AS msg
            INNER JOIN bwb_pil.USER AS u
            ON msg.sender = u.id
            WHERE msg.receiver
            IN (SELECT DISTINCT us.id
                FROM USER_TEAM AS ust
                INNER JOIN USER AS us
                ON us.id = ust.user
                WHERE team = '$teamId')
            AND msg.sender
            IN (SELECT DISTINCT us.id
                FROM USER_TEAM AS ust
                INNER JOIN USER AS us
                ON us.id = ust.user
                WHERE team = '$teamId')"
        )
        ->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param int team id
 * @return array|null Returns the messages send and received from/by each members of a specific team.
 *                    And returns both the sender and the receiver
 */
function getSendersMessagesReceiversFromOneTeam($teamId)
{
    return getDB()
        ->query(
            "SELECT sending.id, sending.username, sending.logo, msg.header, msg.body, msg.send_date, receiving.id, receiving.username, receiving.logo
            FROM bwb_pil.MESSAGE AS msg
            INNER JOIN bwb_pil.USER AS sending ON msg.sender = sending.id
            INNER JOIN bwb_pil.USER AS receiving ON msg.receiver = receiving.id
            WHERE msg.receiver
            IN (SELECT DISTINCT us.id
                FROM USER_TEAM AS ust
                INNER JOIN USER AS us
                ON us.id = ust.user
                WHERE team = '$teamId')
            AND msg.sender
            IN (SELECT DISTINCT us.id
                FROM USER_TEAM AS ust
                INNER JOIN USER AS us
                ON us.id = ust.user
                WHERE team = '$teamId')
            ORDER BY msg.send_date DESC"
        )
        ->fetchAll(PDO::FETCH_NUM);
}

/**
 * @param int $projektId
 * @return array|null The users list of this very projekt (without the current user)
 * (id, firstname, lastname, email, logo, username)
 */
function getProjektMembers($projektId, $currentUserId)
{
    include_once('entity/ExtendedUser.php');

    return getDB()
        ->query(
            "SELECT DISTINCT id, firstname, lastname, email, logo, username
            FROM USER
            INNER JOIN USER_PROJECT
            ON id = user
            WHERE user
            IN (SELECT user 
                FROM bwb_pil.USER_PROJECT
                WHERE project = '$projektId')
            AND id != '$currentUserId'"
        )
        ->fetchAll(PDO::FETCH_CLASS, "ExtendedUser");
}


/**
 * @return array|null All the teams (instances of ExtendedTeam())
 */
function getAllTeams()
{
    include_once('entity/ExtendedTeam.php');

    return getDB()
        ->query(
            "SELECT id, name, logo, slogan
            FROM TEAM"
        )
        ->fetchAll(PDO::FETCH_CLASS, 'ExtendedTeam');
}

/**
 * @param int $currentUserId
 * @return array|null List of my teams (instances of ExtendedTeam())
 */
function getMyTeams($currentUserId)
{
    include_once('entity/ExtendedTeam.php');

    return getDB()
        ->query(
            "SELECT id, name, logo, slogan
            FROM TEAM
            WHERE id
            IN (SELECT team
                FROM USER_TEAM
                WHERE user = '$currentUserId')"
        )
        ->fetchAll(PDO::FETCH_CLASS, 'ExtendedTeam');
}

/**
 * @param string header
 * @param string body
 * @param int sender
 * @param int receiver
 * @param datetime Yesterday is history, tomorrow is a mystery
 *                 but today is a gift, that is why it is called the present.
 */
function sendMessage($header, $body, $sender, $receiver, $send_date)
{
    $msg = getDB()->prepare(
        "INSERT INTO MESSAGE (header, body, sender, receiver, send_date)
        VALUES (:header, :body, :sender, :receiver, :send_date)"
    );

    $data = [
        'header' => $header,
        'body' => $body,
        'sender' => $sender,
        'receiver' => $receiver,
        'send_date' => $send_date
    ];

    return $msg->execute($data);
}

/**
 * @param int user's id
 * @return array All their messages
 */
function getThisUsersMessages($id)
{
    return getDB()
        ->query(
            "SELECT msg.header, msg.body, msg.send_date, u.username, u.logo, u.id
            FROM bwb_pil.MESSAGE AS msg
            INNER JOIN bwb_pil.USER AS u
            ON msg.sender = u.id
            WHERE msg.receiver = '$id'"
        )
        ->fetchAll(PDO::FETCH_ASSOC);
}


/**
 * @param int $projektId
 * @return array|null The tickets list of this very projekt 
 */
function getTickets($projektId)
{
    include_once('entity/Ticket.php');

    return getDB()
        ->query(
            "SELECT id, ticket_status, end_date, affected
            FROM bwb_pil.TICKET
            WHERE project_affected = '$projektId'"
        )
        ->fetchAll(PDO::FETCH_CLASS, 'Ticket');
}

/**
 * @param int $ticketId
 * @param string $newStatus
 * @return bool
 */
function updateTicketStatus($ticketId, $ticket_status)
{
    return getDB()
        ->prepare(
            "UPDATE bwb_pil.TICKET
            SET ticket_status = '$ticket_status'
            WHERE id = '$ticketId'"
        )
        ->execute();
}