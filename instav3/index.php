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
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Instagram</title>
  </head>
  <body>

             <div class="container ">
                               <div class="row">
                                 <div class="col-md-12">
                                   
                                   <img class=" mx-auto d-block"  src="img/logo.png"></div>
                                

                               </div>

          </div>
<div class="container-fluid bg">
                    <div class="row">
                      
                              <div class="col-md-12 container-text"><h3> Ambassadors get HUGE Discounts and TONS of Perks! </h3>
                              </div>

                    </div>

                          <div class="row clear-text">
                              
                            <div class="col-md-4"></div>
                              <div class="col-md-4 bg-img"><img src="img/smyl.jpg" ></div>
                                <div class="col-md-4"></div>

                          </div>

                          <div class="row row-text">
                            <div class="col-md-12 text-center"><h4>Enter your Instagram Username <br>to see if you qualify!</h4></div>
                          </div>

                    <div class="row">
                      
                      <div class="col-md-4"></div>
                        <div class="col-md-4">
                          

                            <form method="post" id="forminsta">
								<div class="form-group">
								  <input type="text" required="required" class="form-control" id="username" aria-describedby="idhelp" placeholder="Please enter your instagram id">
								  
								</div>
								<div class="row ">
								  <div class="col text-center">
									<button type="submit" class="btn btn-primary" id="btngetdata" name="btngetdata">CHECK IF YOU QUALIFY</button>
								  </div>
								</div>
						</form>


                        </div>
                          <div class="col-md-4"></div>

                    </div>

   </div>

<footer class="footer-bg">
  
<div class="container-fluid ">

<div class="row ">
  
  <div class="col-md-12 text-center mr-footer text-area"><span><a href="#">Term & Conditions</a></span></div>
</div>

</div>

</footer>

    <div class="modal" id="instamodal" tabindex="-1" role="dialog">
      <div class="modal-dialog  modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <div class="modal-body1">
			<h2>Checking your Instagram...</h2><br>
            <i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i>
			<p id="errmsg" class="head-text"></p>
			<p id="check" class="head-text">Checking double registrations... <img id="tick" class="tick" src="img/tick.png"></p>
			<p id="check1" class="head-text">Checking username... <img id="tick1" class="tick" src="img/tick.png"></p>
			<p id="check2" class="head-text">Counting followers... <img id="tick2" class="tick" src="img/tick.png"></p>
            </div>
        </div>
        </div>
      </div>
    </div>
    <!--Modal-->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
