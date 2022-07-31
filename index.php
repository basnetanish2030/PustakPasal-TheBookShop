<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/30947ab7e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
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
    
    <section id="body">
        <section class="banner">
            <div class="descri">
                <h1>BUY THE BOOK</h1>
                <p>Directly from the seller nearby you at the minimal cost.</p>
                <a href="buy.php"><button class= "learn" type="button">SHOP NOW</button></a>
            </div>
            <div class="img">
                <img src="img/book-lover.svg" alt="Digital Marketing">
            </div>
        </section>
        <section class="banner">
            <div class="img2">
                <img src="img/reading.svg" alt="reading">
            </div>
            <div class="descri">
                <h1>SELL THE BOOK</h1>
                <p>Directly to the buyer nearby you at the cost you prefer.</p>
                <a href="sell.php"><button class= "learn" type="button">SELL NOW</button></a>
            </div>
        </section>
        
        <section class="banner">
            <div class="descri">
                <h1>RENT THE BOOK</h1>
                <p>Rent your book for prefered price and get the book for suitable price.</p>
                <a href="rent.php"><button class= "learn" type="button">RENT NOW</button></a>
            </div>
            <div class="img">
                <img src="img/reading-list.svg" alt="Digital Marketing">
            </div>
        </section>

    </section>
    
    <footer>
        <section id="footer">
            <div class="contact">
            
                <ul>
                    <li><h3>Contact Us</h3></li>
                    <li>Address: Itahari-8,Sunsari</li>
                    <li>Phone:+9779812345678</li>
                    <li>Email: sankalpa_group@gmail.com</li>
                </ul>
            </div>
            <div class="social">
                <h3>Social Media</h3>
                <ul>
                    
                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    <li><a href=""><i class="fab fa-pinterest"></i></a></li>
                </ul>
            </div>
           
        </section>
        
    </footer>
    <script src="java.js"></script>
</body>
</html>
