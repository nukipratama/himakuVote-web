<?php 
require_once('config.php');
session_start();

    if(isset($_POST['Login']))
    {
       if(empty($_POST['Uname']) || empty($_POST['NIM']))
       {
            header("location:../index.php?Empty");
       }
           	else
    	{

            $query="select * from users where nama like '".$_POST['Uname']."%' and nim='".$_POST['NIM']."'";
           
            $result=mysqli_query($con,$query);
                    
            	if(mysqli_fetch_assoc($result))
            {
                if($_POST['Uname'] == 'admin' && $_POST['NIM'] == 2018)
                {
                    $_SESSION['User']=$_POST['Uname'];
                    
                    header("location:../../admin/admin.php");
                }   
                else
                {
                    $_SESSION['User']=$_POST['Uname'];
                    $_SESSION['Nim']=$_POST['NIM'];
                    header("location:../../main.php");
                }
            }
            else
            {
                header("location:../../index.php?GAGAL");

            }

        }
    
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>