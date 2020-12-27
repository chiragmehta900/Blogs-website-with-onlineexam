<?php

//login.php // source code modified by jacksonsilass@gmail.com +255 763169695 from weblessons

include('Examination.php');

$exam = new Examination;

$exam->admin_session_public();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Examination System in PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style/style.css" />
</head>
<body>
  <div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
      <img src="logo.jpg" class="img-fluid" width="300" alt="Online Examination System in PHP" />
  </div>
  <div class="empty"> </div>


  <div class="container" style="position: relative; z-index: 2;">
      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="margin-top:20px;">
          
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
            <div class="card-header">Admin Login</div>
            <div class="card-body">
              <form method="post" id="admin_login_form">
                <div class="form-group">
                  <label>Enter Email Address</label>
                  <input type="text" name="admin_email_address" id="admin_email_address" class="form-control" />
                </div>
                <div class="form-group">
                  <label>Enter Password</label>
                  <input type="password" name="admin_password" id="admin_password" class="form-control" />
                </div>
                <div class="button_center">
				  <div class="" style="margin-right: 30px;">
                  <input type="hidden" name="page" value="login" />
                  <input type="hidden" name="action" value="login" />
                  <input type="submit" name="admin_login" id="admin_login" class="btn btn-info" value="Login" />
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
<?php include('bubble.php');   ?>

</body>
</html>

<script>

$(document).ready(function(){

  $('#admin_login_form').parsley();

  $('#admin_login_form').on('submit', function(event){
    event.preventDefault();

    $('#admin_email_address').attr('required', 'required');

    $('#admin_email_address').attr('data-parsley-type', 'email');

    $('#admin_password').attr('required', 'required');

    if($('#admin_login_form').parsley().validate())
    {
      $.ajax({
        url:"ajax_action.php",
        method:"POST",
        data:$(this).serialize(),
        dataType:"json",
        beforeSend:function(){
          $('#admin_login').attr('disabled', 'disabled');
          $('#admin_login').val('please wait...');
        },
        success:function(data)
        {
          if(data.success)
          {
            location.href="index.php";
          }
          else
          {
            $('#message').html('<div class="alert alert-danger">'+data.error+'</div>');
          }
          $('#admin_login').attr('disabled', false);
          $('#admin_login').val('Login');
        }
      });
    }

  });

});

</script>