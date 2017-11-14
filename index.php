<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Welcome TO Q9 Diagnostic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/s.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong> Q9 </strong>Diagnostic
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Welcome To Q9 Diagnostic</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Welcome To<span>  Q9 Diagnostic</span></h1>
				<!--<nav class="codrops-demos">
					<span>Click <strong>"Join us"</strong> to see the form switch</span>
					<a href="index.html" class="current-demo">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>
				</nav>-->
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="main.php" autocomplete="on" method="POST"> 
                                <h1>Patient Registration Form</h1> 
                                
								<p>
                                    <label for="fname"  data-icon="u" > <b>First Name*</b></label>
                                    <input id="fname" name="fname" required="required" type="text" placeholder="First Name"/>
                                </p>
								<p> 
                                    <label for="mname"> <b>Middle Name</b> </label>
                                    <input id="mname" name="mname" required="required" type="text" placeholder="Middle Name"/>
                                </p>
								<p> 
                                    <label for="lname"> <b>Last Name</b> </label>
                                    <input id="lname" name="lname" required="required" type="text" placeholder="Last Name"/>
                                </p>
								<p> 
                                    <label for="dob"> <b>Date Of Birth *</b> </label>
                                    <input id="dob" name="dob" required="required" type="text" placeholder="Date Of Birth"/>
                                </p>
								<p> 
                                    <label for="age"> <b>Age</b> </label>
                                    <input id="age" name="age" required="required" type="text" placeholder="Age"/>
                                </p>
								<p><b>Gender:</b>
								<select name="gender">
								<option value=""><---Select Gender---></option>
								  <option value="male">Male</option>
								  <option value="female">Female</option>
								  <option value="other">Other</option>
								</select>
								 </p>
								<p> 
                                    <label for="mobile"> <b>Mobile Number</b> </label>
                                    <input id="mobile" name="mobile" required="required" type="text" placeholder="Mobile Number"/>
                                </p>
								<p> 
                                    <label for="email"> <b>Email ID</b> </label>
                                    <input id="email" name="email" required="required" type="text" placeholder="Email ID"/>
                                </p>
								<p> 
                                    <label for="blood"> <b>Blood Group</b> </label>
                                    <input id="blood" name="blood" required="required" type="text" placeholder="Blood Group"/>
                                </p>
								<p> 
                                    <label for="con"> <b>Consultant</b> </label>
                                    <input id="con" name="con" required="required" type="text" placeholder="Consultant"/>
                                </p>
								<p> 
                                    <label for="doc"> <b>Refering Doctor</b> </label>
                                    <input id="doc" name="doc" required="required" type="text" placeholder="Refering Doctor"/>
                                </p>
								<p> 
                                    <label for="patient"> <b>Patient Category Code</b> </label>
                                    <input id="patient" name="patient" required="required" type="text" placeholder="Patient Category Code"/>
                                </p>
								<p> 
                                    <label for="org"> <b>Organization Code</b> </label>
                                    <input id="org" name="org" required="required" type="text" placeholder="Organization Code"/>
                                </p>
								<p> 
                                    <label for="staff"> <b>Staff Number</b> </label>
                                    <input id="staff" name="staff" required="required" type="text" placeholder="Staff Number"/>
                                </p>
								<p> 
                                    <label for="kin"> <b>Next Of Kin</b> </label>
                                    <input id="kin" name="kin" required="required" type="text" placeholder="Next Of Kin"/>
                                </p>
								<p> 
                                    <label for="rel"> <b>Relationship</b> </label>
                                    <input id="rel" name="rel" required="required" type="text" placeholder="Relationship"/>
                                </p>
								<p> 
                                    <label for="old"> <b>Old reg.no</b> </label>
                                    <input id="old" name="old" required="required" type="text" placeholder="Old reg.no"/>
                                </p>
								
								 

								<!-- personal details-->
								<script>
                            $(document).ready(function(){
                            $('[data-toggle="tooltip"]').tooltip();   
                             });
                            </script>
								
								<a href="#personal" class="btn btn-info" data-toggle="collapse" data-toggle="tooltip" title="please fill this field!" style="background-color:white">Personal Details *</a>
								<a href="#other" class="btn btn-info" data-toggle="collapse" data-toggle="tooltip" title="please fill this field!" style="background-color:white">Other Details *</a>
								<div id="personal" class="collapse">
                                  <p align="left" style="font-size:22px"><b><u>Personal Details:</u></b></p><br>
								<p><b>Marital Status:</b>
								<select name="marital">
								<option value=""><---Select Marital status---></option>
								  <option value="single">Single</option>
								  <option value="married">Married</option>
								  <option value="divorcee">Divorcee</option>
								</select>
								 </p>
								 <p> 
                                    <label for="house"> <b>House number</b> </label>
                                    <input id="house" name="house"  type="text" placeholder="House number"/>
                                </p>
								<p> 
                                    <label for="street"> <b>Street Name</b> </label>
                                    <input id="street" name="street"  type="text" placeholder="Street Name"/>
                                </p>
								<p> 
                                    <label for="area"> <b>Area</b> </label>
                                    <input id="area" name="area"  type="text" placeholder="Area"/>
                                </p>
								<p> 
                                    <label for="zip"> <b>Zip Code</b> </label>
                                    <input id="zip" name="zip"  type="text" placeholder="Zip Code"/>
                                </p>
								<p> 
                                    <label for="city"> <b>City</b> </label>
                                    <input id="city" name="city"  type="text" placeholder="City"/>
                                </p>
								<p> 
                                    <label for="state"> <b>State</b> </label>
                                    <input id="state" name="state"  type="text" placeholder="State"/>
                                </p>
								<p> 
                                    <label for="country"> <b>Country</b> </label>
                                    <input id="country" name="country"  type="text" placeholder="Country"/>
                                </p>
								<p> 
                                    <label for="reg"> <b>Reg Date *</b> </label>
                                    <input id="reg" name="reg"  type="text" placeholder="Reg Date"/>
                                </p>
								<p> 
                                    <label for="val"> <b>Validity Date</b> </label>
                                    <input id="val" name="val"  type="text" placeholder="Validity Date"/>
                                </p>
								<p> 
								<video id="v" width="300" height="300"></video>
	                            <input id="b" type="button" disabled="true" value="Take Picture"></input>
	                            <canvas id="c" style="display:none;" width="300" height="300"></canvas>
                                </p>
								 <script>
									navigator.getUserMedia({video: true}, function(stream) {
										var video = document.getElementById("v");
										var canvas = document.getElementById("c");
										var button = document.getElementById("b");
										video.src = stream;
										button.disabled = false;
										button.onclick = function() {
											canvas.getContext("2d").drawImage(video, 0, 0, 300, 300, 0, 0, 300, 300);
											var img = canvas.toDataURL("image/png");
											alert("done");
										};
									}, function(err) { alert("there was an error " + err)});
								</script>
								  </div>
							
								
								<!-- other details-->
								<div id="other" class="collapse">
								<p align="left" style="font-size:22px"><b><u>Other Details:</u></b></p><br>
								<p> 
                                    <label for="emergency"> <b>Emergency Contact\attendant</b> </label>
                                    <input id="emergency" name="emergency"  type="text" placeholder="Emergency Contact\attendant"/>
                                </p>
								<p> 
                                    <label for="relation"> <b>Relationship with Patient</b> </label>
                                    <input id="relation" name="relation"  type="text" placeholder="Realationship with Patient"/>
                                </p>
								<p> 
                                    <label for="phoneno"> <b>Phone number</b> </label>
                                    <input id="phoneno" name="phoneno"  type="text" placeholder="Phone number"/>
                                </p>
								<p> 
                                    <label for="religion"> <b>Religion</b> </label>
                                    <input id="religion" name="religion"  type="text" placeholder="Religion"/>
                                </p>
								<p> 
                                    <label for="education"> <b>Education</b> </label>
                                    <input id="education" name="education"  type="text" placeholder="Education"/>
                                </p>
								<p> 
                                    <label for="occupation"> <b>Occupation</b> </label>
                                    <input id="occupation" name="occupation"  type="text" placeholder="Occupation"/>
                                </p>
								<p> 
                                    <label for="income"> <b>Monthly Income</b> </label>
                                    <input id="income" name="income"  type="text" placeholder="Monthly Income"/>
                                </p>
								</div>
								
								
                                
                                <p class="login button"> 
                                    <input type="submit" value="Register" /> 
								</p>
                  
                            
                                     </div>

                       
              
								</form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>