<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
$data=json_decode(file_get_contents("php://input"),true);
$studentId=$data['sid'];
include "db-connection.php";
$sql="SELECT * FROM student WHERE id = {$studentId} ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);

}else{
echo json_encode(array('message' => "No record Found", 'status' => false));
}
?>