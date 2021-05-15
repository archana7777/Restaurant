<?php
include 'db.php';
$conn->beginTransaction();
$qry = "insert into birth_party(Name,Mobile_no,City,Email,Date_event,Restaurant) values (?,?,?,?,?,?)";
$res = $conn->prepare($qry);
$data = array($_POST['name'],$_POST['mobile_no'],$_POST['city'],$_POST['e_id'],$_POST['date'],$_POST['rest']);
$success = $res->execute($data);

if($success == true)
{
$conn->commit();
$_SESSION['sm']="Registration Successful, Please LOGIN to continue";
session_write_close();
header('Location:mob_verify.php');
exit;
}
else
{
$conn->rollback();
$_SESSION['wm']="Registration Failed, Try Again";
session_write_close();
header('Location:birthparty.php');
exit;
}
?>


