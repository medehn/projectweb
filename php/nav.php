<!-- Navigation - wird in die normalen Seiten durch include eingebunden-->
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">Verein</a></li>
                <li><a href="#">Mitglieder</a></li>
                <li><a href="#">Veranstaltungen</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Login mit Lightbox-->
                <li><a href="#"><span class="glyphicon glyphicon-log-in"data-toggle="modal"data-target="#login-modal">  Login</span></a></li>
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
                                <a href="register.php">Registrierung</a> - <a href="#">Passwort vergessen</a>
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