<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Login/Register</title>
    </head>
    <body>
        <div class="container text-center mt-2">
            <div class="row">
                <div class="col-12">
                    <h1>LOGIN</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="controllo_login.php">
                    <p>USERNAME<br><input type="text" name="username"/><p>
                    <p>PASSWORD<br><input type="password" name="password"/></p>
                    <p><input type="submit" value="Login"/></p>
                    </form>
                </div>
            </div>
        </div>


        <div class="container text-center mt-5">
            <div class="row">
                <div class="col-12">
                    <h1>REGISTRAZIONE</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="controllo_register.php">
                    <p>USERNAME<br><input type="text" name="username"/><p>
                    <p>PASSWORD<br><input type="password" name="password"/></p>
                    <p><input type="submit" value="Registrati"/></p>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>