<?php
require 'database.php';

@session_start();
$db = new Database();

$request = $_REQUEST['task'];

switch($request){
    case 'show':
        $friend = $_REQUEST['friend'];
        $search = $db->select('users', array('user_name' => $friend));
        foreach($search as $key => $value){
            $friend_id = $value['user_id'];
        }
        $_SESSION['friend_id'] = $friend_id;
        $result = $db->select('messages', array(), 'msg_from = '.$_SESSION['user_id'].' AND msg_to = '.$friend_id.' OR msg_from = '.$friend_id.' AND msg_to = '.$_SESSION['user_id']);
        foreach($result as $key => $value){
            echo '<p class="lead bg-info">'.$value['message'].'</p>';
        }
        break;

    case 'insert':
        $db->insert('messages', array(
            'message' => $_REQUEST['data'],
            'msg_from' => $_SESSION['user_id'],
            'msg_to' => $_SESSION['friend_id']
        ));
        break;

    case 'friendlist':
        $data = $db->select('users', array(
            'user_id' => $_SESSION['user_id']
        ));
        foreach($data as $key => $value){
            echo '<a class="list-group-item" href="#" id="friend" rel="'.$value['friendlist'].'">'.$value['friendlist'].'</a>';
        }
        break;
}