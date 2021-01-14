<?php

include("session.php");

$Docs = new firestore('Claims');

if(isset($_POST['submit']))
{
$claimtype=$_POST["claimtype"];
$amount=$_POST["amount"];
$reason=$_POST["reason"];
$todaydate = date("Y-m-d");
$status = "Sent for Approval";
$approveddate = null;

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
 
"ClaimID" =>$docname,    
"claimtype" =>$claimtype,
"amount"=> $amount,
"reason"=> $reason,
"todaydate"=> $todaydate,
"Status" => $status,
"approveddate"=> $approveddate,

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