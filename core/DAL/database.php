<?php

/**
 * @return PDO
 */
function getDB()
{
    $host = "localhost";
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
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
    return $db;
}

/**
 * @return array|false
 */
function getUsers()
{
    if (isset($_GET["type"])) {
        if ($_GET["type"] === "friends") {
            return getFriends(27);
        }
    }
    return getAllsUsers();
}

/**
 * @return {int} userId or false
 */
function getUserId()
{
    if (isset($_GET["id"])) {
        return $_GET["id"];
    }
    return 0;
}

/**
 * @return {array|false} self-explanatory
 */
function getAllsUsers()
{
    return getDB()->query('SELECT id, logo, username FROM USER')->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param {int} userId
 * @return {array} I ain't no loner AND I have a function to prove it
 */
function getFriends($userId)
{
    $teams = array();

    foreach (getTeamsId($userId) as $team) {

        // Est-ce-que le user de userId ne se retrouve pas dans la liste ? 

        array_merge($teams, getUsersFromTeam($team));
    }
    return $teams;
}

/**
 * @param {int} userId
 * @return {array} one team ids
 */
function getTeamsId($userId)
{
    return getDB()->query('SELECT team FROM USER_TEAM where user LIKE :userId')->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param {int} teamId
 * @return {array} one team users
 */
function getUsersFromTeam($teamId)
{
    return getDB()->query('SELECT USER.id, USER.username, USER.logo FROM USER_TEAM INNER JOIN USER ON USER_TEAM.user = USER.id WHERE USER_TEAM.team = :teamId')->fetchAll(PDO::FETCH_ASSOC);
}


/*
// with loic on 2021-05-26
function getFriendsCards($userId){
    $teamIds = getDB()query('SELECT team FROM USER_TEAM WHERE user = :userId')->fetchAll(PDO::FETCH_ASSOC);
    foreach($teamIds as $teamId){
        getDB()query('SELECT user FROM USER_TEAM WHERE team = :teamId')->fetchAll(PDO::FETCH_ASSOC);
    }
}

// nested query
SELECT USER.firstname FROM USER_TEAM
    INNER JOIN USER ON USER.id = USER_TEAM.user
WHERE USER_TEAM.team = 100 AND USER_TEAM.user != 317 

// nested query and in loop
select distinct USER.id, USER.logo, USER.username, USER_TEAM.team FROM USER_TEAM
    inner join USER ON USER.id = USER_TEAM.user
where team in (select team from USER_TEAM where user = 21) and user != 21
*/