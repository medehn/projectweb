<?php
include('php/nav.php'); ?>
<ol class="breadcrumb">
    <li class="active">Home</li>
    <li><a href="#">Lagerleben</a></li>
</ol>
<?php
include('php'.DIRECTORY_SEPARATOR.'header.php')
?>


<!--Seiten-Navigation-->
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-xs-2 sidenav">
            <p><a href="profile.php" id="navlink">Mein Profil</a></p>
            <p><a href="events.php" id="navlink">Anmeldung Events</a></p>
        </div>

        <div class="col-xs-6 text-left">

            <p class="container-fluid text-center">
                <br>
            <p>
            <h2 class="container-fluid text-center">Lagerleben</h2></p>
            <br>
            Neben den Kämpfen und dem Handwerklichen
            Programm, nehmen wir auch bei Festen in und rund um Tirol teil. Wir lagern mit
            mittelalterlicher Ausrüstung und zeigen, wie die Menschen damals gelebt haben könnten.
            Strom und technische Luxusgüter kommen dabei für uns nicht in Frage…</p>
            <br><br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/kampf.jpg" alt="Ritter">
                    </div>

                    <div class="item">
                        <img src="img/lager.jpg" alt="Lager">
                    </div>

                    <div class="item">
                        <img src="img/ritter.jpg" alt="Ritter">
                    </div>
                    <div class="item">
                        <img src="img/schmiede.jpg" alt="Schmieden">
                    </div>
                    <div class="item">
                        <img src="img/rüsten.jpg" alt="Rüsten">
                    </div>
                </div>


                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include('php/footer.php')
?>

