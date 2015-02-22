<div id = "data">
    <p>Patient General Data</p>
    <br>
</div>
<form action="general_data.php" method="post">
    <fieldset>
        <div class="form-group">
            <p id = "gender">Gender:</p>
            <select name="gender">
            <option value = "male"> Male </option>
            <option value = "female"> Female </option>
            <option value = "other"> Other </option>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" name="nationality" placeholder="Nationality" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="birth" placeholder="Year of birth" type="text"/>
        </div>
        <div class="form-group">
            <p id = "triage">Triage color code:</p>
            <select name="triage" >
            <option value = "white"> White </option>
            <option value = "green"> Green </option>
            <option value = "yellow"> Yellow </option>
            <option value = "red"> Red </option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Next</button>
        </div>
    </fieldset>
</form>
<div>
    <a href="logout.php">Log Out</a>
</div>
