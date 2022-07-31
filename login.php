
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/30947ab7e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="log.css">
    <script src="jquery.min.js"></script>
    
    <title>MeroPustak</title>
</head>
<body>
    <header>
        <nav class="nav-container">
			<div class="menu-bar">
                <button><i class="fa fa-bars"></i></button>
            </div>
            <div class="logo">
                <img src="img/logo.png" alt="Company's Logo">
            </div>
            
            <div class="nav-links">
                <ul>
                    <li><a class="nav-link" href="index.php">HOME</a></li>
                    <li><a class="nav-link" href="buy.php">BUY</a></li>
                    <li><a class="nav-link" href="sell.php">SELL</a></li>
                    <li><a class="nav-link" href="rent.php">RENT</a></li>
                </ul>
            </div>
            <div class="log">
				<?php
					session_start();
					if(isset($_SESSION['username'])){
						echo "<h4 class='userid'><a href='profile.php'>UserID: ".$_SESSION['username']."</a></h4>
                        <a href='profile.php'><button class='user'><i class='fa fa-user'></i></button></a>
                        ";
					}
					else{
						echo "
						<a href='login.php'><button type='button' class='loginbtn'>LOGIN</button></a>
						<a href='login.php'><button class='user'><i class='fa fa-user'></i></button></a>
						";
					}
				?>
				
            </div>
        </nav>
	</header>
	<section id="nav-column">
        <ul>
            <li><a class="nav-link" href="index.php">HOME</a></li>
            <li><a class="nav-link" href="buy.php">BUY</a></li>
            <li><a class="nav-link" href="sell.php">SELL</a></li>
            <li><a class="nav-link" href="rent.php">RENT</a></li>
        </ul>
    </section>
	<section class="login-form">
		<div class="tabs">
				<button class="tab-link1 active">LOGIN</button>
				<button class="tab-link2">REGISTER</button>
		</div>

		<form id="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> 
			<div class="space">
				<label for="user">Username</label>
				<input type="text" name="username" placeholder="Your username">
			</div>
			<div class="space">
				<label for="pass">Password</label>
				<input type="password" name="password" placeholder="Your password">
			</div>
			<div class="space">
				<?php include 'checkuser.php'; ?>
			</div>
			<div class="space">
				<button class="submit-btn" name="log-btn" type="submit">LOGIN</button>
			</div>
        </form>
    </section>
    <section class="register-form">
		<div class="tabs">
				<button class="tab-link1">LOGIN</button>
				<button class="tab-link2 active">REGISTER</button>
		</div>
        <form id="register" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST"> 
			
			<div class="space">
				<label for="reg-name">Fullname</label>
				<input type="text" class="fullname" name="fullname" placeholder="Your Fullname" required>
			</div>	

            <div class="space">
				<label for="email">Email</label>
				<input type="email" class="email" name="email" placeholder="Your email address" required>
			</div>
			
			
			<div class="space">
				<label for="contact">Phone no. </label>
				<input type="tel" class="contact" name="contact" value="+977">
			</div>

			<div class="space">
				<label for="reg-addr">District</label>
				<select class="addr" name="addr" required>
					<option value="Achham">Achham</option>
					<option value="Arghakhanchi">Arghakhanchi</option>
					<option value="Baglung">Baglung</option>
					<option value="Baitadi">Baitadi</option>
					<option value="Bajhang">Bajhang</option>
					<option value="Bajura">Bajura</option>
					<option value="Banke">Banke</option>
					<option value="Bara">Bara</option>
					<option value="Bardiya">Bardiya</option>
					<option value="Bhaktapur">Bhaktapur</option>
					<option value="Bhojpur">Bhojpur</option>
					<option value="Chitwan">Chitwan</option>
					<option value="Dadeldhura">Dadeldhura</option>
					<option value="Dailekh">Dailekh</option>
					<option value="Dang Deukhuri">Dang Deukhuri</option>
					<option value="Darchula">Darchula</option>
					<option value="Dhading">Dhading</option>
					<option value="Dhankuta">Dhankuta</option>
					<option value="Dhanusa">Dhanusa</option>
					<option value="Dolakha">Dolakha</option>
					<option value="Dolpa">Dolpa</option>
					<option value="Doti">Doti</option>
					<option value="Gorkha">Gorkha</option>
					<option value="Gulmi">Gulmi</option>
					<option value="Humla">Humla</option>
					<option value="Ilam">Ilam</option>
					<option value="Jajarkot">Jajarkot</option>
					<option value="Jhapa">Jhapa</option>
					<option value="Jumla">Jumla</option>
					<option value="Kailali">Kailali</option>
					<option value="Kalikot">Kalikot</option>
					<option value="Kanchanpur">Kanchanpur</option>
					<option value="Kapilvastu">Kapilvastu</option>
					<option value="Kaski">Kaski</option>
					<option value="Kathmandu">Kathmandu</option>
					<option value="Kavrepalanchok">Kavrepalanchok</option>
					<option value="Khotang">Khotang</option>
					<option value="Lalitpur">Lalitpur</option>
					<option value="Lamjung">Lamjung</option>
					<option value="Mahottari">Mahottari</option>
					<option value="Makwanpur">Makwanpur</option>
					<option value="Manang">Manang</option>
					<option value="Morang">Morang</option>
					<option value="Mugu">Mugu</option>
					<option value="Mustang">Mustang</option>
					<option value="Myagdi">Myagdi</option>
					<option value="Nawalparasi">Nawalparasi</option>
					<option value="Nuwakot">Nuwakot</option>
					<option value="Okhaldhunga">Okhaldhunga</option>
					<option value="Palpa">Palpa</option>
					<option value="Panchthar">Panchthar</option>
					<option value="Parbat">Parbat</option>
					<option value="Parsa">Parsa</option>
					<option value="Pyuthan">Pyuthan</option>
					<option value="Ramechhap">Ramechhap</option>
					<option value="Rasuwa">Rasuwa</option>
					<option value="Rautahat">Rautahat</option>
					<option value="Rolpa">Rolpa</option>
					<option value="Rukum">Rukum</option>
					<option value="Rupandehi">Rupandehi</option>
					<option value="Salyan">Salyan</option>
					<option value="Sankhuwasabha">Sankhuwasabha</option>
					<option value="Saptari">Saptari</option>
					<option value="Sarlahi">Sarlahi</option>
					<option value="Sindhuli">Sindhuli</option>
					<option value="Sindhupalchok">Sindhupalchok</option>
					<option value="Siraha">Siraha</option>
					<option value="Solukhumbu">Solukhumbu</option>
					<option value="Sunsari">Sunsari</option>
					<option value="Surkhet">Surkhet</option>
					<option value="Syangja">Syangja</option>
					<option value="Tanahu">Tanahu</option>
					<option value="Taplejung">Taplejung</option>
					<option value="Terhathum">Terhathum</option>
					<option value="Udayapur">Udayapur</option>
				</select>
				
			</div>

			<div class="space">
				<label for="reg-addr">Address</label>
				<input type="text" class="addr2" name="addr2" placeholder="Your Address">
				
			</div>
			<div class="space">
				<label for="reg-user">Username</label>
				<input type="text" class="username" name="username" placeholder="Your username(Unique ID)" required>
			</div>
			<div class="space">
				<label for="reg-pass">Password</label>
				<input type="password" class="new-pass" name="new-pass" placeholder="New password" required>
			</div>
			<div class="space">
				<label for="reg-pass">Confirm</label>
				<input type="password" class="con-pass" name="con-pass" placeholder="Confirm password" required>
				
			</div>
			<div class="space">
				<div class="errMsg"></div>
			</div>
			
			<div class="space">
				<button class="submit-btn" name="submit-btn" type="submit">REGISTER</button>
			</div>
		</form>
	</section>
	
	<script>
		function auto(){
			var input = document.getElementById('addr2');
			var autocomplete = new google.maps.places.Autocomplete(input);
		}
	</script>
	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfy4K7qX9T24Rmi2TkYrHA7dcJpNYAgQU&libraries=places&region=NP&callback=auto"></script>
	<script src="java.js"></script>
    
    
</body>
</html>