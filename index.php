<?php

include 'header.html';
include 'connectdb.php';
$result = mysqli_query($mysql, 'SELECT * FROM `lab4`');
$result2 = mysqli_query($mysql, 'SELECT * FROM `lab4`');

?>
<html>
    <body>
        <div class="container">
            <div class="container_img">
            <?php 
                while($name = mysqli_fetch_assoc($result)){
            ?>
                <img src="<?php echo $name['img']; ?>" alt="<?php echo $name['name_img'];?>" width="200px">
                <?php
            }
            ?>
            </div>
        <table class="table">
            <tr>
                <th>Термин</th>
                <th>Описание</th>
            </tr>
            <?php 
                while($name = mysqli_fetch_assoc($result2)){
            ?>
                <tr>
                <td><?php echo $name['term'];?></td>
                <td><?php echo $name['explanation'];?></td>  
                </tr>
            <?php
            }
            ?>
        </table>
        
        </div>
    </body>
</html>


