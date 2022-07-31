<?php

    include 'db_con.php';

    $district = $_POST['district'];     
    $keyword =  $_POST['keyword'];

    $sql = "SELECT * FROM book_entry WHERE bookname LIKE '%$keyword%' AND addr1 = '$district' ";
    $run = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($run);
    if(mysqli_num_rows($run) > 0){
        echo  "<h3 align='center'>"."\" $count"." books found \"</h3>";
        while ($items = mysqli_fetch_assoc($run)){
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