<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/30947ab7e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="categori.css">
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
                        $logged = true;
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
    <?php include 'db_con.php';?>
    <div class="filter_box">
        
        <h3>Location:</h3>
            <select name="district" id="district">
                    <option value="">All</option>
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

            
            <form class="search" action="search.php" method="GET">
                    <input type="search" name="keyword" placeholder="What are you looking for?">
                    <button type="submit"><span class='fa fa-search'></span><span class='show'>Search</span></button>
            </form>
        </div>
        <script>
            $(function(){
                $("#district").on("change",function(){
                var district = $("#district").val();

                $(".item_list").load("filter.php",{
                        district:district,
                        category: ''
                    });
                });
            });
        </script>
    <div class="item_row">
        <div class="title-box">
            <h3>Biography</h3>
        </div>
        <ul class="item_list">
        <?php

                $sql = "SELECT * FROM book_entry WHERE category='Biography' ORDER BY id ASC";
                $run = mysqli_query($conn, $sql);
                if(mysqli_num_rows($run) > 0){
                while ($items = mysqli_fetch_assoc($run)) {
                    $id = $items['id'];
                    $cover = "uploads/".$items['img0'];
                    $username = $items['username'];
                    $bookname = $items['bookname'];
                    $address = $items['addr2'].",".$items['addr1'];
                    $price = $items['price'];

                    echo "<a href='product.php?product_id=$id'><li class='item'>
                    <div class='image_holder'>
                        <img src='$cover' alt=''>
                    </div>
                    <div class='description'>
                        <div class='info'>
                            <h4>$bookname</h4>
                            <h5>$address</h5>
                            <hr>
                            <h4>Rs.$price</h4>
                        </div>
                    </div>
                </li></a>";
                }
            }
            else{
                echo "<h1 align='center'>No books found!</h1>";
            }

        ?>
        </ul>
    </div>       
    
    <script src="java.js"></script>
    
    
</body>
</html>