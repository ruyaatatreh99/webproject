<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <?php include('log1.php') ?>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/popper.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style media="screen">

  body{
  padding-top:4.2rem;
padding-bottom:4.2rem;
background:black;
  }
  a{
   text-decoration:none !important;
   }
   h1,h2,h3{
   font-family: 'Kaushan Script', cursive;
   }
    .myform{
position: relative;
display: -ms-flexbox;
display: flex;
padding: 1rem;
-ms-flex-direction: column;
flex-direction: column;
width: 100%;
pointer-events: auto;
background-color: #fff;
background-clip: padding-box;
border: 1px solid rgba(0,0,0,.2);
border-radius: 1.1rem;
outline: 0;
max-width: 500px;
}
   .tx-tfm{
   text-transform:uppercase;
   }
   .mybtn{
   border-radius:50px;
   }

   .login-or {
   position: relative;
   color: #aaa;
   margin-top: 10px;
   margin-bottom: 10px;
   padding-top: 10px;
   padding-bottom: 10px;
   }
   .span-or {
   display: block;
   position: absolute;
   left: 50%;
   top: -2px;
   margin-left: -25px;
   background-color: #fff;
   width: 50px;
   text-align: center;
   }
   .hr-or {
   height: 1px;
   margin-top: 0px !important;
   margin-bottom: 0px !important;
   }
   .google {
   color:#666;
   width:100%;
   height:40px;
   text-align:center;
   outline:none;
   border: 1px solid lightgrey;
   }
    form .error {
   color: #ff0000;
   }
  input{width: 100%;
      background-color: black;
      color: #818181;
      border: none;}
  .sidenav {
      height: 100%; /* Full-height: remove this if you want "auto" height */
      width: 160px; /* Set the width of the sidebar */
      position: fixed; /* Fixed Sidebar (stay in place on scroll) */
      z-index: 1; /* Stay on top */
      top: 0; /* Stay at the top */
      left: 0;
      background-color: #111; /* Black */
      overflow-x: hidden; /* Disable horizontal scroll */
      padding-top: 20px;
  }

  /* The navigation menu links */
  .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
  }

  /* When you mouse over the navigation links, change their color */
  .sidenav a:hover {
      color: #f1f1f1;
  }

  /* Style page content */
  .main {
      margin-left: 160px; /* Same as the width of the sidebar */
      padding: 0px 10px;
  }

  /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
  @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
  }
  .col-sm-4{
      height: 600px;
  }
  .btn{
      background-color: darksalmon;
  }

</style>
</head>

<body>

  <script type="text/javascript">
    $("#signup").click(function() {
  $("#first").fadeOut("fast", function() {
  $("#second").fadeIn("fast");
  });
  });

  $("#signin").click(function() {
  $("#second").fadeOut("fast", function() {
  $("#first").fadeIn("fast");
  });
  });



           $(function() {
             $("form[name='login']").validate({
               rules: {

                 email: {
                   required: true,
                   email: true
                 },
                 password: {
                   required: true,

                 }
               },
                messages: {
                 email: "Please enter a valid email address",

                 password: {
                   required: "Please enter password",

                 }

               },
               submitHandler: function(form) {
                 form.submit();
               }
             });
           });



  $(function() {

    $("form[name='registration']").validate({
      rules: {
        firstname: "required",
        lastname: "required",
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 5
        }
      },

      messages: {
        firstname: "Please enter your firstname",
        lastname: "Please enter your lastname",
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        email: "Please enter a valid email address"
      },

      submitHandler: function(form) {
        form.submit();
      }
    });
  });


  </script>

      <div class="container">
          <div class="row">
  			<div class="col-md-5 mx-auto">
  			<div id="first">
  				<div class="myform form ">
  					 <div class="logo mb-3">
  						 <div class="col-md-12 text-center">
  							<h1>Login</h1>
  						 </div>
  					</div>
                     <form action="log1.php" method="post" name="login">
                             <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                             </div>
                             <div class="form-group">
                                <label for="password">Password</label>
                                 <span class="error">*</span>
                                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" required >
                             </div>

                             <div class="col-md-12 text-center ">
                                <button type="submit" name="login" class=" btn btn-block mybtn btn-primary tx-tfm" >Login</button>
                             </div>
                             <div class="col-md-12 ">
                                <div class="login-or">
                                   <hr class="hr-or">
                                   <span class="span-or">or</span>
                                </div>
                             </div>
                         <div class="form-group">
                             <p class="text-center"> <a href="forget.php" id="signup">Forget password ?</a></p>
                         </div>
                             <div class="form-group">
                                <p class="text-center">Don't have account? <a href="sign.php" id="signup">Sign up here</a></p>
                             </div>
                             <div class="form-group">
                                <p class="text-center"><a href="Homepage.html" id="back">Return</a></p>
                             </div>
                          </form>

  				</div>
  			</div>

  			</div>
  		</div>
        </div>


</body>
</html>
