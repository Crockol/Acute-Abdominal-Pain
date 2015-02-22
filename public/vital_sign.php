<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query database for inserting new user
        $insertion = query("INSERT INTO vital (patient, systolic, diastolic, heart, resp) VALUES(?, ?, ?, ?, ?)",
	$_SESSION["patient"], $_POST["systolic"], $_POST["diastolic"], $_POST["heart"], $_POST["resp"]);
	        
        //check if the insertion failed
        if ($insertion === false)
        {
            apologize("patient's vital sign submission failed, please try again.");
        }
	
	//scoring possible diagnosis
	if($_POST["heart"] > 90)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;
	}
	
	if($_POST["systolic"] == 0 || $_POST["diastolic"] == 0)
	{
	    render("history_form.php", ["title" => "Medical History"]); 
	    return 0;  
        }

	// if insertion not failed, check red flags
	else if( ($_POST["heart"] / $_POST["systolic"]) > 1 || $_POST["diastolic"] < 50 || $_POST["resp"] > 25)
        {
            render("red_flag1.php", ["title" => "RED FLAG"]);
	    return 0; 
        }
	
        //proceed to history
        render("history_form.php", ["title" => "Medical History"]);   
           
    }
    else
    {
        // else render form
        render("vital_sign_form.php", ["title" => "Vital Sign"]);
    }

?>

