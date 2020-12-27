<?php

//register.php // source code modified by jacksonsilass@gmail.com +255 763169695 from weblessons

include('master/Examination.php');

$exam = new Examination;

$exam->user_session_public();

include('header.php');

?>
	<div class="empty"> </div>
	<div class="containter" style="position: relative; z-index: 2;">
		<div class="d-flex justify-content-center">
			<br /><br />
			<div class="card" style="margin-top:50px;margin-bottom: 100px;">
        		<div class="card-header"><h4>User Registration</h4></div>
				<span id="message"></span>
        		<div class="card-body">
        			   
                <form method="post" id="user_register_form">
                  <div class="form-group">
                    <label>Enter Email Address</label>
                    <input type="text" placeholder="Enter Email" name="user_email_address" id="user_email_address" class="form-control" data-parsley-checkemail data-parsley-checkemail-message='Email Address already Exists' />
                  </div>
                  <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="user_password" id="user_password" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Enter Confirm Password</label>
                    <input type="password" name="confirm_user_password" id="confirm_user_password" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Enter Name</label>
                    <input type="text" placeholder="Enter Name" name="user_name" id="user_name" class="form-control" /> 
                  </div>
                  <div class="form-group">
                    <label>Select Gender</label>
                    <select name="user_gender" id="user_gender" class="form-control">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                  </select> 
                  </div>
                  <div class="form-group">
                    <label>Hall Ticket Number/ College Name</label>
                    <input type="text" placeholder="Hall Ticket Number/ College Name" name="user_address" id="user_address" class="form-control"/> 
                  </div>
                  <div class="form-group">
                    <label>Enter place</label>
                    <input type="text" name="user_address" id="user_address" class="form-control" placeholder="Enter place" /> 
                  </div>
                  <div class="form-group">
                    <label>Enter Mobile Number</label>
                    <input type="number" placeholder="Enter Mobile Number" name="user_mobile_no" id="user_mobile_no" class="form-control" /> 
                  </div>
                    <div class="term_condition">
                    <input type="checkbox" id="term_condition" name="term_condition" value="term_condition" required />
                    <label>Terms And Conditions</label>
                    </div>
                  <div class="form-group">
                    <label>Select Profile Image</label>
                    <input type="file" name="user_image" id="user_image" />
                  </div>
                  <br />
				  <div class="button_center">
				  <div class="" style="margin-right: 30px;">
                    <input type="hidden" name='page' value='register' />
                    <input type="hidden" name="action" value="register" />
                    <input type="submit" name="user_register" id="user_register" class="btn btn-info" value="Register" />
                  </div>
				  <div class="btn btn-info" >
          				<a style="color: #fff;" href="login.php">Login</a>
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

<script>

$(document).ready(function(){

  window.ParsleyValidator.addValidator('checkemail', {
    validateString: function(value){
      return $.ajax({
        url:'user_ajax_action.php',
        method:'post',
        data:{page:'register', action:'check_email', email:value},
        dataType:"json",
        async: false,
        success:function(data)
        {
          return true;
        }
      });
    }
  });

  $('#user_register_form').parsley();

  $('#user_register_form').on('submit', function(event){
    event.preventDefault();

    $('#user_email_address').attr('required', 'required');

    $('#user_email_address').attr('data-parsley-type', 'email');

    $('#user_password').attr('required', 'required');

    $('#confirm_user_password').attr('required', 'required');

    $('#confirm_user_password').attr('data-parsley-equalto', '#user_password');

    $('#user_name').attr('required', 'required');

    $('#user_name').attr('data-parsley-pattern', '^[a-zA-Z ]+$');

    $('#user_address').attr('required', 'required');

    $('#user_mobile_no').attr('required', 'required');

    $('#user_mobile_no').attr('data-parsley-pattern', '^[0-9]+$');

    $('#term_condition').attr('required', 'required');
	
	$('#user_image').attr('required', 'required');

    $('#user_image').attr('accept', 'image/*');

    if($('#user_register_form').parsley().validate())
    {
      $.ajax({
        url:'user_ajax_action.php',
        method:"POST",
        data:new FormData(this),
        dataType:"json",
        contentType:false,
        cache:false,
        processData:false,
        beforeSend:function()
        {
          $('#user_register').attr('disabled', 'disabled');
          $('#user_register').val('please wait...');
        },
        success:function(data)
        {
          if(data.success)
          {
            $('#message').html('<div class="alert alert-success">Please check your email</div>');
            $('#user_register_form')[0].reset();
            $('#user_register_form').parsley().reset();
          }

          $('#user_register').attr('disabled', false);

          $('#user_register').val('Register');
        }
      })
    }

  });
	
});

</script>