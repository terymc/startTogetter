<!DOCTYPE html>
<html>
<head>	
</head>
<body>
	<form>
      <input type="hidden" id="omiseToken">
      <input type="hidden" id="omiseSource">
      <input type ="number" id="btnMoney"  >		
      <button type="button" id="checkoutButton">Checkout</button>
	</form>

	<script type="text/javascript" src="https://cdn.omise.co/omise.js">
</script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script>
	$(document).ready(function (){
		OmiseCard.configure({
		    publicKey: "pkey_test_5mxfwdyztyqm17dzf9q"
		  });

		  var button = $("#checkoutButton");
		 

		$("#checkoutButton").click(function(){
			
		        //form.submit();
		        $.ajax({
		        	url: "transfer.php",
		        	type: "POST",
		        	data: {omiseToken : $("#omiseToken").val(),
		        		   omiseSource : $("#omiseSource").val(),
		        		   btnMoney : $("#btnMoney").val(),
		        		},
		        	success: function(response) {		        		
		        		console.log(response)
		        	},
		        	error: function(error) {
		        		console.log(error)
		        	}
		      	});
		});
	});

  
</script>

	
</body>
</html>