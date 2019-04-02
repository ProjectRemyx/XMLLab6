<?php
//Sessions now started in header automatically so each page should have it
//Start our session
// session_start();
require_once '../vendor/autoload.php';
use App\Database;
use App\User;

//Messages when there is an error signing up or if sign up is successful
$_SESSION['ErrorMessage'] = '';
$_SESSION['SuccessMessage'] = '';
$c = "";

//Instantiate our db
$db = Database::getDb();

//If signup button is pressed
if (isset($_POST['signup'])) {
    //Instantiate user class
    $u = new User();
	//If passwords match, put info into variables
	if($_POST['signUpPassword'] == $_POST['signUpPasswordRepeat'])
	{
        //real_escape_string escapes special characters in a string and ensures it can be used in a SQL statement
        //put our entered values in the inputs into a variable
		$username = $_POST['signUpUsername'];
		$email = $_POST['signUpEmail'];
		$password = password_hash($_POST['signUpPassword'], PASSWORD_DEFAULT); //Hash Pw
		$avatar_path = '../img/'.$_FILES['avatar']['name'];

		//Check image file type
		if(preg_match("!image!", $_FILES['avatar']['type']))
		{
			//Copy image to img folder
			if(copy($_FILES['avatar']['tmp_name'], $avatar_path))
			{
                //If we got this far then set session variables
				$_SESSION['username'] = $username;
				$_SESSION['avatar'] = $avatar_path;

                //Run our query
				$c = $u->addUser($username, $password, $email, $avatar_path, $db);

				//If query successful output success message
				if($c)
				{
					$_SESSION['SuccessMessage'] = "Registration Successful!";
				}
				else
				{
					$_SESSION['ErrorMessage'] = "Registration Failed.";
				}
			}
			else
			{
				$_SESSION['ErrorMessage'] = "File upload failed";
			}
		}
		else
		{
			$_SESSION['ErrorMessage'] = "Only GIFs, JPGs or PNGs allowed";
		}
	}
	else
	{
		$_SESSION['ErrorMessage'] = "Passwords do not match";

	}
}

?>
