<?php
$con = mysqli_connect("localhost","root","","table name");
$response = array();
if ($con){
    $sql = "select * from data";
    $result =mysqli_query($con,$sql);
    if($result){
       header("content -Type: JSON");
       $i =0;
       while($row = mysqli_fetch_assoc($result)){
        $response[$i]["username"] = $row ["username"];
        $response[$i]["password"] = $row ["password"];
        $response[$i]["name"] = $row ["name"];
        $response[$i]["email"] = $row ["email"];
        $i++;
       }
       echo json_encode($response,JSON_PRETTY_PRINT);

    
    }
}
else{
    echo "Database connection failed";
}
?>