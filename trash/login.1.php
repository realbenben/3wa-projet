<?php 
    session_start();
    require_once 'assets/php/connection.php';

    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $db = dbConnection();    
        $check = $db->prepare('SELECT pseudo, email, password FROM customer WHERE email = ?');
        $check->execute([$email]);

        $data = $check->fetch();
        
        if(!empty($data))
        {
                
                if($password ==$data['password'])
                {
                    
                    $_SESSION['customer'] = $data['email'];
                    header('Location: takeAway.phtml');
                    die();
                }
                else{ 
                    $pwderror = 'password erronée';

                }
            }
            
            else{ 
                $mailerror = 'mail erronée';

            }
        
        
        
        
    }
    
    include "login.phtml";