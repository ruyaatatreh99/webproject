<!Doctype html>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="text/css" rel="stylesheet"href="loogin.css">


    <style type="text/css">

        @import url(http://weloveiconfonts.com/api/?family=entypo);

    </style>

</head>

<body>




<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>


<button onclick="document.getElementById('id011').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id011" class="modal">

    <span onclick="document.getElementById('id011').style.display='none'" class="close" title="Close Modal">&times;</span>

    <form class="modal-content" action="/action_page.php">

        <div class="container">

            <h1>Sign Up</h1>

            <p>Please fill in this form to create an account.</p>

            <hr>

            <label for="email"><b>Email</b></label>

            <input type="text" placeholder="Enter Email" name="email" required>


            <label for="psw"><b>Password</b></label>

            <input type="password" placeholder="Enter Password" name="psw" required>


            <label for="psw-repeat"><b>Repeat Password</b></label>

            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>



            <label>

                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me

            </label>


            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>


            <div class="clearfix">

                <button type="button" onclick="document.getElementById('id011').style.display='none'" class="cancelbtn">Cancel</button>

                <button type="submit" class="signupbtn">Sign Up</button>

            </div>

        </div>

    </form>

</div>


<script>

    // Get the modal

    var modal = document.getElementById('id01');


    // When the user clicks anywhere outside of the modal, close it

    window.onclick = function(event) {

        if (event.target == modal) {

            modal.style.display = "none";

        }

    }

</script>


<div id="id01" class="modal">



    <form class="modal-content animate" action="/action_page.php">

        <div class="imgcontainer">

            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

            <img src="aaa.jpg" alt="Avatar" class="avatar">

        </div>


        <div class="container">



            <label for="uname"><b>Username</b></label>

            <input type="text" placeholder="Enter Username" name="uname" required>


            <label for="psw"><b>Password</b></label>

            <input type="password" placeholder="Enter Password" name="psw" required>



            <center><button type="submit" style='width:auto;'">Login</button></center>

            <label>

                <input type="checkbox" checked="checked" name="remember"> Remember me

            </label>

        </div>


        <div class="container" style="background-color:#f1f1f1">

            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

            <span class="psw">Forgot <a href="#">password?</a></span>

            <div id="wrapper">






                <a href ="https://www.facebook.com"><div class ="box" id="facebook" >&#62220;</div></a>

                <a href="https://www.twitter.com"><div class ="box" id="twitter">&#62217;</div></a>

                <a href="https://www.google.com"><div class ="box" id="google">&#62223;</div></a>

                <!--<a href="https://www.ae.linkedin.com">/<div class ="box" id="linkiden">&#62232;</div></a>-->


            </div>

        </div>

    </form>

</div>



<script>

    // Get the modal

    var modal = document.getElementById('id01');


    // When the user clicks anywhere outside of the modal, close it

    window.onclick = function(event) {

        if (event.target == modal) {

            modal.style.display = "none";

        }

    }

</script>


</body>

</html>