<!-- Seite zur Anmeldung für Events-->
<?php
session_start();
//hier wird geprüft ob der user schon eingelogt ist wenn nicht kommt er ans ende der Seite...
if (isset($_SESSION["username"])) {

    include('php'.DIRECTORY_SEPARATOR.'detailsProfile.php');


    include('php'.DIRECTORY_SEPARATOR.'nav_logout.php'); ?>



<ol class="breadcrumb">
    <li class="active">Home</li>
    <li><a href="#">Anmeldung Events</a></li>

</ol>

<?php
include('php' . DIRECTORY_SEPARATOR . 'header.php')
?>

<!--Seiten-Navigation-->
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-xs-2 sidenav">
            <p><a href="profile.php">Mein Profil</a></p>
            <p><a href="events.php">Anmeldung Events</a></p>
        </div>
        <div class="col-xs-10 text-left">
            <form class="form-horizontal" action="php/eintragenEvents.php" method="post">
                    <!-- Formular Name -->
                    <h3>Anmeldung Lager</h3>

                    <!-- Name-->

                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="name">Name</label>
                        <div class="col-xs-4">
                            <input id="besuchername" name="besuchername" type="text" placeholder="Name"
                                   class="form-control" required="">
                        </div>

                    </div>


                    <!-- Email Adresse-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="emailaddress">Email Addresse</label>
                        <div class="col-xs-4">
                            <input id="email" name="email" type="text" placeholder="Email Adresse"
                                   class="form-control " required="">
                        </div>

                        <!-- Event-->
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Event</label>
                        <div class="col-xs-4">
                            <input type="text" name="eventname" placeholder="Event (Ehrenberg, Schluderns, ..."
                                   class="form-control" required="">
                        </div>
                    </div>

                    <!-- Wieviele Tage?-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Tage</label>
                        <div class="col-xs-4">
                            <input id="tage" name="tage" type="text" placeholder="0 - 7"
                                   class="form-control " required="">

                            <!--<select class="form-control">
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                            </select> -->
                        </div>
                    </div>

                    <!-- Eigenes Zelt?-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Eigenes Zelt</label>
                        <div class="col-xs-4">
                            <input type="text" name="zelt" placeholder="Ja/Nein" class="form-control ">
                            <!-- <div class="radio">
                                 <label>
                                     <input type="radio" value="1" checked="checked">
                                     Ja
                                 </label>
                             </div>
                             <div class="radio">
                                 <label>
                                     <input type="radio" value="2">
                                     Nein
                                 </label>
                             </div>  -->
                        </div>
                    </div>

                    <!-- Eigenes Auto?-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Eigenes Auto</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label">
                                <label>
                                    <input type="radio" value="1" checked="checked">
                                    Ja
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="2">
                                    Nein
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Eigenes Auto-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Platz im Auto für wieviele Personen?</label>
                        <div class="col-xs-4">

                            <input type="text" name="carseats" placeholder="0 - 4" class="form-control">
                            <!-- <select class="form-control">
                                 <option value="2">0</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="2">3</option>
                                 <option value="2">mehr</option>
                             </select> -->
                        </div>
                    </div>

                    <!-- Auto-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label"> Bei Auto: zB Anhängerkupplung, Platz für Equipment,
                            Mitfahrer....</label>
                        <div class="col-xs-4">
                            <input type="text" name="car" placeholder="" class="form-control">
                        </div>
                    </div>


                    <!-- Sonstiges-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="hotel">Infos, Wünsche, Anmerkungen?</label>
                        <div class="col-xs-4">
                            <input type="text" name="sonstiges" placeholder="" class="form-control ">

                        </div>
                    </div>
                <div class="container col-xs-10">
                    <div class="row ">
                            <div class="container-fluid text-center">
                                <button type="submit" name="submit" class="btn btn-labeled btn-success">
                                    <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Absenden
                                </button>


                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Footer mit Facebook, FAQ, Impressum-->
<?php
include('php'.DIRECTORY_SEPARATOR.'footer.php')
?>

    <?php
} else {
//... und wird hier weitergeleitet auf eine neue Seite mit Message
    //header( "Location: index.php");
    echo "Loge dich ein";
}

?>