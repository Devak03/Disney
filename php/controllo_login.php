<?php


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
      
        if(isset($_POST["username"]) && isset($_POST["password"]))
        {
            $username_inserito = $_POST["username"];
            $password_inserito = $_POST["password"];
            $check = false;
            $file='dati.csv';
            $csv= array_map('str_getcsv', file($file));
            array_walk($csv,function(&$a)use ($csv){
                $a=array_combine($csv[0],$a);
            });
            array_shift($csv);

            for ($i=0;$i<count($csv);$i++)
            {
                $username = $csv[$i]["username"];
                $password = $csv[$i]["password"];

                if($username_inserito==$username && $password_inserito==$password)
                {
                    $check =true;
                }

            }

            if($check==true)
            {
                echo 'Bentornato <strong>'. $username_inserito .'</strong> ora puoi visualizzare i contenuti cliccando <a href='.'http://localhost/disney/php/new_index.php?username='.$username_inserito.''.'>qui</a>';
            }else{

                echo "Username o password errati, per riporvare ad accedere clicca <a href='login_register.php'>qui</a>";
            }

        }else{
            echo "I campi sono vuoti, riprovare";
        }

    }else
    {
        echo "Errore server";
    }

?>
