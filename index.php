<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register and login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="homepage.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="fName" id="email1" placeholder="email" required>
                <label for="email">email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password1" placeholder="password" required>
                <label for="password">password</label>
            </div>
            <input type="submit" class="btn" value="signup" name="signup">
           
        </form>
        <p class="or">
            -------or-------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already have an account?</p>
            <button id="signInButton">sign In</button>
        </div>
    </div>
    
    <div class="container" id="signIn">
        <h1 class="form-title">sign In</h1>
        <form method="post" action="homepage.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="fName" id="email" placeholder="email" required>
                <label for="email">email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="password">password</label>
            </div>
            <p class="recover">
                <a href="#">Recover password</a>

            </p>
            <input type="submit" class="btn" value="sign In" name="signIn">
           
        </form>
        <p class="or">
            -------or-------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>