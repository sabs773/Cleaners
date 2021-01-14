<?php

if(isset($_POST['submit']))
{
$user=$_POST["username"];
$password=$_POST["password"];


require_once 'GFirestore.php';

$Doc = new Firestore('Users');

$string = strtoupper($user);


if (strpos($string, 'EMP') !== false){


$Doc->createDocument($string,


[
    "Username" =>strtoupper($user),
    "Password"=>password_hash($password, PASSWORD_DEFAULT),

]);

}
else{
    echo "<script>
    alert('Failed to Register.Please Use your Employee ID');
    window.location.href='/Users/signup.php';
    </script>";
}


if($Doc){
    echo "<script>
    alert('Register Successfull! Please Login');
    window.location.href='SignIn.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Register. Try Again or contact the administrator!');
    window.location.href='/Users/signup.php';
    </script>";
}

}

?>