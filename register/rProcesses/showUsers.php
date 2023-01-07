<?php

    include '../helpers/credentials.php';

    $sql = "SELECT * FROM college";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        ?>
                <trow>
                    <tr>
                        <td><?=$row['firstname']?></td>
                        <td><?=$row['lastname']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['numbers']?></td>
                        <td><?=$row['gender']?></td>
                        <td>
                        <? echo $row['street1'] . " ," . $row['street2'] . ", " . $row['city'] . ", " . $row['states'] . "," . $row['zipcode'] ;?>                        
                        </td>
                        <td>
                            <?php
                             echo "<img src='../../images/uploadImages/".$row['pic']."'>";
                            ?>
                        </td>
                        <td><?=$row['comment']?></td>
                    </tr>
                </trow>
        <?
        print_r($_POST);

        }
      } else {
        echo "0 results";
      }
      
      mysqli_close($conn);
?>