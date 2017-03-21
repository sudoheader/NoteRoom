<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn1 {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Extra styles for the cancel button in sign up*/
        .cancelbtn2 {
            float: right;
            width: 50%;
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* For signup button */
        .signupbtn {
            float:left;
            width:50%
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal1 {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* The Modal (background) */
        .modal2 {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal1-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

         /* Modal Content/Box */
        .modal2-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
        }
            
        @keyframes animatezoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
        }

        /* Clear Floats */
        .clearfix::after {    
            content: "";    
            clear: both;    
            display: table;   
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn1 {
                width: 100%;
            }
            .cancelbtn2, .signupbtn {
               width: 100%;
            }
        }
        </style>
    </head>
    <body contenteditable="false">
        <h2 style="font-family: Arial">Login or Sign up!</h2>

        <!-- Login -->
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

        <div id="id01" class="modal1" style="display: none;">
          
          <form class="modal1-content animate" action="/action_page.blade.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
              <img src="img_avatar.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required="">

              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required="">
                
              <button type="submit">Login</button>
              <input type="checkbox" checked="checked"> Remember me
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn1">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>

        <!-- Sign up -->
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>

        <div id="id02" class="modal2" style="display: none;">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
            <form class="modal2-content animate" action="/action_page.blade.php" method="post">
            <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required="">

                    <label><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required="">

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required="">

                    <label><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required="">

                    <label><b>School</b></label>
                    <input type="text" placeholder="Enter School" name="school" required="">

                    <input type="checkbox" checked="checked"> Remember me
                    <p>By creating an account you agree to our <a href="#">Terms &amp; Privacy</a>.</p>

                    <label><b>Role</b></label><br>
                    <input type="radio" name="role" value="student">Student<br>
                    <input type="radio" name="role" value="teacher">Teacher (alpha)

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn2">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
        </div>

        <script>
        // Get the modal
        var modal1 = document.getElementById('id01');
        var modal2 = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
            else if(event.target == modal2) {
                modal2.style.display = "none";
            }
        }
        </script>
    </body>
    </html>