<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../CSS/Login.css"/>
        <script src="../JS/CreateAccount.js"></script>
    </head>
    <body>
            <form onsubmit="return Loginvalidation()" method = "POST" action="../PHP/CreateAccount.php">
                <!-- Image stored in customers Assets-->
                <img src="..\Assets\Image\UserIconLoginPage.png" alt="Logo" style="width:100px; height:100px;"/>
                
                <input type="text" name="fullname" id="fullname" placeholder="Username"/>
                
                <span id="nameError"></span>

                <input type="email" name="email" id="email" placeholder="Email"/>
                
                <span id="mailError"></span>
                
                <input type="password" name="password" id="password" placeholder="Password"/>
                
                <span id="passError"> </span>
                
                <button type="submit">Login</button>
                
                <h4>New here.<a href="register.php"> Register</a></h4>

            </form>
    </body>
</html>