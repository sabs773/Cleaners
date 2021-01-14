<?php

include("session.php");

$Docs = new firestore('Leave');

if(isset($_POST['submit']))
{
$leavetype=$_POST["leavetype"];
$sdate=$_POST["StartDate"];
$edate=$_POST["EndDate"];
$note=$_POST["note"];
$status = "Sent for Approval";
$Dateapplied = date("Y-m-d");

function generatePIN($digits = 2){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
 
$pin = generatePIN();

$docname = $user_check."_".$pin;

$Docs ->createDocument($docname,

[
"LeaveID" =>$docname,
"LeaveType" =>$leavetype,
"Dateapplied" =>$Dateapplied,
"StartDate"=> $sdate,
"EndDate"=> $edate,
"Reason"=> $note,
"Status" => $status,

]);

if($Docs){
    echo "<script>
    alert('Save Successfull!');
    window.location.href='leave.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Save. Try Again!');
    window.location.href='leave.php';
    </script>";
}

}

?>