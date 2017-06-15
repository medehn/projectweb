<?php

echo $this->header;

?>
<!--Seiten-Navigation-->
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="events.php">Mein Profil</a></p>
            <p><a href="events.php">Anmeldung Lager</a></p>
            <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-6 text-left">
            <form action="contact.php">
                <h2>Anmeldung Mittelalterlager</h2>
                Name
                <br>
                <input type = "text"
                       placeholder="Name">
                <br><br>
                Lager (Ehrenberg, Schluderns, ...)
                <br>
                <input type = "text"
                       placeholder="Lager">
                <br><br>
                Wieviele Tage?
                <br>
                <input type = "radio" value="2" id="2">
                <label for="2">2</label>
                <br>
                <input type = "radio" value="3" id="3">
                <label for="3">3</label>
                <br>
                <input type = "radio" value="4" id="4">
                <label for="4">4</label>
                <br><br>
                Eigenes Zelt?
                <br>
                <input type = "radio" value="ja" id="zeltja">
                <label for="zeltja">ja</label>
                <br>
                <input type = "radio" value="nein" id="zeltnein">
                <label for="zeltnein">nein</label>
                <br><br>

                Eigenes Auto?
                <br>
                <input type = "radio" value="ja" id="autoja">
                <label for="autoja">ja</label>
                <br>
                Falls ja, bitte angeben: Welches Auto (Anhängerkupplung, klein oder groß), Freie Sitzplätze, schon ausgemachte Mitfahrer
                <br>
                <input type = "text">
                <br>
                <input type = "radio" value="nein" id="autonein">
                <label for="autonein">nein</label>
                <br><br>

                Infos, Anmerkungen, Wünsche
                <br>
                <input type = "text">
                <br><br>
                <input type="Submit" name="absenden" value="absenden">
            </form>
        </div>
    </div>
</div>
</div>
<?php

echo $this->footer;

?>