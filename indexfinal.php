<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="width=device-width",initial-scale="1.0">
	<title>asd asd</title>
	<script type="text/javascript" src="https://cdn.omise.co/omise.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="ckeditor/ckeditor.js"></script>

</head>
<body>
	
	<div class="cotainer">
		
			<div class="input-filed">
				<label for="title">Enter title</label>
				<input type="text" name="Article_title" id="title">

				<label for="goalcount">Enter Goal</label>
				<input type="number" name="goalcount" id="goalcount">

				<label for="typedatalist">Enter Type</label>
				<select name="typedatalist" id="typedatalist">
				  <option value="agiculture">Agicuture</option>
				  <option value="technology">technology</option>				  
				</select>

				<label for="Account">Enter Account</label>
				<input type="number" name="account" id="account" minlength="10" maxlength="10">

			</div>
			<textarea name="Article_content" id="Artticle_editor"></textarea>
			<input type="submit" id="btnsubmit" name="submit_data" value="publish">
		
	</div>

	<script>
		CKEDITOR.replace('Artticle_editor');
		$(document).ready(function()  {
			//var yourvar = <? echo "asdasd"; ?>;

			//alert(yourvar)

			OmiseCard.configure({
		    publicKey: "pkey_test_5mxfwdyztyqm17dzf9q"
		  });
			
			$('#btnsubmit').on('click', function() {		
			alert($("#goalcount").val());


			//alert();
			//alert($('#Artticle_editor').val());		

					$.ajax({
						url: "process.php",
						type: "POST",
						data: {
							Article_content: CKEDITOR.instances.Artticle_editor.getData(),
							Article_title: $("#title").val(),
							goalcount:$("#goalcount").val(),
							type:$('#typedatalist').val(),
							account:$('#account').val(),						

						},
						cache: false,
						success: function (data){
							Swal.fire({
	                			icon: 'success',
	                			title: 'เพิ่มข้อมูลเรียบร้อย',
	                			text: 'ดีจ้า',
	                			timer: 5000
            				})
							console.log(data);
							$.ajax({
								url: "getProject.php",
								contentType: 'application/json',
		           			    headers: { "Content-Type": "application/x-www-form-urlencoded" },
		           			    success:function(data){


		           			    },
		           			    error:function(error){
		           			    	console.log("error"+error);
		           			    }



							});
						},
						error: function (error) {
	                          console.log("error is " + error);
                    }


					});


				
				

			});

		});
	</script>
	


</body>
</html>