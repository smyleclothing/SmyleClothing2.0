<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
   
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/style.css"/>
    <title>Instagram</title>
  </head>
  <body>

   <div class="container">
                 <div class="row">
                   <div class="col-md-12">
                     
                     <img class=" mx-auto d-block"  src="img/logo.png"></div>
                  

                 </div>

</div>
<div class="container-fluid bg2"> 
                <div class="row cong-text">
                  
                        <div class="col-md-12  text-center"><h4> Congratulations, <span class="txtusername"></span> </h4>
                        </div>

                </div>

                    <div class="row">
                        
                      <div class="col-md-4"></div>
                        <div class="col-md-4">
                          
                         
                            
                            <div class="media bg-white">
  <img class="mr-3 profile-picture" src="img/avatar.png" height="150" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0"><span class="txtusername"></span></h5>
    Amount of followers <span class="txtfollowers"></span> <img class="right-green " src="img/tick.png"></p>
  </div>


                          </div>
                            <div class="col-md-6 "></div>


                        </div>
                          <div class="col-md-4"></div>

                    </div>

                    <div class="row text-area">
                      <div class="col-md-12  text-center"><span>You've qualified to be an SMYLE Clothing with your <span class="txtfollowers"></span>
followers!.<br> We'll review your profile and send you your exclusive ambassador Discount Code by E-mail! </span></div>
                    </div>

                    <div class="row mr-space">
                      
                      <div class="col-md-4"></div>
                        <div class="col-md-4 ">
						<div class="error">
							<p></p>
						</div>
						<?php
						if(isset($_POST["btnsubmit"]))
						{
							$FirstName=$_POST["First_name"];
							$LastName=$_POST["Last_name"];
							$Email=$_POST["Email"];
							$email_from=$Email;
							$email_to = "hello.smyleclothing@gmail.com";
							$email_subject = "From insta user";
							$email_message = "Form details below.\n\n";
							
							$email_message .= "First Name: ".($FirstName)."\n";
							$email_message .= "Last Name: ".($LastName)."\n";
							$email_message .= "Email: ".($Email)."\n";
							
							$headers = 'From: '.$email_from."\r\n".
							'Reply-To: '.$email_from."\r\n" .
							'X-Mailer: PHP/' . phpversion();
							
							if(mail($email_to, $email_subject, $email_message, $headers))
							{
								header('Location:https://smyleclothing.com/');
								//If above not work then use this
								//echo "<script>window.location='https://smyleclothing.com/';</script>";
								
							}
							else
							{
								echo '<div class="alert alert-success" role="alert">Mail sending error!</div>';
							}								
						}
						?>
						
						
						
   <form class="needs-validation" name="IForm" id="IForm" method="post">
  <div class="form-row">
    <div class="col-md-6 mb-3">
     
      <input type="text" class="form-control" id="First_name" placeholder="First name*" name="First_name">
    
    </div>
    <div class="col-md-6 mb-3">
     
      <input type="text" class="form-control" id="Last_name" placeholder="Last name*" name="Last_name">
      
    </div>
     <div class="col-md-6 mb-3">
     
      <input type="email" class="form-control" id="Email" placeholder="Email*" name="Email">
      
    </div>

       <div class="col-md-6 mb-3">
     
      <button type="submit" name="btnsubmit" class="btn btn-primary mb-2">Submit</button>
      
    </div>
    
  </div>
  
</form>
</div></div></div>
<footer class="footer-bg">
  
<div class="container-fluid ">

<div class="row ">
  
  <div class="col-md-12 text-center mr-footer text-area"><span><a href="#">Term & Conditions</a></span></div>
</div>

</div>

</footer>
    <!--Modal-->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script>
	
	$.validator.addMethod("validate_email", function(value, element) {
		if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
			return true;
		} else {
			$.validator.messages.validate_email = "* The Email you entered does not appear to be valid.";
			return false;
		}
	},$.validator.messages.validate_email);
	
      $(document).ready(function () {
		$('.error').hide();
        var $_POST = <?php echo json_encode($_POST); ?>;
        $('.txtusername').html($_POST["username"]);
        $('.txtfollowers').html($_POST["followers"]);
		$('.profile-picture').attr('src', $_POST["profile"]);
		$("form[name='IForm']").validate({
            // Specify validation rules
            rules: {
              First_name: "required",
			  Last_name: "required",
              Email: {
                required: true,
                validate_email: true
              }
            },
            // Specify validation error messages
            messages: {
              First_name: "* The First Name you entered does not appear to be valid.",
              Last_name: "* The Last Name you entered does not appear to be valid.",
              Email: {
                required: "* The Email you entered does not appear to be valid.",
                validate_email: "* The Email you entered does not appear to be valid."
              }
            },
			errorElement : 'div',
			errorLabelContainer: 'p',
            highlight: function(element, errorClass) {
    					$(element).removeClass(errorClass);
    		},
			showErrors: function(errorMap, errorList) {
            var formSelector = '#' + this.currentForm.id;
            var formObject = $(formSelector);
            var validateObject = formObject.validate();
            var numberOfInvalids = validateObject.numberOfInvalids();
				if(numberOfInvalids<=0)
				{
					$('.error').hide();
				}
				else
				{
					$('.error').show();
					this.defaultShowErrors();
				}
			},
            submitHandler: function(form) {
              form.submit();
            }
          });
		
      });
    </script>
  </body>
</html>
