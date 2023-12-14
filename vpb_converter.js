<script>
function convert_currency() {
	var amount = $('#amount').val();
	var from_currency = $('#from_currency').val();
	var to_currency = $('#to_currency').val();
	
	if(amount == "")
	{
		$("#vpb_conversion_result").hide().fadeIn('fast').html('<br clear="all" /><div align="left" class="info">Please enter the amount that you wish to convert in the specified field to proceed. Thanks.</div>');
		 $('#amount').focus();
		 return false;
	}
	else if(from_currency == "")
	{
		$("#vpb_conversion_result").hide().fadeIn('fast').html('<br clear="all" /><div align="left" class="info">Please select the country that you wish to convert your currency <b>from</b> to proceed. Thanks.</div>');
		 return false;
	}
	else if(to_currency == "")
	{
		$("#vpb_conversion_result").hide().fadeIn('fast').html('<br clear="all" /><div align="left" class="info">Please select the country that you wish to convert your currency <b>to</b>. Thanks.</div>');
		 return false;
	}
	else
	{
		var dataString = "amount="+ amount + "&from_currency="+ from_currency + "&to_currency="+ to_currency;
		$.ajax({
			type: "POST",
			url: "vpb_converter.php",
			data: dataString, 
			cache: false,
			beforeSend: function() 
			{
				$('#convert').hide();
				$('#converting').fadeIn('slow');
				$("#vpb_conversion_result").html('<br clear="all" /><center><div align="left" style=" margin-left:110px;font-family:Verdana, Geneva, sans-serif; font-size:12px;padding-top:10px;">Please wait <img src="loading.gif" align="absmiddle" title="Loading..." /></div></center>');
			},
			success: function(response) 
			{
				$('#converting').hide();
				$('#convert').fadeIn('slow');
				$("#vpb_conversion_result").hide().fadeIn('slow').html(response); 
			}
		});	
	}
}
</script>