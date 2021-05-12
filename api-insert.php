<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,Authorization,X-Requested-Width');
$data=json_decode(file_get_contents("php://input"),true);
$name=$data['sname'];
$age=$data['sage'];
$city=$data['scity'];
include "db-connection.php";
$sql=" INSERT INTO student (name,age,city) VALUES ('{$name}','{$age}','{$city}') ";
$result=mysqli_query($conn,$sql);
if($result){
    echo json_encode(array('message' => "Data Inserted", 'status' => true));

}else{
echo json_encode(array('message' => "Data not Inserted", 'status' => false));
}
?>