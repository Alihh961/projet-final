<?php
 
 session_start();
 
 if(isset($_POST['edit']))
 {
    include "connexion.php";

    $id=$_SESSION['id'];
    $prenom1=$_POST['prenom'];
    $nom1=$_POST['nom'];
    $email1=$_POST['email'];
    $stmt = $pdo->prepare("select * from users where id='$id'");


    $user = $stmt->fetchAll();

    $res= $user['id'];
    if($res === $id)
    {
   
       $update = "update users set fname='$prenom1',lname='$nom1',email='$email1' where id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:index.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:edit_profil.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:edit_profil.php');
    }
 }
?>