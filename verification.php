
<?php

session_start();

if(isset($_POST['submit']))
{

$user=$_POST["username"];
$password=$_POST["password"];

$string = strtoupper($user);

//initialize Session
$_SESSION['login_user']= $user;

require_once 'GFirestore.php';


$Doc = new Firestore('Users');
$result = $Doc->getDocument($user);


//Uppercase Employee ID

if(password_verify($password,$result["Password"]) && strpos($user, 'EMP') !== false){
    echo "<script type = text/javascript>
    alert('Login Successfull!');
    window.location.href='MainMenu.php';
    </script>";
}
if(password_verify($password,$result["Password"]) && stripos($user, 'admin') !== false){
    echo "<script type = text/javascript>
    alert('Login Successfull!');
    window.location.href='/EmployeeDatabase/EmployeeManagerMenu.php';
    </script>";
}
else{
    echo "<script>
    alert('Failed to Login. Try Again!');
    window.location.href='/Users/SignIn.php';
    </script>";
}


}

?>
