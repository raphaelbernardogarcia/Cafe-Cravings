<?php
    session_start();
    include("db.php");
    
    // Login
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $Email = $_POST["email"];
        $Password = $_POST["password"];

        if (!empty($Email) && !empty($Password) && !is_numeric($Email)){
            $query= "select * from ls where email ='$Email'limit 1";
            $result = mysqli_query($con,$query);
            if ($result){
                if ($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    if(($Email == 'Admin@gmail.com')&&($Password=='admin12345')){
                        $select = "SELECT * FROM ls WHERE Email = '$Email'";
                        $sql = mysqli_query($con, $select);
                        $data = mysqli_fetch_array($sql);
                        //Set Session Variables
                        $_SESSION['id'] = $data['id'];
                        $_SESSION['Name'] = $data['Name1'];
                        $_SESSION['Username'] = $data['Username'];
                        $_SESSION['Email'] = $data['Email'];
                        $_SESSION['Password'] = $data['Password1'];
                        header("Location: Admin.php");
                        exit;
                    }
                    if ($user_data['Password1'] == $Password) {
                        $select = "SELECT * FROM ls WHERE Email = '$Email'";
                        $sql = mysqli_query($con, $select);
                        $data = mysqli_fetch_array($sql);
                        //Set Session Variables
                        $_SESSION['id'] = $data['id'];
                        $_SESSION['Name'] = $data['Name1'];
                        $_SESSION['Username'] = $data['Username'];
                        $_SESSION['Email'] = $data['Email'];
                        $_SESSION['Password'] = $data['Password1'];
                        header("Location: index.php");
                        exit;
                    } else {
                        echo "<script type='text/javascript'>alert('Wrong
                        Password');</script>";
                        header("Location: l.php");
                    }
                } else {
                    header("Location: l.php");
                }
            } else {
                echo "<script type='text/javascript'>alert('Error querying
                database');</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Please enter valid
            information');</script>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $Name = $_POST["name"];
        $Username = $_POST["username"];
        $Email = $_POST["email"];
        $Password = $_POST["password"];
        $Confirmpassword = $_POST["confirmpassword"];
        // Check if email and password are not empty and email is not numeric
        if (!empty($Email) && !empty($Password) && !is_numeric($Email)) {
            $check_query="SELECT * FROM ls WHERE Email='$Email'";
            $check_result=mysqli_query($con,$check_query);
            if (mysqli_num_rows($check_result) > 0) {
                echo "<script type='text/javascript'>alert('Email already exists. Please use
                a different email.');</script>";
            } else {
                if ($Password === $Confirmpassword){
                    // Prepare and execute the SQL query
                    $query = "INSERT INTO ls (Name1, Username, Email, Password1,
                    Confirmpassword) VALUES ('$Name', '$Username', '$Email', '$Password', '$Confirmpassword')";
                    $result = mysqli_query($con, $query);
                    if ($result) {
                        echo "<script type='text/javascript'>alert('Successfully Signed
                        Up!');</script>";
                    } else {
                    echo "<script type='text/javascript'>alert('Failed to insert
                    data');</script>";
                    }
                    } else{
                        echo "<script type='text/javascript'>alert('Password Doesnt
                        Match');</script>";
                    }
                    }
            } else {
            echo "<script type='text/javascript'>alert('Please Enter Valid
            Information');</script>";
            }
    }
        
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <title>CS</title> 
        <link rel="stylesheet" href="cs.css">     
    </head>
    <body>
        <div class="container" id="main">
            <div class="signup">
                <form method = "POST" action="#">
                    <h1> Create Account</h1>
                    <input type="text" name="name" placeholder="Name:" required>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password"  name="password"placeholder="Password" required>
                    <input type="password"  name="confirmpassword"placeholder="Confirm password"required>
                    <button>Signup</button>
                </form>
            </div> 
            <div class="login">
                <form method = "POST" action="#">
                    <h1>Login</h1>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password"  name="password"placeholder="Password" required>
                    <button type = "Submit">Login</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-left">
                        <h5>Already have an Account?</h5>
                        <h1>Wellcome back!</h1>
                        <p>To keep connected with us please log in to your accout</p>
                        <button id="LogIn">Login</button>
                    </div>
                    <div class="overlay-right">
                        <h1>Hi there!</h1>
                        <p>Dont have an account yet? <br>Enter your personal details to start your journey with us</p>
                        <button id="SignUp" type = "Submit">Signup</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            const SignUpButton= document.getElementById('SignUp');
            const LogInButton= document.getElementById('LogIn');
            const main= document.getElementById('main');

            SignUpButton.addEventListener('click', () => {
                main.classList.toggle("right-panel-active");
           });
           LogInButton.addEventListener('click', () => {
                main.classList.toggle("right-panel-active");
           });

        </script>
    <?php 
    session_destroy()
    ?>
    </body>
</html>