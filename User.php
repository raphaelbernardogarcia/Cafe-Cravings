<?php
    session_start();
    include("db.php");

    $EmailAddress = $_SESSION['id'];
    $sql = "SELECT * FROM ls WHERE id = '$EmailAddress'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($result);//$data = current user data in session
    if (isset($_POST['Submit'])){
        $id = $data['id'];
        $newName = $_POST['Name1'];
        $newUsername = $_POST['Username1'];
        $newEmail = $_POST['Email1'];
        $newPassword = $_POST['PWRD1'];

        $_SESSION['Name'] = $newName;
        $_SESSION['Username'] = $newUsername;
        $_SESSION['Email'] = $newEmail;
        $_SESSION['Password'] = $newPassword;

        $query = "UPDATE ls SET Username = '$newUsername', Name1 = '$newName', Email = '$newEmail', Password1 = '$newPassword'  WHERE id = $id";
        $var = mysqli_query($con, $query);
        header("Location: User.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel = "stylesheet" href = "style1.css">
	<link rel = "stylesheet" href = "home-style.css">
    <title>user</title>
    <style>

body {
	background-color: #eeedea;
	margin: 0px;
	padding: 0px;
}
      
						
.content-container{
	display: grid;
	grid-template-rows: auto 1fr;
	margin-inline: 15vw;
}



								  
.name-box {
	background-color: #f0f0f0;
	padding: 10px;
	border: 3px solid #50574f;
	border-radius: 5px;
	text-align: left;
	width: 400px;
	font-size: 10px;
	margin-top: 10px;
	border-style: solid;
	margin-left: 18px;
	margin-bottom: 20px;
}
.row1 {
	margin-top: 35px;
	font-size: 10px;
	margin-left: 20px;
	font-weight: 900;
}
.logo {
	color: white;
}
.custom-navbar {
	background-color: #eeedea;
	border-bottom: 2px solid #b09b72;
	padding: 0px;
	margin-bottom: 30px;
	color: white;
}
.info {
	font-size: 40px;
	font-weight: bold;
	text-align: center;
}
.button {
	padding: 10px 20px;
	margin-right: 10px;
	background-color: #540000;/*#50574f~#540000*/
	color: white;
	border-radius: 5px;
	cursor: pointer;
	margin-top: 20px;
	width: 200px;
	font-style: italic;
	margin-bottom: 30px;
}
.pfp {
	height: 200px;
	width: 200px;
	margin-top: 20px;
}		

.Logo{
	aspect-ratio: 1/1;
	width: 5vw;
}
.nav-item:hover{
	color: black;
}

.Username{
	margin: 0px;
	align-self: center;
	margin-top: 5px;
	margin-right: 20px;
	border: 2px solid #50574f;
	background-color: #50574f;
	padding-inline: 10px;
	color: #b09b72;
	border-radius: 10px;
}
										
    </style>
</head>

<body>  
	<nav class="navbar navbar-expand-md custom-navbar">
		<div class="container-fluid">
			<a href="index.html" class="navbar-brand">
				<img src="Logo2.png.png" class = "Logo"alt="Logo">
			</a>
			<?php
	
			?>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
			data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
			aria-label="Toggle navigation">
				<div class="navbar-toggler-icon"></div>
			</button>
	
			<div class="collapse navbar-collapse justify-content-end align-center" 
			id="main-nav">
				<ul class="navbar-nav">
				<?php
			if(isset($_SESSION['Username'])){
                        ?>
							<li class = "nav-item">
                            <p class = "Username"><?php echo $_SESSION['Username']?></p>
							</li>
                        <?php
                     }else{
                        ?>
                            <li><a href ="l.php">Store</a></li>
                        <?php
            } 
			?>
					<li class="nav-item">
					<a class="btn" href="index.php">Home</a>
					</li>
					<li class="nav-item">
					<a class="btn" href="Store.php">Store</a>
					</li>
					<li class="nav-item">
					<a class="btn" href="About.php">Faq</a>
					</li>
				</ul>
			</div>
		</div> 
	</nav>
	<div class="content-container">
		<div class="sub-container">
			<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-3 text-center profile-container">
				
				<img src="Store/profile-icon.webp" class="pfp rounded-circle img-fluid" alt="...">
					<div class="button-container">
						<button class="button" onclick="showEditSection()">edit profile</button>
					</div>
				</div>
				
				<div id="section1" class="section col-lg-9 text-start">
					<div class="info">My Profile</div>
					<div class="form-groups">
						<div class="row">
							<div class="row1 col-3">
								Name:
							</div>
							<div class="name-box col-9 text-fluid">
								<div id="Name"><?php echo $_SESSION['Name']?></div>
							</div>
						</div>
						<div class="row">
							<div class="row1 col-3">
								Username:
							</div>
							<div class="name-box col-9 text-fluid">
								<div id="Username"><?php  echo $_SESSION['Username']?></div>
							</div>
						</div>
						<div class="row">
							<div class="row1 col-3">
								Email
							</div>
							<div class="name-box col-9 text-fluid">
								<div id="Email"><?php  echo $_SESSION['Email']?></div>
							</div>
						</div>
						<div class="row">
							<div class="row1 col-3">
								Password:
							</div>
							<div class="name-box col-9 text-fluid">
								<div id="PWORD"><?php echo $_SESSION['Password']?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div id="section2" class="section col-md-8" style="display: none;">
				<div class="info">Edit Profile</div>
				<form id="profile-edit" method = "POST" action = "">
					<div class="form-group">
						<label for="Name1">Name:</label>
						<input type="text" class="form-control" id="Name1" name = "Name1" value="<?php echo $_SESSION['Name']?>" required>
					</div>
					<div class="form-group">
						<label for="Username1">Username:</label>
						<input type="text" class="form-control" id="Username1" name = "Username1" value="<?php echo $_SESSION['Username']?>" required>
					</div>
                    <div class="form-group">
                        <label for="Email1">Email:</label>
                        <input type="email" class="form-control" id="Email1" name = "Email1" value="<?php echo $_SESSION['Email']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="PWORD1">Password:</label>
                        <input type="password" class="form-control" id="PWRD1" name = "PWRD1" value="<?php echo $_SESSION['Password']?>" required>
                    </div>
                    <button type="submit" name = "Submit" class="btn btn-primary" style="margin-top: 10px;">save</button>
                </form>

                <div>
                    <button class="btn btn-dark" onclick="showUserInfoSection()" style="margin-top: 10px;">cancel</button>
                </div>
		    </div>
		</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    function showEditSection() {
        document.getElementById('section1').style.display = 'none';
        document.getElementById('section2').style.display = 'block';
    }

    function showUserInfoSection() {
        document.getElementById('section1').style.display = 'block';
        document.getElementById('section2').style.display = 'none';
    }
</script>


</body>
</html>
