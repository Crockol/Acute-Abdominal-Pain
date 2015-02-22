<?php
      // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
	//possible diagnosis
	$_SESSION["Pancreatitis"] = 0;
	$_SESSION["Gallstones"] = 0;	
	$_SESSION["Cholecystitis"] = 0;
	$_SESSION["Appendicitis"] = 0;
	$_SESSION["Gastritis"] = 0;
	$_SESSION["Peptic ulcer"] = 0;
	$_SESSION["Diverticulitis"] = 0;
	$_SESSION["Constipation"] = 0;
	$_SESSION["Inflammatory Bowel Disease"] = 0;
	$_SESSION["Irritable Bowel Syndrome"] = 0;
	$_SESSION["Intestinal occlusion"] = 0;
	$_SESSION["Nephrolithiasis"] = 0;
	$_SESSION["Dysmenorrhea"] = 0;
	$_SESSION["Endometrosis"] = 0;
	$_SESSION["Abdominal aortic aneurysm"] = 0;
	$_SESSION["Celiac disease or other Food intollerance"] = 0;
	$_SESSION["Gastroenteritis"] = 0;
	$_SESSION["Diarrhea"] = 0;
	$_SESSION["Peritonitis"] = 0;
	$_SESSION["Pelvic inflammatory disease"] = 0;
	$_SESSION["Gastroesophageal reflux disease"] = 0;
	$_SESSION["Hepatitis"] = 0;

        // query database for inserting new data
        $insertion = query("INSERT INTO general (date, gender, nationality, birth, triage, id) VALUES(NOW(), ?, ?, ?, ?, ?)", 
	$_POST["gender"], $_POST["nationality"], $_POST["birth"], $_POST["triage"], $_SESSION["id"]);
        
        //check if the insertion failed
        if ($insertion === false)
        {
            apologize("patient's general data submission failed, please try again.");
        }
	
        // if insertion not failed, remember patient id and proceed to vital sign
        else
        {
            // identify patient id
            $rows = query("SELECT LAST_INSERT_ID() AS patient");
            $patient = $rows[0]["patient"];
            
            // remember that patient id
            $_SESSION["patient"] = $patient;

	    //scoring possible diagnosis
	    if ($_POST["gender"] === 'female')
	    {
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
	    }

            // render form
            render("vital_sign_form.php", ["title" => "Vital Sign"]);   
        }    
    }
    else
    {
        // else render form
        render("general_data_form.php", ["title" => "General Data"]);
    }

?>

