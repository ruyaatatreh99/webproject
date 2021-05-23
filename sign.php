<html>
<head>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/popper.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
    <?php include('sign1.php') ?>
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
  #second{margin-left:400px;}

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

  <div id="second">
      <div class="myform form ">

                  <div class="logo mb-3">
                     <div class="col-md-12 text-center">
                        <h1 >Signup</h1>
                     </div>
                  </div>
                  <form action="sign1.php" method="post" name="registration">
                     <div class="form-group">
                        <label for="Fname">First Name</label>
                        <input type="text"  name="Fname" class="form-control" id="Fname" aria-describedby="emailHelp" placeholder="Enter Firstname" required>
                     </div>
                     <div class="form-group">
                        <label for="Lname">Last Name</label>
                        <input type="text"  name="Lname" class="form-control" id="Lname" aria-describedby="emailHelp" placeholder="Enter Lastname" required>
                     </div>
                     <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                     </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" required>
                     </div>
                     <div class="form-group">
                        <label for="Rpassword"> Repeat Password</label>
                        <input type="password" name="Rpassword" id="Rpassword"  class="form-control" aria-describedby="emailHelp" placeholder="Repeat Password" required>
                     </div>
                     <div class="col-md-12 text-center mb-3">
                        <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Sign in</button>

                     </div>
                     <div class="col-md-12 ">
                        <div class="form-group">
                           <p class="text-center"><a href="log.php" id="signin">Already have an account?</a></p>
                        </div>
                        <div class="form-group">
                           <p class="text-center"><a href="Homepage.html" id="back">Return</a></p>
                        </div>

                     </div>

                  </form>
               </div>
  </div>

</body>
</html>
