<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="../Css/CssLR.css"/>

        <!------ espaco para fontes ------>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!---espaco para icones-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="icon" href="../Imagens/Logo-normal.png">
        <title>Entrar/Registrar</title>
    </head>
    <link rel="icon" href="../Imagens/Logo-normal.png">
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Entrar</button>
                    <button type="button" class="toggle-btn" onclick="register()">Registrar</button>
                </div>
                <form id="login" class="input-group" method="POST" action="../php/incluir/login.php">
                    <input type="text" class="input-field" name="userL" placeholder="Usuario" required >
                    <input type="password" class="input-field" name="passwordL" placeholder="Senha" required >
                    <button type="submit" class="submit-btn">Entrar</button>
                </form> 
                <form id="register" class="input-group" method="POST" action="../php/incluir/registrar.php">
                    <input type="text" class="input-field" placeholder="Usuário" name="userR" required>
                    <input type="email" class="input-field" placeholder="Email" name="emailR" required>
                    <input type="password" class="input-field" placeholder="Coloque a senha" name="passwordR" required>
                    <button type="submit" class="submit-btn">Registrar</button>
                </form>
            </div>

        </div>
        <script>
            var x= document.getElementById("login");
            var y= document.getElementById("register");
            var z= document.getElementById("btn");
            function register(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";
            }
            function login(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0";
            } 
            </script>


    </body>
</html>