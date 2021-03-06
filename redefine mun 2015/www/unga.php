<?php
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Apply For UNGA</title>
  <meta name="keywords" content="reDEFINE, mun, kiit">
  <meta name="description" content="reDEFINE MUN">
  <meta name="author" content="Sushant Sagar">
	<!-- <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">--> <!--change-->
  <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Favicon -->
  <link rel="shortcut icon" href="img/fav.png">
  
    <!-- css references -->
    <link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css1/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	
</head>
<body>
<div class="container">

        <center>
            <h2 style="color:#3498db;">Apply as Delegate</h2>
			<!--<h5 style="color:#e03215;">All Fields are Compulsory</h5>-->
			<hr>
        </center>    

		<br>
		
		
		<div class="row">
		<div class="col-md-3"> </div>
		<div class="col-md-6"> 
		<center><p style="color:#3498db;">Committee: United Nations General Assembly (DISEC)</p>
			  <p style="color:#3498db;">AGENDA: Middle-Eastern security crisis: Rise of the ISIS</p>
		</center>
		<br>
		<p>To view country matrix, click <a href="#">here</a></p>
			  <p>The early bird allotments shall be taken out on April 4th, 2014.<br/>
					Delegate Fees : Rs. 1000/- ( Includes lunch on both days & entry to socials )<br/>
					Prize Money : <br/>
					Best Delegate (1) : Rs.8,000<br/>
                    High Commendation(1) : Rs. 5,000<br/>
                    Special Mention (2) : Rs.2,000 each<br/>
				The Best Institution also gets a rolling trophy!<br/>
				For queries get in touch with us at 7504878807 or fill up the query form in the contact section of the website.<br/></center>
			</p>
			<br>
			<br>
		</div>
		
		<div class="col-md-3"> </div>
		</div>

		<form role="form" id="central" method="POST" action="ungasub.php" autocomplete="true">
			<div class="form-group">
			 
                <div class="row">
                	<div class="col-lg-3"></div>
                    
					<div class="col-lg-6">
                        
						<label>Name</label>
						<input name="name1" placeholder="Name [of 1st Delegate]" class="form-control" required type="text"/>
						<br>
								
						<label>Email Address</label>
						<input name="email1" placeholder="Email Id [of 1st Delegate]" type="email" class="form-control" required/>
						<br>
						
						
						<label>Gender</label>
						<select name="gender1" class="form-control" required>
						<option selected>Male</option>
						<option>Female</option>
						</select>
						<br>
						
						<label>Institution</label>
						<input name="college1" placeholder="School / College [of 1st Delegate]" type="text" class="form-control" required/>
						<br>
						
						<label>Contact No.</label>
						<input name="contact1" placeholder="Mobile no. (10 digit) [of 1st Delegate]" type="text" maxlength="10" class="form-control" required/>
						<br>
						
						<label>Previous MUN Experience</label>
						<textarea  class="form-control" name="exp1" placeholder="Previous MUN Experience of 1st Delegate" rows="5"></textarea>
						<br>
						
						<!--2nd delgate-->
						
						<label>Name</label>
						<input name="name2" placeholder="Name [of 2nd Delegate, if double delegation]" class="form-control"  type="text"/>
						<br>
								
						<label>Email Address</label>
						<input name="email2" placeholder="Email Id [of 2nd Delegate, if double delegation]" type="email" class="form-control" />
						<br>
						
						
						<label>Gender</label>
						<select name="gender2" class="form-control" >
						<option selected>Male</option>
						<option>Female</option>
						</select>
						<br>
						
						<label>Institution</label>
						<input name="college2" placeholder="School / College [of 2nd Delegate, if double delegation]" type="text" class="form-control" />
						<br>
						
						<label>Contact No.</label>
						<input name="contact2" placeholder="Mobile no. (10 digit) [of 2nd Delegate, if double delegation]" type="text" maxlength="10" class="form-control" />
						<br>
						
						<label>Previous MUN Experience</label>
						<textarea  class="form-control" name="exp2" placeholder="Previous MUN Experience of 2nd Delegate, if double delegation" rows="5"></textarea>
						<br>
						
						<label>Country Preference 1</label>
						<input name="country1" placeholder="First Country Preference" type="text" class="form-control" required/>
						<br>
						
						<label>Country Preference 2</label>
						<input name="country2" placeholder="Second Country Preference" type="text" class="form-control" required/>
						<br>
						
						<label>Country Preference 3</label>
						<input name="country3" placeholder="Third Country Preference" type="text" class="form-control" required/>
						<br>
						
						<label>City</label>
						<input name="city" placeholder="City" type="text" class="form-control" required/>
						<br>
						
						<label>State</label>
						<select name="state" class="form-control" required>
									<option value="andhrapradesh" class='select_state'>Andhra Pradesh</option>
									<option value="arunachalpradesh" class='select_state'>Arunachal Pradesh</option>
									<option value="assam" class='select_state'>Assam</option>
									<option value="bihar"  class='select_state'>Bihar</option>
									<option value="chattisgarh" class='select_state'>Chhattisgarh</option>
									<option value="delhi" class='select_state'>Delhi</option>
									<option value="goa" class='select_state'>Goa</option>
									<option value="gujarat" class='select_state'>Gujarat</option>
									<option value="haryana">Haryana</option>
									<option value="himachalpradesh">Himachal Pradesh</option>
									<option value="jammu_and_kashmir">Jammu and Kashmir</option>
									<option value="jharkhand">Jharkhand</option>
									<option value="haryana">Haryana</option>
									<option value="karnataka">Karnataka</option>
									<option value="kerala">Kerala</option>
									<option value="madhyapradesh">Madhya Pradesh</option>
									<option value="maharashtra">Maharashtra</option>
									<option value="manipur">Manipur</option>
									<option value="mizoram">Mizoram</option>
									<option value="meghalaya">Meghalaya</option>
									<option value="nagaland">Nagaland</option>
									<option value="odisha" selected>Odisha</option>
									<option value="punjab">Punjab</option>
									<option value="rajasthan">Rajasthan</option>
									<option value="sikkim">Sikkim</option>
									<option value="tamilnadu">Tamil Nadu</option>
									<option value="tripura">Tripura</option>
									<option value="uttarpradesh">Uttar Pradesh</option>
									<option value="uttarakhand">Uttarakhand</option>
									<option value="westbengal">West Bengal</option>
						</select>
						<br>					
						
						<label>Anything you want us to keep in mind!</label>
						<textarea  class="form-control" name="msg" placeholder="Anything you want us to keep in mind!" rows="5"></textarea>
						
						<br>
						<br>
						
						<button type="submit" class="btn btn-success">Apply</button>
						<button type="reset" class="btn btn-warning">Reset</button>
						
						
		<br>
		<br>
					</div>
                    
					<div class="col-lg-3"></div>
                                            
				</div>
            </div>                                                            
        </form>
</div>

</body>

</html>