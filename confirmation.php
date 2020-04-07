<?php
session_start();
require_once("Template.php");

$page = new Template("CONFIRMATION");
$page->addHeadElement("<link rel = 'stylesheet' a href = 'thank_style.css'/>");


$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>ORDER CONFIRMATION</h1>\n";
print "<div>
			<div>
				<form method='POST' name='thankyou' id='thankyou' action = 'product_list.php'>
				<div>
					<fieldset>
						<h3>Congradualtions!</h3>
						<h3>Your order has been confirmed!</h3>
						<br><br>
					</fieldset>
				</div>
				<input type = 'submit' name = 'submit' value = 'Return'/>  
			   </form>
			</div>
		</div>";
		
print $page->getBottomSection();