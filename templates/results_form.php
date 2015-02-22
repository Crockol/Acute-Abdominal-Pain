<div id = "results">
    <?php 
    $raws = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
    $raw = $raws[0];
    $user = $raw["username"];
    ?>    
    <p>Thank you Dr. <?= htmlspecialchars($user) ?></p>
    <br>
</div>
<div>
<p>According to the clinical data of the patient, the most likely diagnosis is:</p><br>
	
	<?php if ($_SESSION["diagnosis1"] === null && $_SESSION["diagnosis2"] === null): ?>
		<p id = c> <?= htmlspecialchars($_SESSION["diagnosis"]) ?> </p>
	<?php elseif ($_SESSION["diagnosis2"] === null): ?>
		<p id = c> <?= htmlspecialchars($_SESSION["diagnosis"]) ?> and/or <?= htmlspecialchars($_SESSION["diagnosis1"]) ?> </p>
	<?php else: ?>
		<p id = c> <?= htmlspecialchars($_SESSION["diagnosis"]) ?> and/or <?= htmlspecialchars($_SESSION["diagnosis1"]) ?> and/or 
		<?= htmlspecialchars($_SESSION["diagnosis2"]) ?> </p>	
	<?php endif ?>

</div>
<br>
<p>For research proposal, please help us improving the quality of this app, submitting the next form:</p>
<form action="results.php" method="post">
    <fieldset>
	<div class="form-group">
            <p id = "usefull"> Was AAP-roots usefull for your visit? </p>
            <select name="usefull">
            <option value = "1"> Yes </option>
            <option value = "0"> No </option>
            </select>
	</div>
	<div class="form-group">
	    <p id = "diagnosis">Please, write here the actual diagnosis that you made at the end of your visit:</p>
            <input class="form-control" name="diagnosis" placeholder="Diagnosis" type="text"/>
        </div>
	<div class="form-group">
            <button type="submit" class="btn btn-default">Finish</button>
        </div>
    </fieldset>
</form>
<div>
    <a href="logout.php">Log Out</a>
</div>
