
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>LOGIN</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
		<style >
			@import url(http://weloveiconfonts.com/api/?family=brandico|entypo|openwebicons|zocial);

			/* brandico */
			[class*="brandico-"]:before {
			  font-family: 'brandico', sans-serif;
			}

			/* entypo */
			[class*="entypo-"]:before {
			  font-family: 'entypo', sans-serif;
			}

			/* openwebicons */
			[class*="openwebicons-"]:before {
			  font-family: 'OpenWeb Icons', sans-serif;
			}

			/* zocial */
			[class*="zocial-"]:before {
			  font-family: 'zocial', sans-serif;
			}

			.form-signin{
			  max-width: 330px;
			  padding: 15px;
			  margin: 0 auto;
			}


			.login-input {
			  margin-bottom: -1px;
			  border-bottom-left-radius: 0;
			  border-bottom-right-radius: 0;
			}
			.login-input-pass {
			  margin-bottom: 10px;
			  border-top-left-radius: 0;
			  border-top-right-radius: 0;
			}


			.signup-input {
			  margin-bottom: -1px;
			  border-bottom-left-radius: 0;
			  border-bottom-right-radius: 0;
			}

			.signup-input-confirm {
			  margin-bottom: 10px;
			  border-top-left-radius: 0;
			  border-top-right-radius: 0;
			}



			.create-account {
			  text-align: center;
			  width: 100%;
			  display: block;
			}

			.form-signin .form-control {
			  position: relative;
			  font-size: 16px;
			  height: auto;
			  padding: 10px;
			  -webkit-box-sizing: border-box;
			  -moz-box-sizing: border-box;
			  box-sizing: border-box;
			}

			.btn-center{
			  width: 50%;
			  text-align: center;
			  margin: inherit;
			}

			
		</style>
		
	</head>
	<body>
		<div class="container">
      
		      <script id="metamorph-1-start" type="text/x-placeholder"></script><script id="metamorph-21-start" type="text/x-placeholder"></script>

			<div class="container text-center">
			    <form action="loginsubmit.php" method="post" class="form-signin" data-ember-action="2">
			    	<h2 class="form-signin-heading">Sign in</h2>

					<br><br>
					    <small class="text-muted">Đăng nhập bằng tài khoản của bạn</small>
					    <br><br>
				    	
				        <input id="ember360" name="email" class="ember-view ember-text-field form-control login-input" placeholder="Email" type="text">
				        <input id="ember361" name="password" class="ember-view ember-text-field form-control login-input-pass" placeholder="Password" type="password">

				        <script id="metamorph-22-start" type="text/x-placeholder"></script><script id="metamorph-22-end" type="text/x-placeholder"></script>

				        <input class="btn btn-lg btn-primary btn-block btn-center" name="submit" value="Sign in" type="submit" data-bindattr-3="3">
				        <br>
				        
				   </form>
		    </div>
		</div>
		<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
		</script>
	        
        	
	</body>
</html>