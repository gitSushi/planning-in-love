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
    return getDB()->query("SELECT id, logo, username FROM USER")->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param {int} userId
 * @return {array} I ain't no loner AND I have a function to prove it
 */
function getFriends($userId)
{
    return getDB()
        ->query(
            "SELECT DISTINCT us.id, us.logo, us.username, ust.team
            FROM USER_TEAM AS ust
            INNER JOIN USER AS us
            ON us.id = ust.user
            WHERE team IN (SELECT team FROM USER_TEAM WHERE user = '$userId') AND user != '$userId'"
        )
        ->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param {string, string} username, password
 * @return {array} user data or false
 */
function getUser($username, $password)
{
    return getDB()->query("SELECT id, username FROM USER WHERE username = '$username' AND password = '$password'")->fetch(PDO::FETCH_ASSOC);
}

/**
 * @return {associative array} the last user id
 */
function getLastUserId()
{
    return getDB()->query("SELECT MAX(id) FROM USER")->fetch(PDO::FETCH_ASSOC);
}

/**
 * @return {hexadecimal} one duo for hexColor
 */
function randomColorDuo()
{
    return dechex(mt_rand(0, 255));
}

/**
 * @return {hexadecimal} hexColor
 */
function randomHexColor()
{
    return randomColorDuo() . randomColorDuo() . randomColorDuo();
}

/**
 * Adds a new user
 * @param {string, string, string, string, string}
 * @return
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