<?php
require_once __DIR__ . '/../crest/crest.php';

function getUsers()
{
    $result = CRest::call('user.get');
    $users = $result['result'];

    return $users;
}

function getUser($user_id)
{
    $result = CRest::call('user.get', ['ID' => $user_id]);
    $user = $result['result'][0];

    return $user;
}

function getCurrentUser()
{
    $result = CRest::call('user.current');
    $user = $result['result'];

    return $user;
}
