<?php

include_once "dbconn.php";

function prepareTable()
{

    $key = 1;
    echo "<table>";
    for($row=0; $row<2; $row++) {
        echo "<tr>";
        for($col=1; $col<=5; $col++){
            $color = 'white';            
            echo "<td class='cell-". $key . " " . $color. "'  datakey='" . $key ."'>";
            echo $key;
            echo "</td>";
            $key++;
        }
        echo "</tr>";
    }
    echo "</table>";
}

function saveAction($user=0, $presskey=0)
{
    global $con;
    $query = "SELECT * FROM keymap_tb WHERE keynum=".$presskey;
    $result = $con->query($query);


    if($result && mysqli_num_rows($result)>0){
       $sql = "UPDATE keymap_tb SET userid=?, updated_at=current_timestamp() WHERE keynum=?";
     
       $stmt = $con->prepare($sql);
       $stmt->bind_param("ii",  $user, $presskey);
       $stmt->execute();    
       
    }
    else {
       $sql = "INSERT INTO keymap_tb (keynum, userid) VALUES (?, ?)";
       $stmt = $con->prepare($sql);
       $stmt->bind_param("ii", $presskey, $user);
       $stmt->execute();
    }

 
    $query = "SELECT * FROM keymap_tb";
    $result = $con->query($query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $key = $row['keynum'];
        $value = $row['userid'];
        $rows[$key] = $value;
    }
    $con->close();
    ksort($rows);
    echo json_encode($rows);
    die();
}

?>

