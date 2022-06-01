<?php
function navbar() {
    ?>
    <nav class="navbar">
        <a href="../html/index.php">Home</a>
        <a href="../php/eventi.php">Eventi</a>
        <a href="../../fitness%20website/php/prenotazioni.php">Prenotazioni</a>
        <a href="../html/prezzi.php">Prezzi</a>
        <a href="../html/trainers.php">Allenatori</a>
        <a href="../../fitness%20website/php/profilo.php">Profilo</a>
        <a href="../html/index.php"><button type="button" class="btn btn-danger">Logout <?php echo $_SESSION['ruolo']?></a>
    </nav>
    <?php
}
?>
