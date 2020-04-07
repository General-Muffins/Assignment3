<?php
session_start();
require_once("Template.php");

$message = '';
$error = '';

if(isset($_POST["submit"])){
	if(empty($_POST['username'])){
		$error = "<label class = 'text-danger'>User not found or password invalid</label>";
	}
	else if(empty($_POST['password'])){
		$error = "<label class = 'text-danger'>User not found or password invalid</label>";
	}
	else{
		if(file_exists('https://cnmt310.braingia.org/authws/auth.php')){
			$current_data = file_get_contents('https://cnmt310.braingia.org/authws/auth.php');
			$array_data = json_decode($current_data, true);
			$extra = array(
				'Waffles' => $_POST['username'],
				'mustardCat7289' => $_POST['password']);
				
				$array_data[] = $extra;
				$final_data = json_encode($array_data);
				if(file_put_contents('https://cnmt310.braingia.org/authws/auth.php', $final_data)){
					$message = "<label class = 'text-success'>File Appended Successfully</p>"; 
				}
		}
		else{
			$error = 'JSON File not exist';
		}
	}
	
}

$page = new Template("Authenticate");
$page->addHeadElement("<link rel = 'stylesheet' a href = 'form_style.css'/>");

$page->addHeadElement("<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>");
$page->addHeadElement("<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>");


$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Please Authenticate By Entering Your Credentials</h1>\n";

print "
	<form method = 'POST' action = 'confirmation.php' >
		<div class = 'form_input'>
			<input type = 'text' name = 'username' class = 'form-control' placeholder = 'Enter Your User Name'/>
		</div>
		<div class = 'form_input'>
			<input type = 'password' name = 'password' class = 'form-control' placeholder = 'Enter Your Password'/>
		</div>
		<input type = 'submit' name = 'submit' value = 'SUBMIT' class = 'btn-login'/>
	</form>";

print $page->getBottomSection();