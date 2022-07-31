<?php


            include 'db_con.php';

            $district = $_POST['district'];
            $category = $_POST['category'];


            if($district != "" && $category != ""){
                $sql = "SELECT * FROM book_entry WHERE addr1='$district' AND category='$category' LIMIT 15";
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
            }


            if($district == "" && $category == ""){
                $sql = "SELECT * FROM book_entry ORDER BY id DESC LIMIT 15";
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
            }

            if($district != "" && $category == ""){
                $sql = "SELECT * FROM book_entry WHERE addr1='$district' ORDER BY id DESC LIMIT 15";
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
            }






            if($district == "" && $category == "Course Book"){
                $sql = "SELECT * FROM book_entry WHERE category='$category' LIMIT 15";
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
            }

            if($district == "" && $category == "Biography"){
                $sql = "SELECT * FROM book_entry WHERE category='$category' LIMIT 15";
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
            }
            if($district == "" && $category == "Poetry"){
                $sql = "SELECT * FROM book_entry WHERE category='$category' LIMIT 15";
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
            }

            if($district == "" && $category == "fiction"){
                $sql = "SELECT * FROM book_entry WHERE category='$category' LIMIT 15";
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
            }

            if($district == "" && $category == "Drama"){
                $sql = "SELECT * FROM book_entry WHERE category='$category' LIMIT 15";
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
            }

            

            
                
        
        
            
            
?>