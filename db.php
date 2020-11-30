<?php 
  include "jsonconnect.php";
?>
<?php
    $myArray = array();
    $result = mq("select * from student");
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
    }
    echo json_encode($myArray);
?>
