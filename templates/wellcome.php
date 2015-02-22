<div id = "wellcome">
    <?php 
    $raws = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
    $raw = $raws[0];
    $user = $raw["username"];
    ?>    
    <p>Welcome Dr. <?= htmlspecialchars($user) ?></p>
    <br>
</div>
<div>
<p>Thank you for choosing AAP-roots.<br> To start the visit, please go to <a href="general_data.php">General Data</a>.</p>
<div>
    <a href="logout.php">Log Out</a>
</div>
<br>
<div id = b>
    <a href="../templates/documentation.php">Documentation</a>
</div>
<div id = b>
    <a href="../templates/contact.php">Contact</a>
</div>

