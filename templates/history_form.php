<div id = "data">
    <p>History</p>
    <br>
</div>
<form action="history.php" method="post">
    <fieldset>
        <div class="form-group">
            <p id = "c">Pain characteristic:</p>
            <select name="feature">
            <option value = "0"> Other </option>
            <option value = "1"> Acute waves of sharp and cramping pain </option>
            <option value = "2"> Waves of dull pain with vomiting </option>
            <option value = "3"> Colicky pain that becomes steady </option>
            <option value = "4"> Constant pain, worsened by movement </option>
            <option value = "5"> Tearing pain </option>
            </select>
        </div>
	<div class="form-group">
            <p id = "c">Severity of the pain:</p>
            <select name="severity">
            <option value = "1"> nagging, annoying, interfering little with activities of daily living </option>
            <option value = "2"> interferes significantly with activities of daily living </option>
            <option value = "3"> disabling, unable to perform activities of daily living </option>
            </select>
        </div>
	<div class="form-group">
            <p id = "c">Pain travels to any other part of the body:</p>
            <select name="travel">
            <option value = "0"> No </option>
            <option value = "1"> Right scapula </option>
            <option value = "2"> Back and/or left shoulder region </option>
	    <option value = "3"> Pubis or vagina </option>
            <option value = "4"> Back and/or pulsatile abdominal mass </option>
	    <option value = "5"> Pain begins as periumbilical/epigastric and migrates to the right lower quadrant of the abdomen </option>
            </select>
        </div> 
	<div class="form-group">
            <p id = "c">Pain is relieved by:</p>
            <select name="relieved">
            <option value = "0"> Nothing </option>
            <option value = "1"> Antiacids </option>
            <option value = "2"> Lying as quietly as possible </option>
            <option value = "3"> Changing position </option>
            <option value = "4"> Eating certain food </option>
            </select>
        </div>
	<div class="form-group">
            <p id = "c">Pain is triggered or worsened by by:</p>
            <select name="worsened">
            <option value = "0"> Nothing </option>
            <option value = "1"> Drinking alchool </option>
            <option value = "2"> Stress </option>
            <option value = "3"> Changing position </option>
            <option value = "4"> Eating certain food </option>
	    <option value = "5"> Menstrual cycle </option>	
            </select>
        </div>
	<div class="form-group">
            <p id = "c">Onset prior than one week:</p>
            <input type="radio" name="onset" value="1">Yes
            <input type="radio" name="onset" value="0" checked>No
        </div>
	<div class="form-group">
            <p id = "c">Recurrent pain:</p>
            <input type="radio" name="recurrent" value="1">Yes
            <input type="radio" name="recurrent" value="0" checked>No
        </div>
	<div class="form-group">
            <p id = "c">Associated symptoms:</p>
            <input type="hidden" name="heartburn" value="0">
            <input type="checkbox" name="heartburn" value="1">Heartburn/Regurgitation<br>
            <input type="hidden" name="anorexia" value="0">
            <input type="checkbox" name="anorexia" value="1">Fullness/Anorexia<br>
            <input type="hidden" name="vomiting" value="0">
            <input type="checkbox" name="vomiting" value="1">Nausea or Vomiting<br>
            <input type="hidden" name="haematemesis" value="0">
            <input type="checkbox" name="haematemesis" value="1">Haematemesis<br>
            <input type="hidden" name="constipation" value="0">
            <input type="checkbox" name="constipation" value="1">Constipation<br>
            <input type="hidden" name="diarrhea" value="0">
            <input type="checkbox" name="diarrhea" value="1">Diarrhea<br>
            <input type="hidden" name="fever" value="0">
            <input type="checkbox" name="fever" value="1">Fever<br>            
            <input type="hidden" name="bloody" value="0">
            <input type="checkbox" name="bloody" value="1">Bloody stool<br>
            <input type="hidden" name="tenesmo" value="0">
	    <input type="checkbox" name="tenesmo" value="1">Tenesmo<br>
            <input type="hidden" name="dysuria" value="0">
            <input type="checkbox" name="dysuria" value="1">Dysuria/Oliguria<br>
            <input type="hidden" name="cough" value="0">
            <input type="checkbox" name="cough" value="1">Cough/Dyspnea<br>
        </div>
	<div class="form-group" id = "submit">
            <button type="submit" class="btn btn-default">Next</button>
        </div>
    </fieldset>
</form>
<div>
    <a href="logout.php">Log Out</a>
</div>
