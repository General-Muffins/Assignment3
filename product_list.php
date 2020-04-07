<?php
session_start();
require_once("Template.php");


$page = new Template("Product Listing");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='table_style.css'>");
$page->addHeadElement("<script type='text/javascript' src='quantity.js'></script>");

class shopping{
	private $products = array(
				array("product_id" => 4422, 
					"item_name" => "Printer paper", 
					"item_descr" => "Paper for a printer", 
					"price" => 7.00),
				array("product_id" => 123, 
					"item_name" => "Labels", 
					"item_descr" => '1" x 3" labels', 
					"price" => 2.56),
				array("product_id" => 153, 
					"item_name" => "Glossy paper", 
					"item_descr" => "Shiny paper", 
					"price" => 12.36),
				array("product_id" => 19072, 
					"item_name" => "Notepad", 
					"item_descr" => "Small notepads", 
					"price" => 4.93),
				array("product_id" => 4291, 
					"item_name" => "Card stock", 
					"item_descr" => "Thick card stock",
					"price" => 9.32),
		);
		
		public function products($item){
			return $this -> products[$item];
		}
}	

$shopping = new Shopping();
$PPaper = $shopping -> products(0);
$labels = $shopping -> products(1);
$GPaper = $shopping -> products(2);
$NPad = $shopping -> products(3);
$CStock = $shopping -> products(4);


$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Welcome to the Product Listing Page</h1>\n";

print "
<form method='POST'>
	<table id='cart'>
		<h2>Shopping Cart</h2>\n
		
		<tr>
			<th>Name</th>
			<th>Product</th>
			<th>Description</th>
			<th>Price</th>
			<th>Quantity</th>
		</tr>
		
		<tr>
			<td>$PPaper[product_id]</td>
			<td>$PPaper[item_name]</td>
			<td>$PPaper[item_descr]</td>
			<td>$PPaper[price]</td>
			<td>
				<button type='button' class='minus'>-</button>
				<input type='text' class='counter' value='0'/>
				<button type='button' class='plus'>+</button>
			</td>
		</tr>
		
		<tr>
			<td>$labels[product_id]</td>
			<td>$labels[item_name]</td>
			<td>$labels[item_descr]</td>
			<td>$labels[price]</td>
			<td>
				<button type='button' class='minus1'>-</button>
				<input type='text' class='counter1' value='0'/>
				<button type='button' class='plus1'>+</button>
			</td>
		</tr>
		
		<tr>
			<td>$GPaper[product_id]</td>
			<td>$GPaper[item_name]</td>
			<td>$GPaper[item_descr]</td>
			<td>$GPaper[price]</td>
			<td>
				<button type='button' class='minus2'>-</button>
				<input type='text' class='counter2' value='0'/>
				<button type='button' class='plus2'>+</button>
			</td>
		</tr>
		
		<tr>
			<td>$NPad[product_id]</td>
			<td>$NPad[item_name]</td>
			<td>$NPad[item_descr]</td>
			<td>$NPad[price]</td>
			<td>
				<button type='button' class='minus3'>-</button>
				<input type='text' class='counter3' value='0'/>
				<button type='button' class='plus3'>+</button>
			</td>
		</tr>
		
		<tr>
			<td>$CStock[product_id]</td>
			<td>$CStock[item_name]</td>
			<td>$CStock[item_descr]</td>
			<td>$CStock[price]</td>
			<td>
				<button type='button' class='minus4'>-</button>
				<input type='text' class='counter4' value='0'/>
				<button type='button' class='plus4'>+</button>
			</td>
		</tr>
	</table>

</form>	
<form action='authenticate.php' method='POST'>	
	<input type='submit' value='Submit'>
</form>";

print $page->getBottomSection();