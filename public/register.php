<?php
    
    // configuration
    require("../includes/config.php"); 
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["email"]))
        {
            apologize("You must provide your email.");
        }
        else if (empty($_POST["institution"]))
        {
            apologize("You must provide your institution/hospital.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        
        else if (($_POST["password"]) != ($_POST["confirmation"]))
        {
            apologize("confirmation must be equal to password");
        }

        // query database for inserting new user
        $insertion = query("INSERT INTO users (username, password, email, institution) VALUES(?, ?, ?,?)", $_POST["username"], crypt($_POST["password"]),
	$_POST["email"], $_POST["institution"]);
        
        //check if the insertion failed
        if ($insertion === false)
        {
            apologize("registration failed, presumably because username already existed");
        }
        // if insertion not failed, log the user in
        else
        {
            // identify user id
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            
            // remember that user's now logged in by storing user's ID in session
            $_SESSION["id"] = $id;

	    // send email
	    //render("../public/mailer.php", ["title" => "Mail"]);

            // redirect to general data
            redirect("/project/public");
        }    
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>

