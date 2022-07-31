<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/30947ab7e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="prof.css">
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
    <?php
        $user_name = $_SESSION['username'];

        include 'db_con.php';

        $sql = "SELECT * FROM user_info WHERE username = '$user_name' ";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($rows = mysqli_fetch_assoc($result)){
                $username = $rows['username'];
                $email = $rows['email'];
                $fullname = $rows['fullname'];
                $phone = $rows['phone'];
                $addr1 = $rows['addr1'];
                $addr2 = $rows['addr2'];
            }
        }
        else{
            echo "<p class='failed' align='center'>Sorry,this account has been cleared or blocked.</p>";
        }
    ?>

    <div class="register-form">
        <h1 class="title">User Profile</h1>
        
            <div class="space">
				<label for="reg-user">Username</label>
				<input type="text" class="username" name="username" value="<?php echo $username; ?>" disabled>
			</div>
            <div class="space">
				<label for="reg-name">Fullname</label>
				<input type="text" class="fullname" name="fullname" value="<?php echo $fullname; ?>" disabled>
			</div>	

            <div class="space">
				<label for="email">Email</label>
				<input type="email" class="email" name="email" value="<?php echo $email; ?>" disabled>
			</div>
			
			<div class="space">
				<label for="contact">Phone no. </label>
				<input type="tel" class="contact" name="contact" value="<?php echo $phone; ?>" disabled>
			</div>

			<div class="space">
				<label for="reg-addr">District</label>
				<input type="text" class="addr" name="addr" value="<?php echo $addr1; ?>" disabled>
			</div>
            <div class="space">
				<label for="reg-addr">Address</label>
				<input type="text" class="addr" name="addr" value="<?php echo $addr2; ?>" disabled>
			</div>
            <div class="space">
                <button class="update">Edit</button>
                <a href="logout.php"><button class="update">Logout</button></a>
            </div>

			
    </div>
    <script>
        $(function(){
            $(".update").click(function(){
            $(".register-form").css("display" , "none");
            $(".edit-form").css("display" , "block");
             });

             $(".profile").click(function(){
            $(".register-form").css("display" , "block");
            $(".edit-form").css("display" , "none");
             });
        
        });
    </script>


   

    <div class="edit-form">
        <h1 class="title">Edit Profile</h1>
        <form id="edited" method="POST"> 
        
            <div class="space">
				<label for="reg-name">Fullname</label>
				<input type="text" class="fullname" name="fullname" value="<?php echo $fullname; ?>" required>
			</div>	

            <div class="space">
				<label for="email">Email</label>
				<input type="email" class="email" name="email" value="<?php echo $email; ?>" required>
			</div>
			
			<div class="space">
				<label for="contact">Phone no. </label>
				<input type="tel" class="contact" name="contact" value="<?php echo $phone; ?>" required>
			</div>

			<div class="space">
				<label for="reg-addr">District</label>
                <select class="addr1" name="addr1" required>
                    <option value="<?php echo $addr1; ?>"><?php echo $addr1; ?></option>
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
				<input type="text" class="addr2" name="addr2" value="<?php echo $addr2; ?>" >
            </div>
            <div class="space">
                <div class="psMsg"></div>
            </div>
            
            <div class="space">
				<button class="submit-btn" name="submit-btn" type="submit">SUBMIT >></button>
			</div>
        </form>
            <div class="space">
                <a href="profile.php"><button class="profile">Profile</button></a>
                <a href="logout.php"><button class="update">Logout</button></a>
            </div>

			
    </div>

	<div class='table-container'>
		
		
		<table class='table table-light table-hover'>
	<thead>
		<tr>
		<th>ID</th>
		<th>Book Name</th>
		<th>Price</th>
		<th>Task</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$user_name = $_SESSION['username'];

			$sql = "SELECT * FROM book_entry WHERE username = '$user_name' ";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0){
				while($rows = mysqli_fetch_assoc($result)){
					$username = $rows['username'];
					$id = $rows['id'];
					$bookname = $rows['bookname'];
					$price = $rows['price'];
					
					echo "
					
					<tr>
					<th><a href='product.php?product_id=$id'>$id</a></th>
					<td>$bookname</td>
					<td>Rs.$price</td>
					<td><form action='del.php' method='POST'><button class='btn failed' type='submit' name='remove' value='$id'>Remove</button></form></td>
					</tr>
					";
				
				}
			
			}
			else{
				echo "<p align='center'>You have no books on sell.</p>";
			}
			
		

    ?>
		</tbody>
	</table>
	</div>
	
	
		
    <script src="java.js"></script>
    
    
</body>
</html>