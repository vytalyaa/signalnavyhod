<!DOCTYPE html>

<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>сигнал на выход</title>
    <link rel="stylesheet" href="css/main.css">

</head>

<body>

    <div class="popup">

        <div class="close-btn" id="clsbtn">&times;</div>

        <script>
                    
            function openAuth(){

                document.querySelector(".active").classList.add("popup");
                document.querySelector(".active").classList.remove("active");
                document.querySelector(".active-bg").classList.add("black-bg");
                document.querySelector(".active-bg").classList.remove("active-bg");

            }

            clsbtn.addEventListener("click", openAuth);

        </script>

        <div class="auth">

            <p class="auth-text">вход</p>
    
            <div class="auth-element">
    
                <input type="text" id="email" placeholder="введите почту">
    
            </div>
    
            <div class="auth-element">
    
                <input type="password" id="password" placeholder="введите пароль">
    
            </div>
    
            <div class="auth-element">
    
                <input type="checkbox" id="remember-me">
                <label for="remember-me">запомнить</label>
    
            </div>
    
            <div class="auth-element">
    
                <button class="signin">войти</button>
    
            </div>

            <div class="auth-element">
    
                <button class="signup">регистрация</button>
    
            </div>
    
            <div class="auth-element">
    
                <a target="_blank" href="#" class="forgot">забыли пароль?</a>
    
            </div>
    
        </div>

    </div>

    <div class="black-bg"></div>

    <header class="head">

        <nav class="nav">

            <div class="logo">

                <a href="index_ru.html">

                    <img id="logo" src="source/exit.jpg" alt="☻">

                </a>

            </div>
                    
            <div class="buttons">

                <ul class="head-span">

                    <li id="head-span-item">

                        <a id="home-link" href="index_ru.html">главная</a>

                    </li>

                    <li id="head-span-item">

                        <a id="merch-link" href="merch_ru.html">мерч</a>

                    </li>

                    <li id="head-span-item">

                        <a id="concerts-link" href="concerts_ru.html">концерты</a>

                    </li>

                </ul>

            </div>  
                    
            <div class="login">

                <button class="login-button" id="button1">вход</button>

                <script>
                    
                    function openAuth(){

                        document.querySelector(".popup").classList.add("active");
                        document.querySelector(".popup").classList.remove("popup");
                        document.querySelector(".black-bg").classList.add("active-bg");
                        document.querySelector(".black-bg").classList.remove("black-bg");

                    }

                    button1.addEventListener("click", openAuth);

                </script>

            </div>

        </nav>

    </header>

</body>

</html>