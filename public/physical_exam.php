<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $insertion = query("INSERT INTO exam (patient, lh, ep, rh, ll, um, rl, li, hy, ri, diffuse, murphy, lg, rg, blumberg, inspection, palpation, auscultation) 
	VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", 
        $_SESSION["patient"], $_POST["left_hypochondriac"], $_POST["epigastric"], $_POST["right_hypochondriac"], $_POST["left_lumbar"],
        $_POST["umbilical"], $_POST["right_lumbar"], $_POST["left_inguinal"], $_POST["hypogastric"], $_POST["right_inguinal"], $_POST["diffuse"], $_POST["murphy"],
	$_POST["lg"], $_POST["rg"], $_POST["blumberg"], $_POST["inspection"], $_POST["palpation"], $_POST["auscultation"]);
        
        //check if the insertion failed
        if ($insertion === false)
        {
            apologize("patient's physical examination submission failed, please try again.");
        }

	//scoring possible diagnosis
	if($_POST["murphy"] == 1)
	{
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 2;
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;
	}

	if($_POST["lg"] == 1)
	{
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 2;
	}

	if($_POST["rg"] == 1)
	{
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 2;
	}

	if($_POST["blumberg"] == 1)
	{
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 2;
	}

	if($_POST["inspection"] == 1)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Diverticulitis"] = $_SESSION["Diverticulitis"] + 1;
		$_SESSION["Constipation"] = $_SESSION["Constipation"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Celiac disease or other Food intollerance"] = $_SESSION["Celiac disease or other Food intollerance"] + 1;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;	
	}

	if($_POST["palpation"] == 1)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 1;
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 1;
		$_SESSION["Diverticulitis"] = $_SESSION["Diverticulitis"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;	
		$_SESSION["Diarrhea"] = $_SESSION["Diarrhea"] + 1;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;	
	}

	if($_POST["auscultation"] == 2)
	{
		$_SESSION["Diverticulitis"] = $_SESSION["Diverticulitis"] + 1;
		$_SESSION["Constipation"] = $_SESSION["Constipation"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;
	}

	else if($_POST["auscultation"] == 3)
	{
		$_SESSION["Constipation"] = $_SESSION["Constipation"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Celiac disease or other Food intollerance"] = $_SESSION["Celiac disease or other Food intollerance"] + 1;
		$_SESSION["Diarrhea"] = $_SESSION["Diarrhea"] + 1;
	}

	if($_POST["left_hypochondriac"] == 1)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
	}

	if($_POST["epigastric"] == 1)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 1;
		$_SESSION["Gallstones"] = $_SESSION["Gallstones"] + 1;
		$_SESSION["Gastritis"] = $_SESSION["Gastritis"] + 2;
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 2;
		$_SESSION["Gastroesophageal reflux disease"] = $_SESSION["Gastroesophageal reflux disease"] + 1;	
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;
	}

	if($_POST["right_hypochondriac"] == 1)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 1;
		$_SESSION["Gallstones"] = $_SESSION["Gallstones"] + 1;
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;
	}

	if($_POST["left_lumbar"] == 1)
	{
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;
	}

	if($_POST["umbilical"] == 1)
	{
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
	}

	if($_POST["right_lumbar"] == 1)
	{
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;		
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;
	}

	if($_POST["left_inguinal"] == 1)
	{
		$_SESSION["Diverticulitis"] = $_SESSION["Diverticulitis"] + 2;
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;
	}

	if($_POST["hypogastric"] == 1)
	{
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;
	}

	if($_POST["right_inguinal"] == 1)
	{
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;
	}

	if($_POST["diffuse"] == 1)
	{
		$_SESSION["Constipation"] = $_SESSION["Constipation"] + 1;
		$_SESSION["Gallstones"] = $_SESSION["Gallstones"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;
		$_SESSION["Celiac disease or other Food intollerance"] = $_SESSION["Celiac disease or other Food intollerance"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
		$_SESSION["Diarrhea"] = $_SESSION["Diarrhea"] + 1;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;
	}
        

		//check the diagnosis
		$key0 = array_keys($_SESSION, "5");
		$key1 = array_keys($_SESSION, "6");
		$key2 = array_keys($_SESSION, "7");
		$key3 = array_keys($_SESSION, "8");
		$key4 = array_keys($_SESSION, "9");
		$key5 = array_keys($_SESSION, "10");
		$key6 = array_keys($_SESSION, "11");
		
		if (empty($key0) && empty($key1) && empty($key2) && empty($key3) && empty($key4) && empty($key5) && empty($key6))
		{
		$diagnosis = "Undefined abdominal pain";
		$diagnosis1 = null;
		$diagnosis2 = null;
		}
		
		else if (!empty ($key6))
		{
			if (!empty ($key6 ["2"]))
			{
			$diagnosis = $key6 ["0"];
			$diagnosis1 = $key6 ["1"];				
			$diagnosis2 = $key6 ["2"];
			}

			else if (!empty ($key6 ["1"]))
			{			
			$diagnosis = $key6 ["0"];
			$diagnosis1 = $key6 ["1"];				
			$diagnosis2 = null;
			}

			else
			{
			$diagnosis = $key6 ["0"];
			$diagnosis1 = null;
			$diagnosis2 = null;
			}
		}

		else if (!empty($key5))
		{
			if (!empty ($key5 ["2"]))
			{
			$diagnosis = $key5 ["0"];
			$diagnosis1 = $key5 ["1"];				
			$diagnosis2 = $key5 ["2"];
			}

			else if (!empty ($key5 ["1"]))
			{			
			$diagnosis = $key5 ["0"];
			$diagnosis1 = $key5 ["1"];				
			$diagnosis2 = null;
			}

			else
			{
			$diagnosis = $key5 ["0"];
			$diagnosis1 = null;
			$diagnosis2 = null;
			}		
		}

		else if (!empty($key4))
		{
			if (!empty ($key4 ["2"]))
			{
			$diagnosis = $key4 ["0"];
			$diagnosis1 = $key4 ["1"];				
			$diagnosis2 = $key4 ["2"];
			}

			else if (!empty ($key4 ["1"]))
			{			
			$diagnosis = $key4 ["0"];
			$diagnosis1 = $key4 ["1"];				
			$diagnosis2 = null;
			}

			else
			{
			$diagnosis = $key4 ["0"];
			$diagnosis1 = null;
			$diagnosis2 = null;
			}		
		}
		else if (!empty($key3))
		{
			if (!empty ($key3 ["2"]))
			{
			$diagnosis = $key3 ["0"];
			$diagnosis1 = $key3 ["1"];				
			$diagnosis2 = $key3 ["2"];
			}

			else if (!empty ($key3 ["1"]))
			{			
			$diagnosis = $key3 ["0"];
			$diagnosis1 = $key3 ["1"];				
			$diagnosis2 = null;
			}

			else
			{
			$diagnosis = $key3 ["0"];
			$diagnosis1 = null;
			$diagnosis2 = null;
			}		
		}

		else if (!empty($key2))
		{
			if (!empty ($key2 ["2"]))
			{
			$diagnosis = $key2 ["0"];
			$diagnosis1 = $key2 ["1"];				
			$diagnosis2 = $key2 ["2"];
			}

			else if (!empty ($key2 ["1"]))
			{			
			$diagnosis = $key2 ["0"];
			$diagnosis1 = $key2 ["1"];				
			$diagnosis2 = null;
			}

			else
			{
			$diagnosis = $key2 ["0"];
			$diagnosis1 = null;
			$diagnosis2 = null;
			}		
		}

		else if (!empty($key1))
		{
			if (!empty ($key1 ["2"]))
			{
			$diagnosis = $key1 ["0"];
			$diagnosis1 = $key1 ["1"];				
			$diagnosis2 = $key1 ["2"];
			}

			else if (!empty ($key1 ["1"]))
			{			
			$diagnosis = $key1 ["0"];
			$diagnosis1 = $key1 ["1"];				
			$diagnosis2 = null;
			}

			else
			{
			$diagnosis = $key1 ["0"];
			$diagnosis1 = null;
			$diagnosis2 = null;
			}		
		}

		else if (!empty($key0))
		{
			if (!empty ($key0 ["2"]))
			{
			$diagnosis = $key0 ["0"];
			$diagnosis1 = $key0 ["1"];				
			$diagnosis2 = $key0 ["2"];
			}

			else if (!empty ($key0 ["1"]))
			{			
			$diagnosis = $key0 ["0"];
			$diagnosis1 = $key0 ["1"];				
			$diagnosis2 = null;
			}

			else
			{
			$diagnosis = $key0 ["0"];
			$diagnosis1 = null;
			$diagnosis2 = null;
			}		
		}
 		
	

		//remember diagnosis
                $_SESSION["diagnosis"] = $diagnosis;
		$_SESSION["diagnosis1"] = $diagnosis1;
		$_SESSION["diagnosis2"] = $diagnosis2;

		/*print_r($_SESSION);*/

	    	//render form
	        render("results_form.php", ["title" => "Results"]);  		
		 
            
    }
    else
    {
        // else render form
        render("physical_exam_form.php", ["title" => "Physical Examination"]);
    }

?>

