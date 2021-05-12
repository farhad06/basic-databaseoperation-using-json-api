<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,Authorization,X-Requested-Width');
$data=json_decode(file_get_contents("php://input"),true);
$sId=$data['sid'];
include "db-connection.php";
$sql=" DELETE FROM student WHERE id = {$sId}";
$result=mysqli_query($conn,$sql);
if($result){
    echo json_encode(array('message' => "Data Deleted", 'status' => true));

}else{
echo json_encode(array('message' => "Data not Deleted", 'status' => false));
}
?>