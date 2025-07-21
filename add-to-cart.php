<?php
            $select = "SELECT * FROM products";

            $result = mysqli_query($link, $select);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) { ?>
//your code                    
            <?php }
            } else {
                echo "no record found";
            }


            ?>




