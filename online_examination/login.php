<?php

//login.php

include('master/Examination.php');

$exam = new Examination;

$exam->user_session_public();

include('header.php');

?>
<style>
@media only screen and (max-width: 767px){
	.bg-bubbles{
		width: auto;
	}
	.card-body input.form-control {
        width: 250px !important;
}
}
.card-body input.form-control{
	width: 450px;
	
}
</style>
<div class="empty"> </div>
  <div class="container" style="position: relative; z-index: 2;">

      <div class="row">
        <div class="col-md-3">
			
        </div>
        <div class="col-md-6" style="margin-top:100px;     margin-bottom: 100px;">
          

            <span id="message">
            <?php
            if(isset($_GET['verified']))
            {
              echo '
              <div class="alert alert-success">
                Your email has been verified, now you can login
              </div>
              ';
            }
            ?>   
            </span>
            <div class="card">
              <div class="card-header">User Login</div>
              <div class="card-body">
                <form method="post" id="user_login_form">
                  <div class="form-group">
                    <label>Enter Email Address</label>
                      <input type="text" name="user_email_address" id="user_email_address" class="form-control" />
                    </div>
                  <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="user_password" id="user_password" class="form-control" />
                  </div>
				  <div class="button_center">
				  <div class="" style="margin-right: 30px;">
                    <input type="hidden" name="page" value="login" />
                    <input type="hidden" name="action" value="login" />
                    <input type="submit" name="user_login" id="user_login" class="btn btn-info" value="Login" />
                  </div>
				  <div class="btn btn-info" >
                  <a style="color: #fff;" href="register.php">Register</a>
                </div>
				  </div>
                  
                </form>
              </div>
            </div>
        </div>
        <div class="col-md-3">

        </div>
      </div>
  </div>
<?php include('master/bubble.php');   ?>
<?php include('master/footer.php');   ?>
</body>
</html>

<script>

$(document).ready(function(){

  $('#user_login_form').parsley();

  $('#user_login_form').on('submit', function(event){
    event.preventDefault();

    $('#user_email_address').attr('required', 'required');

    $('#user_email_address').attr('data-parsley-type', 'email');

    $('#user_password').attr('required', 'required');

    if($('#user_login_form').parsley().validate())
    {
      $.ajax({
        url:"user_ajax_action.php",
        method:"POST",
        data:$(this).serialize(),
        dataType:"json",
        beforeSend:function()
        {
          $('#user_login').attr('disabled', 'disabled');
          $('#user_login').val('please wait...');
        },
        success:function(data)
        {
          if(data.success)
          {
            location.href='index.php';
          }
          else
          {
            $('#message').html('<div class="alert alert-danger">'+data.error+'</div>');
          }

          $('#user_login').attr('disabled', false);

          $('#user_login').val('Login');
        }
      })
    }

  });

});

</script>