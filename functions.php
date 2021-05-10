<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'foodratingweb');

// variable declaration
$username = "";
$email    = "";
$password = ""; 
$name = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email, $password, $name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
    $password    =  e($_POST['password']);
    $name        =  e($_POST['name']);
	$email       =  e($_POST['email']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
    if (empty($password)) { 
		array_push($errors, "Password is required"); 
    }
    if (empty($name)) { 
		array_push($errors, "Name is required"); 
    }
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
    }

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password);//encrypt the password before saving in the database

		if (isset($_POST['isAdmin'])) {
			$isAdmin = e($_POST['isAdmin']);
			$query = "INSERT INTO account (username, password, name, email, isAdmin) 
					  VALUES('$username', '$password', '$name', '$email', '$isAdmin')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: index.php');
		}else{
			$query = "INSERT INTO account (username, password, name, email, isAdmin) 
                        VALUES('$username', '$password', '$name', '$email', 'admin')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_username = mysqli_insert_username($db);

			$_SESSION['user'] = getUserById($logged_in_username); // put logged in user in session
			header('location: AdminIndex.php');				
		}
	}
}

// return user array from their username 
function getUserById($username){
	global $db;
	$query = "SELECT * FROM account WHERE username=" . $username;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}


