<?php

require 'database.php';
$db = new Database();
$username = $password = '';

if(isset($_POST['username']) && isset($_POST['password'])){
    $result = $db->select('users', array(
        'user_name' => $_POST['username'],
        'user_pass' => $_POST['password']
    ));
    foreach ($result as $key => $value){
        $userid = $value['user_id'];
        $username = $value['user_name'];
        $password = $value['user_pass'];
    }
    if($_POST['username'] == $username && $_POST['password'] == $password){
        @session_start();
        $_SESSION['loggedin'] = 'loggedin';
        $_SESSION['user'] = $username;
        $_SESSION['user_id'] = $userid;
        header('Location: index.php');
    }else{
        echo 'Wrong username/password!!';
    }
}
?>

<!DOCTYPE html>
    <html>
<head>
    <title>Login area</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="row">
<div class="col-lg-6 col-lg-offset-3 center-block" style="padding: 200px">
    <h2>Login</h2>
    <form class="form-horizontal" method="post" action="" role="form">
        <div class="form-group row">
            <div class="col-lg-12">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-12">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-12">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </div>
    </form>
</div></div>
</body>
</html>