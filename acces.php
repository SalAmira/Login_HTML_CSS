<?php
session_start();
include('connectbase.php');



if (isset($_POST['username'])&& isset($_POST['password'])) {

    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
     

    if(empty($username)){
        header('Location:index.php?error=Email est vide');

    }
    elseif(empty($password)){
        header('Location:index.php?error= Mot de passe est vide');  
    }
    else{
          //$password = md5($password);
          $result=  "SELECT * FROM login WHERE username ='{$username}'
           AND password='{$password}'";
           $sql=mysqli_query($conn,$result);
           
           $row = mysqli_fetch_assoc($sql);
           if ($row['password'] === $password && $row['username']=== $username){
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];

               if ($row['ID'] == 1) {
                   header('Location:view.php');
               }
                 
                 elseif ($row['ID'] == 2) {
               
                header('Location:listprojetcontrat.php');
               }
               elseif($row['ID'] == 3){
                header('Location:contrats.php');
               }
               else {
                header('Location:index.php?error=Incorect email or password');
              }
           
          }
          else {
            header('Location:index.php?error=Incorect email or password');
          }
           
    }
        
    
}else{
    header('Location:index.php');
}

?>