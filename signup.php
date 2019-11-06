<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/signup.css">

</head>

<body>


    <div id="id01" class="modal">
        <form class="modal-content" action="/action_page.php">
            <div class="container">
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="fname"><b>First Name</b></label>
                <input type="text" placeholder="Enter First name" name="fname">
                <label for="lname"><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last name" name="fname">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email">
                <label for="mob"><b>Mobile Number</b></label>
                <input type="tel" placeholder="Enter mobile name" name="mob">
                <label for="car"><b>Do you have car</b></label>
                <input type="radio" placeholder="Enter Fisrt name" name="fname">
                <div class="inner container">
                    
                </div>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="submit" class="signupbtn">Sign Up</button>
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </div>
        </form>
    </div>


</body>

</html>