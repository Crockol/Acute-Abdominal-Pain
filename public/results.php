<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
	if ($_SESSION["diagnosis1"] === null && $_SESSION["diagnosis2"] === null)
	{
		$_SESSION["diagnosis1"] = 0;
		$_SESSION["diagnosis2"] = 0;
	}

	else if ($_SESSION["diagnosis2"] === null)
	{
		$_SESSION["diagnosis2"] = 0;
	}


        $insertion = query("INSERT INTO results (patient, usefull, aapdiagnosis, aapdiagnosis1, aapdiagnosis2, diagnosis) VALUES(?, ?, ?, ?, ?, ?)", 
        $_SESSION["patient"], $_POST["usefull"], $_SESSION["diagnosis"], $_SESSION["diagnosis1"], $_SESSION["diagnosis2"], $_POST["diagnosis"]);
        
        //check if the insertion failed
        if ($insertion === false)
        {
            apologize("results submission failed, please try again.");
        }
        // if insertion not failed, finish
        else
        {
            // redirect to wellcome
            redirect("/project/public");
        }    
    }
    else
    {
        // else render form
        render("results_form.php", ["title" => "Results"]);
    }

?>

