<?php
$getFile = file_get_contents("list.json");
$list = json_decode($getFile, true);

if(!empty($_POST['task'])){
    $newTask = [
        "text"=> $_POST['task'],
        "done"=> false
    ];
   array_push($list, $newTask);
   file_put_contents("list.json", json_encode($list));
}
if(isset($_POST["taskRemoved"])){
    $removeTask=$_POST["taskRemoved"];
array_splice($list, $removeTask, 1);
file_put_contents("list.json", json_encode($list));

}


header('Content-Type: application/json');
echo json_encode($list);
?>