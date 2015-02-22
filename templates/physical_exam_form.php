<div id = "data">
    <p>Physical Examination</p>
    <br>
</div>
<form action="physical_exam.php" method="post">
    <fieldset>
        <div class="form-group">
            <p id = "c">Pain localization:</p>
	    <input type="hidden" name="right_hypochondriac" value="0">
            <input type="checkbox" name="right_hypochondriac" value="1">right hypochondriac     
            <input type="hidden" name="epigastric" value="0">
            <input type="checkbox" name="epigastric" value="1">epigastric
	    <input type="hidden" name="left_hypochondriac" value="0">
            <input type="checkbox" name="left_hypochondriac" value="1">left hypochondriac<br>            
            <input type="hidden" name="right_lumbar" value="0">
            <input type="checkbox" name="right_lumbar" value="1">right lumbar
            <input type="hidden" name="umbilical" value="0">
            <input type="checkbox" name="umbilical" value="1">umbilical
            <input type="hidden" name="left_lumbar" value="0">
            <input type="checkbox" name="left_lumbar" value="1">left lumbar<br>
            <input type="hidden" name="right_inguinal" value="0">
            <input type="checkbox" name="right_inguinal" value="1">right inguinal
            <input type="hidden" name="hypogastric" value="0">
            <input type="checkbox" name="hypogastric" value="1">hypogastric
            <input type="hidden" name="left_inguinal" value="0">
            <input type="checkbox" name="left_inguinal" value="1">left inguinal<br>  
	    <input type="hidden" name="diffuse" value="0">
            <input type="checkbox" name="diffuse" value="1">Diffuse            
        </div>
<br>
	<div class="form-group">
            <p id = "c">Signs:</p>
            <input type="hidden" name="murphy" value="0">
            <input type="checkbox" name="murphy" value="1">Murphy<br>
            <input type="hidden" name="lg" value="0">
            <input type="checkbox" name="lg" value="1">Left Giordano<br>
            <input type="hidden" name="rg" value="0">
            <input type="checkbox" name="rg" value="1">Right Giordano<br>
            <input type="hidden" name="blumberg" value="0">
            <input type="checkbox" name="blumberg" value="1">Blumberg<br>
        </div>
<br>
	<div class="form-group">
            <p id = "c">Inspection:</p>
            <input type="radio" name="inspection" value="1">Abdominal distension
            <input type="radio" name="inspection" value="0" checked>Normal
        </div>
	<div class="form-group">
            <p id = "c">Palpation:</p>
	    <input type="radio" name="palpation" value="1">Tenderness/Muscolar defense
            <input type="radio" name="palpation" value="0" checked>Treatable
        </div>
	<div class="form-group">
            <p id = "c">Auscultation:</p>
            <select name="auscultation">
            <option value = "1"> Normal </option>
            <option value = "2"> Decreased </option>
            <option value = "3"> Increased </option>
            </select>
        </div>
            <button type="submit" class="btn btn-default">Next</button>
        </div>
    </fieldset>
</form>
<div>
    <a href="logout.php">Log Out</a>
</div>
