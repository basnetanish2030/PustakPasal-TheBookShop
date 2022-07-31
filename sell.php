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
    



   

    <div class="register-form">
    <?php
        if(isset($_SESSION['username'])){
            $user_name = $_SESSION['username'];
            $logged = true;

            
        }
        else{
            $logged = false;
            echo "<h4 class='failed' align='center'>You are not logged in. Please login to sell the book.</h4>";
        }
    ?>
        
        <h1 class="title">Book Entry</h1>
        <form id="entry" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data"> 
        <div class="space">
            <label for="bookname">Book's Name</label>
            <input type="text" class="bookname" name="bookname" placeholder = "Name of Book" required>
        </div>
        <div class="space">
            <label for="publication">Publication</label>
            <input type="text" class="publication" name="publication" placeholder ="Name of Publication" required>
        </div>	

        <div class="space">
				<label for="category">Category</label>
                <select class="category" name="category" required>
                    <option value="Course Book">Course Book</option>
                    <option value="Poetry">Poetry</option>
                    <option value="Biography">Biography</option>
                    <option value="Fiction">Fiction</option>
					<option value="Drama">Drama</option>
                </select>
        </div>

        <div class="space">
				<label for="grade">Grade</label>
                <select class="grade" name="grade" required>
                    <option value="None">None</option>
                    <option value="Other">Other Grade</option>
					<option value="12">Grade-12</option>
                    <option value="11">Grade-11</option>
					<option value="10">Grade-10</option>
                    <option value="9">Grade-9</option>
					<option value="8">Grade-8</option>
                    <option value="7">Grade-7</option>
					<option value="6">Grade-6</option>
                    <option value="5">Grade-5</option>
					<option value="4">Grade-4</option>
                    <option value="3">Grade-3</option>
					<option value="2">Grade-2</option>
                    <option value="1">Grade-1</option>
                </select>
        </div>

        <div class="space">
            <label for="price">Price(in Rs.)</label>
            <input type="number" class="price" name="price" required>
        </div>
        
        <div class="land">
            <label for="condition">Condition</label>
            <input type="radio" class="condition" name="condition" value="New">New
            <input type="radio" class="condition" name="condition" value="Used">Used
        </div>
        <div class="img_file">
            <label>Add Images</label><br><br>
            <input type="file" id="images0" name="images0" accept="image/*" >
            <input type="file" id="images1" name="images1" accept="image/*" >
            <input type="file" id="images2" name="images2" accept="image/*" >
            <input type="file" id="images3" name="images3" accept="image/*" >
        </div><br><br>

        <div class="land">
            <label for="way">How do you want the customer to contact you?</label><br><br>
            <input type="radio" class="way" name="way" value="email">Email
            <input type="radio" class="way" name="way" value="phone">Phone
            <input type="radio" class="way" name="way" value="Both">Both
        </div><br>

        <div class="land">
            <label for="reg-addr">Detailed Information</label><br><br>
            <textarea class="message" name="message" placeholder="Enter detailed information here ...."></textarea>
        </div>
        

        
            <div class="space">
                <div id="psMsg"></div>
            </div>
            <script>
                <script type="text/javascript">
                    $(document).ready(function() {
                    
                    $('body').animate({scrollTop: +400}, 1000);
                    
                });
                </script>
            </script>
            <div class="space">
                <?php include 'checksell.php';?>
            </div>
            
            <div class="space">
                <?php
                    if($logged == false){
                        echo "<h4 class='failed'>Submission not allowed.</h4>";
                    }
                    else{
                        echo "<button class='submit-btn' name='submit-btn' type='submit' >SUBMIT >></button>";
                    }
                ?>
				
			</div>
                
        </form>

			
    </div>
    <script src="java.js"></script>
    
    
</body>
</html>