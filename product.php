<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/30947ab7e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="produc.css">
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
        include 'db_con.php';
        if((!empty($_GET['product_id'])) && (is_numeric($_GET['product_id'])) && (mb_strlen($_GET['product_id'])<5)){
            $id = $_GET['product_id'];

            $sql = "SELECT * FROM book_entry WHERE id='$id' ";
            $result= mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $img0 = "uploads/".$row['img0'];
                    $img1 = "uploads/".$row['img1'];
                    $img2 = "uploads/".$row['img2'];
                    $img3 = "uploads/".$row['img3'];
                    $username = $row['username'];
                    $bookname = $row['bookname'];
                    $publication = $row['publication'];
                    $grade = $row['grade'];
                    $price = $row['price'];
                    $condition = $row['con_dition'];
                    $contact = $row['contact_way'];
                    $message = $row['mess_age'];
                    $addr2 = $row['addr2'];
                    $addr1 = $row['addr1'];
                }
                if(!empty($username)){
                    $query = "SELECT * FROM user_info WHERE username = '$username' ";
                    $run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($run) > 0){
                        while($rows = mysqli_fetch_assoc($run)){
                            $phone = $rows['phone'];
                            $email = $rows['email'];
                        }
                    }
                }
            }  
        }
        else{
            echo "<h1 align='center'>Something is wrong!</h1>";
        }
    ?>

   <section class='detail_space'>
        <div class="image_holder">
            <img id="image" src="<?php echo $img0?>" alt="">
            <div class="img_list">
                <ul>
                    <li class="choose"><img  onclick="imageChange(this)" src="<?php echo $img0; ?>" alt=""></li>
                    <li class="choose"><img  onclick="imageChange(this)" src="<?php echo $img1; ?>" alt=""></li>
                    <li class="choose"><img  onclick="imageChange(this)" src="<?php echo $img2; ?>" alt=""></li>
                    <li class="choose"><img  onclick="imageChange(this)" src="<?php echo $img3; ?>" alt=""></li>
                </ul>
            </div>
        </div>
        <script>
            var choose = document.getElementById("image");
            function imageChange(image){
                choose.src = image.src;
            }
    </script>
    <div class="movable">
        <div class="detail">
                <h1><?php echo $bookname;?></h1>
                <h3><?php echo "Rs.".$price;?></h3>
                <h4><?php echo $addr2.", ".$addr1;?></h4><br>

                <h4>Publication: <?php echo $publication;?></h4>
                <h4>Grade: <?php echo $grade;?></h4>
                <h4>Condition: <?php echo $condition;?></h4>
                <h4>Contact: <?php 
                    if($contact == 'phone'){
                        echo $phone;
                    }
                    elseif($contact == 'email'){
                        echo $email;
                    }
                    elseif($contact == 'Both'){
                        echo $phone.", ".$email;
                    }
                ?></h4><hr>
                <h4>Details</h4><br>
                <h5><?php echo $message;?></h5>
            </div>
    </div>
       
   </section>
    
	
    <script src="java.js"></script>
    
    
</body>
</html>