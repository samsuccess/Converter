<?php
function currency_converter() {	
	if (isset($_POST)) {
		print_r($_POST);
		
	} 
    
	//$from_currency = urlencode($vpb_from_currency);
	//$to_currency = urlencode($vpb_to_currency);
	
	

}

currency_converter();
/*if(array_key_exists("amount", $_POST) && array_key_exists("from_currency", $_POST) && array_key_exists("to_currency", $_POST) && !empty($_POST["amount"]) && !empty($_POST["from_currency"]) && !empty($_POST["to_currency"])) //Check to see that all required fields are in order
{
	$amount = trim(strip_tags($_POST["amount"]));
	$from_currency = trim(strip_tags($_POST["from_currency"]));
	$to_currency = trim(strip_tags($_POST["to_currency"]));
	
	if($amount == "")
	{
		echo "<br clear='all' /><div class='info'>Please enter the amount that you wish to convert in the specified field to proceed. Thanks.</div>";
	}
	elseif(!is_numeric($amount))
	{
		echo "<br clear='all' /><div class='info'>Please enter only numbers as your <b>Convert Amount</b>. <br>Examples: 100, 200, 300, 400, 500 etc</div>";
	}
	elseif($from_currency == "")
	{
		echo "<br clear='all' /><div class='info'>Please select the country that you wish to convert your currency <b>from</b> to proceed.</div>";
	}
	elseif($to_currency == "")
	{
		echo "<br clear='all' /><div class='info'>Please select the country that you wish to convert your currency <b>to</b>.</div>";
	}
	else
	{
		//$vpb_remove_dot_from_values = vpb_remove_comma_from_values(str_replace('.', '',$amount));
		$vpb_remove_dot_from_values = vpb_remove_comma_from_values($amount);
		
		echo "<br clear='all' /><div class='info' style='font-size:12px;'>As of today: <b>".$from_currency." ".number_format($vpb_remove_dot_from_values)."</b>  =</b>  <b>".$to_currency." ".number_format(vpb_concurrency_converter($from_currency,$to_currency,$vpb_remove_dot_from_values), 2)."</b></div>";
	}
}
else
{
	echo "<br clear='all' /><div class='info'>Sorry, something went wrong. Please try again or contact this website admin to report this error message if the problem persist. Thanks...</div>";
}*/
?> 