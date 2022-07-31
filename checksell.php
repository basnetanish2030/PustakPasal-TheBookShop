<?php
    include 'db_con.php';
    
    if(isset($_POST['submit-btn'])){
        $username = $_SESSION['username'];

        $sql = "SELECT * FROM user_info WHERE username = '$username' ";
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
        $bookname = mysqli_real_escape_string($conn, $_POST['bookname']);
        $publication = mysqli_real_escape_string($conn, $_POST['publication']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $condition = mysqli_real_escape_string($conn, $_POST['condition']);
        $contact_way = mysqli_real_escape_string($conn, $_POST['way']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $grade = mysqli_real_escape_string($conn, $_POST['grade']);
        $error = false;


        if($_FILES['images0']['name'] != ""){
            $images0 = $_FILES['images0'];

            $fileName = $images0['name'];
            $fileSize = $images0['size'];
            $fileType = $images0['type'];
            $fileErr = $images0['error'];
            $fileTmpLoc = $images0['tmp_name'];
            $fileExt = explode('.', $fileName);
            $actualExt = strtolower(end($fileExt));

            $allowed = array('png','jpeg','jpg');

            if(in_array($actualExt, $allowed)){
                if($fileErr === 0){
                    if($fileSize > 5000){
                        $fileNewName0 = uniqid('',true).".".$actualExt;
                        $fileDestination = "uploads/".$fileNewName0;
                        move_uploaded_file($fileTmpLoc, $fileDestination);
                    }
                    else{
                        echo "<p class='failed'>Image 1:Maximum 5 MB of image is allowed.</p>";
                        $error = true;
                    }
                }
                else{
                    echo "<p class='failed'>Image 1:There is an unknown error.Try again!</p>";
                    $error = true;
                }
            }
            else{
                echo "<p class='failed'>Image 1:Only jpg, jpeg and png format are allowed</p>";
                $error = true;
            }   
        }else{
            $fileNewName0 = "default.png";
        } 

        if($_FILES['images1']['name'] != ""){
            $images1 = $_FILES['images1'];

            $fileName1 = $images1['name'];
            $fileSize1 = $images1['size'];
            $fileType1 = $images1['type'];
            $fileErr1 = $images1['error'];
            $fileTmpLoc1 = $images1['tmp_name'];
            $fileExt1 = explode('.', $fileName);
            $actualExt1 = strtolower(end($fileExt));

            $allowed = array('png','jpeg','jpg');

            if(in_array($actualExt1, $allowed)){
                if($fileErr1 === 0){
                    if($fileSize1 > 5000){
                        $fileNewName1 = uniqid('',true).".".$actualExt;
                        $fileDestination = "uploads/".$fileNewName1;
                        move_uploaded_file($fileTmpLoc1, $fileDestination);
                    }
                    else{
                        echo "<p class='failed'>Image 2:Maximum 5 MB of image is allowed.</p>";
                        $error = true;
                    }
                }
                else{
                    echo "<p class='failed'>Image 2:There is an unknown error.Try again!</p>";
                    $error = true;
                }
            }
            else{
                echo "<p class='failed'>Image 2:Only jpg, jpeg and png format are allowed</p>";
                $error = true;
            }   
        }else{
            $fileNewName1 = "default.png";
        } 

        
        
        if($_FILES['images2']['name'] != ""){
            $images2 = $_FILES['images2'];

            $fileName2 = $images2['name'];
            $fileSize2 = $images2['size'];
            $fileType2 = $images2['type'];
            $fileErr2 = $images2['error'];
            $fileTmpLoc2 = $images2['tmp_name'];
            $fileExt2 = explode('.', $fileName2);
            $actualExt2 = strtolower(end($fileExt2));

            $allowed = array('png','jpeg','jpg');

            if(in_array($actualExt2, $allowed)){
                if($fileErr2 === 0){
                    if($fileSize2 > 5000){
                        $fileNewName2 = uniqid('',true).".".$actualExt2;
                        $fileDestination = "uploads/".$fileNewName2;
                        move_uploaded_file($fileTmpLoc2, $fileDestination);
                    }
                    else{
                        echo "<p class='failed'>Image 3:Maximum 5 MB of image is allowed.</p>";
                        $error = true;
                    }
                }
                else{
                    $error = true;
                    echo "<p class='failed'>Image 3:There is an unknown error.Try again!</p>";
                }
            }
            else{
                $error = true;
                echo "<p class='failed'>Image 3:Only jpg, jpeg and png format are allowed</p>";
            }   
        }else{
            $fileNewName2 = "default.png";
        } 

        if($_FILES['images3']['name'] != ""){
            $images3 = $_FILES['images3'];

            $fileName3 = $images3['name'];
            $fileSize3 = $images3['size'];
            $fileType3 = $images3['type'];
            $fileErr3 = $images3['error'];
            $fileTmpLoc3 = $images3['tmp_name'];
            $fileExt3 = explode('.', $fileName3);
            $actualExt3 = strtolower(end($fileExt3));

            $allowed = array('png','jpeg','jpg');

            if(in_array($actualExt3, $allowed)){
                if($fileErr3 === 0){
                    if($fileSize3 > 5000){
                        $fileNewName3 = uniqid('',true).".".$actualExt3;
                        $fileDestination = "uploads/".$fileNewName3;
                        move_uploaded_file($fileTmpLoc3, $fileDestination);
                    }
                    else{
                        $error = true;
                        echo "<p class='failed'>Image 4:Maximum 5 MB of image is allowed.</p>";
                    }
                }
                else{
                    $error = true;
                    echo "<p class='failed'>Image 4:There is an unknown error.Try again!</p>";
                }
            }
            else{
                $error = true;
                echo "<p class='failed'>Image 4:Only jpg, jpeg and png format are allowed</p>";
            }   
        }else{
            $fileNewName3 = "default.png";
        } 
    
        if($error != true){
            $sql = "INSERT INTO book_entry (username, bookname, publication, category, price, con_dition, contact_way, mess_age, grade,addr1,addr2,img0,img1,img2,img3)
            VALUES('$username','$bookname','$publication','$category','$price','$condition','$contact_way','$message','$grade','$addr1','$addr2','$fileNewName0','$fileNewName1','$fileNewName2','$fileNewName3')";
            if(mysqli_query($conn, $sql)){
                echo "<p class='success'>Successfully Uploaded.Thank you!</p>";
            }
            else{
                echo "<p class='failed'>Upload failed.Try again!</p>";
        }

        }
        

    }
    
?>