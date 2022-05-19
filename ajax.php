<?php
if(isset($_GET['type']) && !empty($_GET['type'])){
   
    include ('connection.php');
    $id= $_GET['type'];
    $query= "select * from map where type = '$id'";
    $do= mysqli_query($conn,$query)or die('error'.mysqli_error($conn));
    $count= mysqli_num_rows($do);
    if($count >0){
        
        echo '<option>--اختر--</option>';
        while($row=mysqli_fetch_array($do)){
            
            echo '<option value="'.$row['id'].'"  "selected">'.$row['name'].'</option>';
        }
        
    }
   
    else {
        echo 'error1';
    }
}



else{
    
    echo 'Error';
}

?>