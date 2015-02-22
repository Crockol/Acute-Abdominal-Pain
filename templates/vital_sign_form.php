<div id = "data">
    <p>Vital Signs</p>
    <br>
</div>
<form action="vital_sign.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="systolic" placeholder="Systolic blood pressure" type="text"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="diastolic" placeholder="Diastolic blood pressure" type="text"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="heart" placeholder="Heart rate" type="text"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="resp" placeholder="Respiratory rate" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Next</button>
        </div>
    </fieldset>
</form>
<div>
    <a href="logout.php">Log Out</a>
</div>
