<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,Authorization,X-Requested-Width');
$data=json_decode(file_get_contents("php://input"),true);
$sId=$data['sid'];
$name=$data['sname'];
$age=$data['sage'];
$city=$data['scity'];
include "db-connection.php";
$sql=" UPDATE student SET name ='{$name}', age='{$age}',city='{$city}' WHERE id={$sId} ";
$result=mysqli_query($conn,$sql);
if($result){
    echo json_encode(array('message' => "Data Updated", 'status' => true));

}else{
echo json_encode(array('message' => "Data not Updated", 'status' => false));
}
?>