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
						
						
						
  <form id="email_signup" class="klaviyo_styling klaviyo_gdpr_embed_KgtAgt" action="//manage.kmail-lists.com/subscriptions/subscribe" data-ajax-submit="//manage.kmail-
  lists.com/ajax/subscriptions/subscribe" method="GET" target="_blank" novalidate="novalidate">
    <input type="hidden" name="g" value="KgtAgt">
    <input type="hidden" name="$fields" value="$consent">
    <input type="hidden" name="$list_fields" value="$consent">
    <div class="klaviyo_field_group">
      <label for="k_id_email">Newsletter Sign Up</label>
      <input class="" type="email" value="" name="email" id="k_id_email" placeholder="Your email" />
      <div class="klaviyo_field_group klaviyo_form_actions">
        <div class="klaviyo_helptext"> How would you like to hear from us? (please select at least one option) </div>
        <input type="checkbox" name="$consent" id="consent-email" value="email">
        <label for="consent-email">Email</label><br>
        <input type="checkbox" name="$consent" id="consent-web" value="web">
        <label for="consent-web">Online advertisements</label>
        <div class="klaviyo_helptext klaviyo_gdpr_text"> We use email and targeted online advertising to send you product and services updates, promotional offers and other marketing communications based on the information we collect about you, such as
          your email address, general location, and purchase and website browsing history. <br>
          <br>
          We process your personal data as stated in our Privacy Policy {Insert privacy policy link}. You may withdraw your consent or manage your preferences at any time by clicking the unsubscribe link at the bottom of any of our marketing emails, or
          by emailing us at {insert customer support email address}.</div>
      </div>
    </div>
    </div>
    <div class="klaviyo_messages">
      <div class="success_message" style="display:none;"></div>
      <div class="error_message" style="display:none;"></div>
    </div>
    <div class="klaviyo_form_actions">
      <button type="submit" class="klaviyo_submit_button">Subscribe</button> </div>
  </form>
  <style type="text/css">
    .klaviyo_styling.klaviyo_gdpr_embed_KgtAgt,
    .klaviyo_condensed_styling.klaviyo_gdpr_embed_KgtAgt {
      font-family: "Helvetica Neue", Arial;
    }

    .klaviyo_styling.klaviyo_gdpr_embed_KgtAgt .klaviyo_helptext,
    .klaviyo_condensed_styling.klaviyo_gdpr_embed_KgtAgt .klaviyo_helptext {
      font-family: "Helvetica Neue", Arial;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .klaviyo_styling.klaviyo_gdpr_embed_KgtAgt .klaviyo_gdpr_text,
    .klaviyo_condensed_styling.klaviyo_gdpr_embed_KgtAgt .klaviyo_gdpr_text {
      font-size: 14px;
      line-height: 1.3;
    }

    .klaviyo_styling.klaviyo_gdpr_embed_KgtAgt label,
    .klaviyo_condensed_styling.klaviyo_gdpr_embed_KgtAgt label {
      color: #222;
    }

    .klaviyo_styling .klaviyo_field_group .klaviyo_form_actions {
      text-align: left;
    }

    .klaviyo_styling.klaviyo_gdpr_embed_KgtAgt input[type=checkbox]+label,
    .klaviyo_condensed_styling.klaviyo_gdpr_embed_KgtAgt input[type=checkbox]+label {
      display: inline;
      font-weight: normal;
      padding-left: 5px;
    }

    .klaviyo_styling.klaviyo_gdpr_embed_KgtAgt input[type=text],
    .klaviyo_styling.klaviyo_gdpr_embed_KgtAgt input[type=email],
    .klaviyo_condensed_styling.klaviyo_gdpr_embed_KgtAgt input[type=text],
    .klaviyo_condensed_styling.klaviyo_gdpr_embed_KgtAgt input[type=email] {
      border-radius: 2px;
    }

    .klaviyo_styling.klaviyo_gdpr_embed_KgtAgt .klaviyo_submit_button,
    .klaviyo_condensed_styling.klaviyo_gdpr_embed_KgtAgt .klaviyo_submit_button {
      background-color: #0064cd;
      border-radius: 2px;
    }

    .klaviyo_styling.klaviyo_gdpr_embed_KgtAgt .klaviyo_submit_button:hover,
    .klaviyo_condensed_styling.klaviyo_gdpr_embed_KgtAgt .klaviyo_submit_button:hover {
      background-color: #0064cd;
    }
  </style>
  <script type="text/javascript" src="//www.klaviyo.com/media/js/public/klaviyo_subscribe.js"></script>
  <script type="text/javascript">
    KlaviyoSubscribe.attachToForms('#email_signup', {
      hide_form_on_success: true,
      extra_properties: {
        $source: '$embed',
        $method_type: "Klaviyo Form",
        $method_id: 'embed',
        $consent_version: 'Embed default text'
      }
    });
  </script>
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
