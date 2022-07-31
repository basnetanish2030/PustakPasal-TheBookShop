<?php
    include 'db_con.php';
    if(isset($_POST['remove'])){
        $id = $_POST['remove'];

        $sql = "DELETE FROM book_entry WHERE id='$id' ";
        mysqli_query($conn, $sql);
        header('Location: profile.php');
    }
   
?>