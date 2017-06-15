<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>


<!-- Navigation-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../../../../php/views/index.php">Home</a></li>
                <li><a href="#">Verein</a></li>
                <li><a href="#">Mitglieder</a></li>
                <li><a href="e">Veranstaltungen</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Login mit Lightbox-->
                <li><a href="#"><span class="glyphicon glyphicon-log-in"data-toggle="modal"data-target="#login-modal">Login</span></a></li>
                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="loginmodal-container">
                            <h1>Einloggen</h1><br>
                            <form>
                                <input type="text" name="user" placeholder="Username">
                                <input type="password" name="pass" placeholder="Password">
                                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                            </form>
                            <div class="login-help">
                                <a href="#">Registrierung</a> - <a href="#">Passwort vergessen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>

<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="active">Home</li>
</ol>

<div id="container">
    <div class="container-fluid">

        <div id="logo" class="col-sm-2 text-center">
            <img class =logoImg src="img\logo.jpg" alt="Logo">
        </div>
        <div id = "header1" class="col-sm-10 text-center">
            <img class =headerImg src="img\header.jpg" alt="Header">
        </div>
    </div>