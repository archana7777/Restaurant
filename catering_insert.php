<?php
include 'db.php';
$conn->beginTransaction();
$qry = "insert into catering(Name,Email,Date,Res_name,Contact_name,Mobile_no,City) values (?,?,?,?,?,?,?)";
$res = $conn->prepare($qry);
$data = array($_POST['nm'],$_POST['mail'],$_POST['date'],$_POST['res'],$_POST['contact'],$_POST['mob'],$_POST['city']);
$success = $res->execute($data);
if($success == true)
{
$conn->commit();
$_SESSION['sm']="Submit Successful";
session_write_close();
header('Location:mob_verify.php');
exit;
}
else
{
$conn->rollback();
$_SESSION['wm']="Registration Failed, Try Again";
session_write_close();
header('Location:corporate-event-catering.php');
exit;
}
?>


