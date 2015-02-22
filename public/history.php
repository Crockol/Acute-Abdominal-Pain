<?php

    // configuration
    require("../includes/config.php"); 
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query database for inserting new user
        $insertion = query("INSERT INTO history (patient, feature, recurrent, onset, severity, travel, relieved, worsened, heartburn, anorexia,
        vomiting, haematemesis, constipation, diarrhea, fever, bloody, tenesmo, dysuria, cough) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
        $_SESSION["patient"], $_POST["feature"], $_POST["recurrent"], $_POST["onset"], $_POST["severity"], $_POST["travel"], $_POST["relieved"], 
	$_POST["worsened"], $_POST["heartburn"], $_POST["anorexia"], $_POST["vomiting"], $_POST["haematemesis"], $_POST["constipation"], 
        $_POST["diarrhea"], $_POST["fever"], $_POST["bloody"], $_POST["tenesmo"], $_POST["dysuria"], $_POST["cough"]);
        
        //check if the insertion failed
        if ($insertion === false)
        {
            apologize("patient's history submission failed, please try again.");
        }

	//scoring possible diagnosis
	if($_POST["feature"] == 1)
	{
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 1;
		$_SESSION["Gallstones"] = $_SESSION["Gallstones"] + 1;
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
		$_SESSION["Celiac disease or other Food intollerance"] = $_SESSION["Celiac disease or other Food intollerance"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
		$_SESSION["Diarrhea"] = $_SESSION["Diarrhea"] + 1;	
	}

	else if($_POST["feature"] == 2)
	{
		$_SESSION["Diverticulitis"] = $_SESSION["Diverticulitis"] + 1;
	}

	else if($_POST["feature"] == 3)
	{
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
	}

	else if($_POST["feature"] == 4)
	{
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;
	}

	else if($_POST["feature"] == 5)
	{
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;
	}


	if($_POST["onset"] == 0)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 1;
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 1;
		$_SESSION["Gallstones"] = $_SESSION["Gallstones"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] - 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;
	}

	if($_POST["recurrent"] == 1)
	{
		$_SESSION["Gastritis"] = $_SESSION["Gastritis"] + 1;
		$_SESSION["Constipation"] = $_SESSION["Constipation"] + 1;
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;	
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
		$_SESSION["Celiac disease or other Food intollerance"] = $_SESSION["Celiac disease or other Food intollerance"] + 1;
		$_SESSION["Gastroesophageal reflux disease"] = $_SESSION["Gastroesophageal reflux disease"] + 1;
	}



	if($_POST["severity"] == 2)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Diverticulitis"] = $_SESSION["Diverticulitis"] + 1;
		$_SESSION["Gallstones"] = $_SESSION["Gallstones"] + 1;
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 1;	
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;	
	}

	else if($_POST["severity"] == 3)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;
	}

	if($_POST["travel"] == 1)
	{
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 1;
		$_SESSION["Gallstones"] = $_SESSION["Gallstones"] + 2;
	}

	else if($_POST["travel"] == 2)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 1;
	}

	else if($_POST["travel"] == 3)
	{
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;
	}

	else if($_POST["travel"] == 4)
	{
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;
	}
	
	else if($_POST["travel"] == 5)
	{
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
	}

	if($_POST["relieved"] == 1)
	{
		$_SESSION["Gastritis"] = $_SESSION["Gastritis"] + 1;
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 1;
	}

	else if($_POST["relieved"] == 2)
	{
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;
	}

	else if($_POST["relieved"] == 3)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
	}

	else if($_POST["relieved"] == 4)
	{
		$_SESSION["Constipation"] = $_SESSION["Constipation"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Celiac disease or other Food intollerance"] = $_SESSION["Celiac disease or other Food intollerance"] + 1;
		$_SESSION["Diarrhea"] = $_SESSION["Diarrhea"] + 1;
		$_SESSION["Gastroesophageal reflux disease"] = $_SESSION["Gastroesophageal reflux disease"] + 1;
	}

	if($_POST["worsened"] == 1)
	{
		$_SESSION["Gastritis"] = $_SESSION["Gastritis"] + 1;
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 1;
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;
	}

	else if($_POST["worsened"] == 2)
	{
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
	}

	else if($_POST["worsened"] == 3)	
	{
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;	
	}

	else if($_POST["worsened"] == 4)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Gallstones"] = $_SESSION["Gallstones"] + 1;
		$_SESSION["Celiac disease or other Food intollerance"] = $_SESSION["Celiac disease or other Food intollerance"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
		$_SESSION["Diarrhea"] = $_SESSION["Diarrhea"] + 1;
		$_SESSION["Gastroesophageal reflux disease"] = $_SESSION["Gastroesophageal reflux disease"] + 1;
	}

	else if($_POST["worsened"] == 5)
	{
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;
	}


	if($_POST["heartburn"] == 1)
	{
		$_SESSION["Gastritis"] = $_SESSION["Gastritis"] + 2;
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Gastroesophageal reflux disease"] = $_SESSION["Gastroesophageal reflux disease"] + 2;
	}

	if($_POST["anorexia"] == 1)
	{
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 1;
		$_SESSION["Celiac disease or other Food intollerance"] = $_SESSION["Celiac disease or other Food intollerance"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
		$_SESSION["Gastroesophageal reflux disease"] = $_SESSION["Gastroesophageal reflux disease"] + 1;
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;
	}

	if($_POST["vomiting"] == 1)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 1;
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Gastritis"] = $_SESSION["Gastritis"] + 1;
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 1;
		$_SESSION["Diverticulitis"] = $_SESSION["Diverticulitis"] + 1;
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
		$_SESSION["Diarrhea"] = $_SESSION["Diarrhea"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;
		$_SESSION["Gastroesophageal reflux disease"] = $_SESSION["Gastroesophageal reflux disease"] + 1;
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;
	}

	if($_POST["haematemesis"] == 1)
	{
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 1;
	}

	if($_POST["constipation"] == 1)
	{
		$_SESSION["Diverticulitis"] = $_SESSION["Diverticulitis"] + 1;
		$_SESSION["Constipation"] = $_SESSION["Constipation"] + 2;
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
	}

	if($_POST["diarrhea"] == 1)
	{
		$_SESSION["Diverticulitis"] = $_SESSION["Diverticulitis"] + 1;
		$_SESSION["Constipation"] = $_SESSION["Constipation"] + 1;
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
		$_SESSION["Celiac disease or other Food intollerance"] = $_SESSION["Celiac disease or other Food intollerance"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
		$_SESSION["Diarrhea"] = $_SESSION["Diarrhea"] + 2;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;
	}

	if($_POST["fever"] == 1)
	{
		$_SESSION["Pancreatitis"] = $_SESSION["Pancreatitis"] + 1;
		$_SESSION["Cholecystitis"] = $_SESSION["Cholecystitis"] + 1;
		$_SESSION["Diverticulitis"] = $_SESSION["Diverticulitis"] + 1;
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] - 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
		$_SESSION["Diarrhea"] = $_SESSION["Diarrhea"] + 1;
		$_SESSION["Peritonitis"] = $_SESSION["Peritonitis"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 2;
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;
	}

	if($_POST["bloody"] == 1)
	{
		$_SESSION["Peptic ulcer"] = $_SESSION["Peptic ulcer"] + 1;
		$_SESSION["Constipation"] = $_SESSION["Constipation"] + 1;
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] - 1;
		$_SESSION["Gastroenteritis"] = $_SESSION["Gastroenteritis"] + 1;
	}

	if($_POST["tenesmo"] == 1)
	{
		$_SESSION["Inflammatory Bowel Disease"] = $_SESSION["Inflammatory Bowel Disease"] + 1;
		$_SESSION["Constipation"] = $_SESSION["Constipation"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Intestinal occlusion"] = $_SESSION["Intestinal occlusion"] + 1;
	}

	if($_POST["dysuria"] == 1)
	{
		$_SESSION["Appendicitis"] = $_SESSION["Appendicitis"] + 1;
		$_SESSION["Irritable Bowel Syndrome"] = $_SESSION["Irritable Bowel Syndrome"] + 1;
		$_SESSION["Nephrolithiasis"] = $_SESSION["Nephrolithiasis"] + 1;
		$_SESSION["Dysmenorrhea"] = $_SESSION["Dysmenorrhea"] + 1;
		$_SESSION["Endometrosis"] = $_SESSION["Endometrosis"] + 1;
		$_SESSION["Abdominal aortic aneurysm"] = $_SESSION["Abdominal aortic aneurysm"] + 1;
		$_SESSION["Pelvic inflammatory disease"] = $_SESSION["Pelvic inflammatory disease"] + 1;
		$_SESSION["Hepatitis"] = $_SESSION["Hepatitis"] + 1;
	}

	if($_POST["cough"] == 1)
	{
		$_SESSION["Gastroesophageal reflux disease"] = $_SESSION["Gastroesophageal reflux disease"] + 1;
	}


        // if insertion not failed, proceed to physical examination
        
        render("physical_exam_form.php", ["title" => "Physical Examination"]);   
           
    }
    else
    {
        // else render form
        render("history_form.php", ["title" => "Medical History"]);
    }

?>

