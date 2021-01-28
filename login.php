<?php 
    session_start();
    require_once 'assets/app_php/connection.php';

    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $db = dbConnection();    
        $check = $db->prepare('SELECT pseudo, email, password FROM customer WHERE email = ?');
        $check->execute([$email]);
        // $check->execute(array($email));
        $data = $check->fetch();
        
        //$row = $check->rowCount();
       // var_dump($row);die;
        if(!empty($data))
        {
                
                //echo($data['password']);die;
                
                //if(password_verify($password,$data['password']))
                if($password ==$data['password'])
                {
                    
                    $_SESSION['customer'] = $data['email'];
                    header('Location: card.php');
                    die();
                }
                else{ 
                    $pwderror = 'password erronée';
                    //header('Location: index.php?login_err=password'); die(); }
                }
            }
            
            else{ 
                $mailerror = 'mail erronée';
                //header('Location: index.php?login_err=email'); die(); }
            }
        
        
        
        
    }
    
    include "login.phtml";