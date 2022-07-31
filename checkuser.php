<?php 
    include 'db_con.php';

    if(isset($_POST['log-btn'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM user_info WHERE username='$username' and pass_word='$password' ";
        $exe = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($exe) > 0){
            session_start();
            $_SESSION['username'] = $username;
            header("Location:index.php");
        }
        else{
            echo "<p class='failed'>Incorrect username or password.<p>";
        }
    }
    

?>