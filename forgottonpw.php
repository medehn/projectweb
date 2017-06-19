<?php
include('php/nav.php');
include('php/header.php')
?>
<!--Seiten-Navigation-->
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="profile.php">Mein Profil</a></p>
            <p><a href="events.php">Anmeldung Lager</a></p>
        </div>
        <div class="col-sm-6 text-left text-center">
            <div class="container">
                <h1 class="well">Passwort vergessen?</h1>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="container">
                    <label>Deine Email Adresse</label>
                    <input type="text" placeholder="Email Adresse" class="form-control" required>
            </div>
            <br>
        </div>
            <div class="col-sm-8">
                <div class="container" </div>
                <button type="button" class="btn btn-labeled btn-success"
                        data-toggle="modal" data-target="#myModal">Absenden
                </button>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-body">
                        <p>Eine Email wurde an dich versendet! Bitte checke deine
                            Mails!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">Close
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <br/>
    </div>

</div>

<?php
include('php/footer.php')
?>
