<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <?php include('forget1.php') ?>
    <style>
.main{
   margin-left: 100px;
    margin-top: 100px;
    
    
}


        input{width: 100%;
            background-color: black;
            color: #818181;
            border: none;}


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

        .btn{
            background-color: darksalmon;
            width: 100px;

    </style>
</head>
<body style="background-color: black">

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
<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/popper.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>



<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="first">
                    <div class="myform form ">
                        <div class="logo mb-3">

                        </div>
                        <form action="forget1.php" method="post" name="login">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                           
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" name="Npassword" id="Npassword"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" required >
                            </div>

                            <div class="col-md-12 text-center ">
                                <button type="submit" name="Save" class=" btn btn-block mybtn  tx-tfm" >Save</button>
                            </div>



                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
</body>
</html>


