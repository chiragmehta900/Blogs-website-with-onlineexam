<?php

include('header.php');

?>
<style>
.form-control{
    width: 300px !important;
}
</style>
	<div class="empty"> </div>
	<div class="containter" style="position: relative; z-index: 2;">
		<div class="d-flex justify-content-center">
			<br /><br />
			<div class="card" style="margin-top:50px;margin-bottom: 100px;">
        		<div class="card-header"><h4>Online Classes Registration</h4></div>
				<span id="message"></span>
        		<div class="card-body">
        			   
                <form action="registration.php" onsubmit="return validateForm()" method="POST" id="user_register_form">
                    <div class="form-group">
                    <label>Enter Name</label>
                    <input type="text" placeholder="Enter Name" name="user_name" id="user_name" class="form-control" required /> 
                  </div>

                  <div class="form-group">
                    <label>Enter Email Address</label>
                    <input type="text" placeholder="Enter Email" name="user_email" id="user_email" class="form-control" data-parsley-checkemail data-parsley-checkemail-message='Email Address already Exists' required />
                  </div>
                    
                  <div class="form-group">
                    <label>Enter Mobile Number</label>
                    <input type="number" placeholder="Enter Mobile Number" name="user_mobile" id="user_mobile" class="form-control" required /> 
                  </div>

                  <div class="form-group">
                    <label>Enter City</label>
                    <input type="text" placeholder="Enter City" name="user_city" id="user_city" class="form-control" data-parsley-checkemail data-parsley-checkemail-message='Email Address already Exists' required />
                  </div>

                  <div class="form-group">
                    <label>Enter District</label>
                    <input type="text" placeholder="Enter District" name="user_district" id="user_district" class="form-control" data-parsley-checkemail data-parsley-checkemail-message='Email Address already Exists' required />
                  </div>

                  <div class="form-group">
                    <label>Enter Your interested Course</label>
                    <input type="text" placeholder="Enter Your interested Course" name="user_course" id="user_course" class="form-control" data-parsley-checkemail data-parsley-checkemail-message='Email Address already Exists' required />
                  </div>

                  <div class="form-group">
                    <label>Enter Message</label>
                    <input type="text"  placeholder="Enter Mobile Number" name="user_message" id="user_message" class="form-control" required /> 
                    <!-- <textarea rows="4" cols="50" name="message" placeholder="Enter Message" name="user_message" id="user_message" class="form-control"  /></textarea> -->
                  </div>                  
                  <br />
				  <div class="button_center">
				  <div class="" style="margin-right: 30px;">

                    <input type="submit" name="user_register" id="user_register" class="btn btn-info" value="Register" />
                  </div>

				  </div>
                  
                </form>
          			
        		</div>
      		</div>
      		<br /><br />
      		<br /><br />
		</div>
	</div>
<?php include('master/bubble.php');   ?>
<?php include('master/footer.php');   ?>
</body>

</html>