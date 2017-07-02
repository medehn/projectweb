<!-- Diese Datei wird nicht verwendet, nur ein Versuch der eventuell noch fortgeführt wird in den nächsten Wochen -->


<?php if($editMode): ?>
<h1><p> Profil von: <input type="text" name="username" value="<?php echo $row['fname'], "&nbsp", $row['lname']; ?>">
        <?php else:  ?>
    <h1>Profil von:  <?php echo $row['fname'], "&nbsp", $row['lname']; ?> </h1>
    <?php endif; ?>
    <br>
    <?php if ($editMode): ?>
        <p>Name: <input type="text" name="username" value="<?php echo $row['username']; ?>"> </p> <!-- Funktion aus Datenbank geholt-->
    <?php else:  ?>
        <p>Name: <?php echo $row['username']; ?> </p>
    <?php endif; ?>
    <br>
    <?php if ($editMode): ?>
        <p>Funktion: <input type="text" name="funktion" value="<?php echo $row['funktion']; ?>"> </p> <!-- Funktion aus Datenbank geholt-->
    <?php else:  ?>
        <p>Funktion: <?php echo $row['funktion']; ?> </p>
    <?php endif; ?>
    <br>
    <?php if ($editMode): ?>
        <p>Besondere Fähigkeiten: <input type="text" name="skills" value="<?php echo $row['skills']; ?>"> </p>
    <?php else: ?>
        <p>Besondere Fähigkeiten: <?php echo $row['skills']; ?> </p>
    <?php endif; ?>
    <br>
    <?php if ($editMode): ?>
        <p>Interessen: <input type="text" name="interests" value="<?php echo $row['interests']; ?>"> </p>
    <?php else: ?>
        <p>Interessen: <?php echo $row['interests']; ?> </p>
    <?php endif; ?>
    <br>

<!-- Gehört zu auszubauendem Versuch dazu, haben uns jedoch für eine andere Methode zum Updaten entschieden -->

    <?php $editMode = false;
    if(isset($_GET['editMode']) && $_GET['editMode'] == 'true') {
    $editMode = true;
    }
    ?>