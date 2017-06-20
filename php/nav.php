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
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">

                <li class="menu-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Verein
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="menu-item dropdown"><a href="geschichte.php" class="dropdown-toggle"
                                                          data-toggle="dropdown">Geschichte </a>
                        </li>
                        <li class="menu-item dropdown"><a href="mitglieder.php" class="dropdown-toggle"
                                                          data-toggle="dropdown">Mitglieder </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kontakt
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="menu-item dropdown"><a href="ueberuns.php" class="dropdown-toggle"
                                                          data-toggle="dropdown">Über Uns </a>
                        </li>

                        <li class="divider"></li>
                        <li class="menu-item dropdown"><i class="fa"></i><a href="impressum.php" class="dropdown-toggle"
                                                                            data-toggle="dropdown">Impressum</a>
                        </li>
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!-- Login mit Lightbox-->
                <li><a href="#"><span class="glyphicon glyphicon-log-in" data-toggle="modal"
                                      data-target="#login-modal">  Login</span></a></li>
                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="loginmodal-container">
                            <h1>Einloggen</h1><br>
                            <form>
                                <input type="text" name="user" placeholder="Username">
                                <input type="password" name="pass" placeholder="Password">
                                <input type="submit" name="login" class="login loginmodal-submit"
                                       value="Login">
                            </form>
                            <div class="login-help">
                                <a href="register.php">Registrierung</a> - <a href="forgottonpw.php">Passwort
                                    vergessen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>


</nav>

