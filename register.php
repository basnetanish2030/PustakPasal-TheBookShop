<?php 
    include 'db_con.php';

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $phone = mysqli_real_escape_string($conn,$_POST['contact']);
        $addr = mysqli_real_escape_string($conn,$_POST['addr']);
        $addr2 = mysqli_real_escape_string($conn,$_POST['addr2']);
        $new_pass = md5($_POST['new_pass']);
        $con_pass = md5($_POST['con_pass']);
        $matchErr = false;
        $usedName = false;

        $query = "SELECT * FROM user_info WHERE username='$username' ";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            echo "<p class='failed'>Username is already used.</p>";
            $usedName = true;
        }
        elseif($new_pass != $con_pass){
            echo "<p class='failed'>Password doesn't match.</p>";
            $matchErr = true;
        }
        else{
            $sql = "INSERT INTO user_info (username, fullname, email, phone, addr1, addr2, pass_word) 
            VALUES('$username', '$fullname', '$email', '$phone', '$addr', '$addr2', '$con_pass')";
            mysqli_query($conn, $sql);

            echo "<p class='success'>Successfully Registered.</p>";

            $matchErr = false;
            $usedName = false;
        }
       
    }
    
?>

<script>
    var matchErr = <?php echo $matchErr; ?> ;
    var usedName = <?php echo $usedName; ?> ;

    if(matchErr == true){
        $(".new-pass").css("box-shadow", "0px 0px 5px red");
        $(".con-pass").css("box-shadow", "0px 0px 5px red");

    }
    else{
        $(".new-pass").css("box-shadow", "unset");
        $(".con-pass").css("box-shadow", "unset");
    }

    if(usedName == true){
        $(".username").css("box-shadow", "0px 0px 5px red");
    }
    else{
        $(".username").css("box-shadow", "unset");
    }
</script>

<?php
    
    if(isset($_POST['submit_btn'])){
        session_start();

        $user_name = $_SESSION['username'];
        $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $contact = mysqli_real_escape_string($conn,$_POST['contact']);
        $addr1 = mysqli_real_escape_string($conn,$_POST['addr1']);
        $addr2 = mysqli_real_escape_string($conn,$_POST['addr2']);

        $query = "UPDATE user_info SET fullname='$fullname', email='$email' ,
        phone='$contact' , addr1='$addr1',addr2='$addr2' WHERE username = '$user_name' ";
        mysqli_query($conn, $query);

        if(mysqli_query($conn,$query) == true){
            echo "<p class='success'>Updated successfully.</p>";
        }
        else{
            echo "<p class='failed'>Something went wrong! Try again.</p>";
        }

    }


?>