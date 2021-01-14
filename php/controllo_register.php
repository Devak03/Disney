<?php


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {


        if(isset($_POST["username"]) && isset($_POST["password"]))
        {
            $username_inserito = $_POST["username"];
            $password_inserito = $_POST["password"];
            $check = true;

            $file='dati.csv';
            $csv= array_map('str_getcsv', file($file));
            array_walk($csv,function(&$a)use ($csv){
                $a=array_combine($csv[0],$a);
            });
            array_shift($csv);

            for ($i=0;$i<count($csv);$i++)
            {
                $username = $csv[$i]["username"];
                $password = $csv[$i]["username"];

                if($username_inserito==$username && $password_inserito==$password)
                {
                    echo "Utente già registrato";
                    $check = false;
                }

                if($username_inserito==$username)
                {
                    echo "Questo username esiste già";
                    $check = false;
                }
            }

            if($check==true)
            {
                $handler = fopen("dati.csv", 'a+');
                fputcsv($handler, array($username_inserito,$password_inserito));
                fclose($handler);
                echo "Registrazione avvenuta con successo ora accedi al portale da <a href='login_register.php'>qui</a> ";
            }

        }else{
            echo "I campi sono vuoti, riprovare";
        }
    }else
    {
        echo "Errore server";
    }

?>
