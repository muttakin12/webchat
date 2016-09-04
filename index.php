<?php

@session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'loggedin'){

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=sedge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target="mynavbar" type="button">
                <span class="sr-only">
                    menu
                </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Chat Application </a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">ADD</a></li>
                <li><a href="#">List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

</nav>




<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Chat Box</h1>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="list-group" id="friends">
                    </div>
                </div>
                <div class="col-lg-9 pre-scrollable" id="div1"></div>
            </div>
        </div>
        <div class="panel-footer">
            <form class="form-horizontal" method="post" action="" id="message-box">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="text" id="msg" name="msg" placeholder="Message" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-offset-8 col-sm-4">
                        <input type="submit" id="send" value="submit" class="btn btn-primary pull-right">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</body>
</html>
<?php
}else{
    header('Location: login.php');
}
?>

