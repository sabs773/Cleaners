<?php 


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include('GFirestore.php');
$admin = new firestore('Users');
$cleaner = new firestore('EmployeeRegistar');
$duty = new firestore('DutyRoaster');
$salary = new firestore('Salary');
$claims = new firestore('Claims');
$leaves = new firestore('Leave');

session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];


$adminresults = $admin->getDocument($user_check);
$cleanerresults = $cleaner->getDocument($user_check);
$getsalary = $salary->getDocument($user_check);
$dutylocation[] = $duty->getAllDocuments();
$totalclaims[] = $claims->getAllDocuments();
$totalleave[] = $leaves->getAllDocuments();

//admin
$usernameadmin = $adminresults["Username"];

//CleanerDetails
$usernamecleaner = $cleanerresults["Name"];
$position = $cleanerresults["Position"];
$NRIC = $cleanerresults["NRIC"];
$country = $cleanerresults["Nationality"];
$gender = $cleanerresults["Gender"];
$bank = $cleanerresults["Bank"];
$bankaccount = $cleanerresults["BankNum"];
$BasicSalary = $cleanerresults["BasicSalary"];
$assignedplace[] = null;


//Salary Details
$nett = $getsalary["NettSalary"];
$gross = $getsalary["GrossSalary"];
$claim = $getsalary["claim"];
$overWeekdays = $getsalary["overWeekdays"];
$bonus = $getsalary["bonus"];
$totalTaxEmployee = $getsalary["totalTaxEmployee"];
$Mepf = $getsalary["Mepf"];
$Eepf = $getsalary["Eepf"];
$Totalepf = $getsalary["Totalepf"];
$MEIS = $getsalary["MEIS"];
$EEIS = $getsalary["EEIS"];
$Totaleis = $getsalary["Totaleis"];
$MSocso = $getsalary["MSocso"];
$ESocso = $getsalary["ESocso"];
$TotalSocso = $getsalary["TotalSocso"];
$totalTaxEmployer = $getsalary["totalTaxEmployer"];
$totalTaxEmployee = $getsalary["totalTaxEmployee"];
$Totaltax = $getsalary["Totaltax"];
$totalAllowance = $getsalary["totalAllowance"];


//Get Cleaning Details

$i=0;
foreach($dutylocation[0] as $row){
 $i++;

 if (in_array($usernamecleaner,$row["Cleaner"])) { 
    
    $assignedplace[] = $row["LocationName"] ;
 } 
 else{
    $assignedplace[] = null;
  }


}



?>