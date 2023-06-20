<?php

    $get = $_GET['get'];

    if($get == 1)
    {

        echo '<script src="script/login.js" defer></script>';

    }

?>

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

            <form action="auth.php" method="post">

                <p class="auth-text">вход</p>
    
                <div class="auth-element">
        
                    <input name="userLog" type="text" id="email" placeholder="введите почту">
        
                </div>
        
                <div class="auth-element">
        
                    <input name="userPass" type="password" id="password" placeholder="введите пароль">
        
                </div>
        
                <div class="auth-element">
        
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">запомнить</label>
        
                </div>
        
                <div class="auth-element">
        
                    <input class="signin" type="submit" value="войти">
        
                </div>
    
                <div class="auth-element">
        
                    <button class="signup">регистрация</button>
        
                </div>
        
                <div class="auth-element">
        
                    <a target="_blank" href="#" class="forgot">забыли пароль?</a>
        
                </div>

            </form>
    
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

    <div class="container">

        <section id="slider_bl">

            <div class="slider-container">

                <div class="slider">

                    <div class="slides">

                        <div class="slide">

                            <a target="_blank" href="music.html"><img class="slide__text" src="source/фото1.png" alt=""></a>

                        </div>

                        <div class="slide">

                            <a target="_blank" href="https://vk.com/event221125688"><img class="slide__text" src="source/фото2.png" alt=""></a>

                        </div>

                        <div class="slide">

                            <a target="_blank" href="https://vk.com/album-216033539_292844827"><img class="slide__text" src="source/фото3.png" alt=""></a>

                        </div>

                        <div class="slide">

                            <a target="_blank" href=""><img class="slide__text" src="source/фото4.png" alt=""></a>

                        </div>
                        
                    </div>

                </div>
                
              </div>

        </section>

        <section class="music_section">

            <div class="music-container">

                <div class="music">

                    <img src="source/обложка.jpeg" width="450px" height="450px" alt="">

                    <ul class="music-text">

                        <li class="music-text-item">

                            <p class="title">я живу в россии</p>

                        </li>

                        <li class="music-text-item2"></li>

                            <a href="" class="artist">сигнал на выход</a>

                        </li>

                        <li class="music-text-item2">

                            <p class="music-description">
                                
                                у нас вышел первый сингл!<br>
                                слушайте на всех площадках

                            </p>

                        </li>

                    </ul>

                    <div class="listen-button">

                        <a target="_blank" href="music.html" class="listen">слушать</a>

                    </div>

                </div>

            </div>

        </section>

    </div>

    <footer class="foot">

        <div class="down">

            <div class="footer-icon-block">

                <ul class="footer-icon-list">

                    <li class="footer-icon">

                        <a target="_blank" href="https://vk.com/exitsignal" class="vk"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="50px" height="50px" fill-rule="nonzero"><g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M19,3h-14c-1.105,0 -2,0.895 -2,2v14c0,1.105 0.895,2 2,2h14c1.105,0 2,-0.895 2,-2v-14c0,-1.105 -0.895,-2 -2,-2zM17.907,15.684l-1.735,0.024c0,0 -0.374,0.073 -0.864,-0.265c-0.649,-0.446 -1.261,-1.606 -1.738,-1.455c-0.484,0.154 -0.469,1.198 -0.469,1.198c0,0 0.004,0.184 -0.107,0.304c-0.12,0.129 -0.355,0.116 -0.355,0.116h-0.777c0,0 -1.714,0.142 -3.225,-1.433c-1.646,-1.717 -3.1,-5.106 -3.1,-5.106c0,0 -0.085,-0.214 0.006,-0.323c0.103,-0.121 0.381,-0.124 0.381,-0.124l1.857,-0.009c0,0 0.175,0.031 0.301,0.123c0.103,0.076 0.162,0.219 0.162,0.219c0,0 0.3,0.761 0.698,1.45c0.776,1.343 1.137,1.637 1.4,1.493c0.384,-0.21 0.269,-1.898 0.269,-1.898c0,0 0.007,-0.613 -0.193,-0.886c-0.156,-0.213 -0.449,-0.276 -0.578,-0.292c-0.105,-0.014 0.066,-0.257 0.289,-0.367c0.334,-0.163 0.925,-0.173 1.622,-0.166c0.543,0.006 0.7,0.039 0.912,0.091c0.641,0.155 0.423,0.753 0.423,2.188c0,0.46 -0.083,1.106 0.248,1.319c0.143,0.092 0.491,0.014 1.36,-1.466c0.413,-0.702 0.722,-1.527 0.722,-1.527c0,0 0.068,-0.147 0.173,-0.21c0.108,-0.065 0.253,-0.045 0.253,-0.045l1.955,-0.012c0,0 0.587,-0.071 0.683,0.196c0.1,0.279 -0.219,0.93 -1.018,1.995c-1.311,1.75 -1.457,1.587 -0.368,2.599c1.04,0.967 1.255,1.437 1.291,1.496c0.43,0.716 -0.478,0.773 -0.478,0.773z"></path></g></g></svg></a>

                    </li>

                    <li class="footer-icon">

                        <a target="_blank" href="https://www.youtube.com/@signalnavyhod" class="yt">
                            
                            <svg width="50px" height="50px" viewBox="0 -3 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">

                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>                            
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>                           
                                <g id="SVGRepo_iconCarrier"> <title>youtube [#ffffff]</title> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill-rule="nonzero"> <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -7442.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M251.988432,7291.58588 L251.988432,7285.97425 C253.980638,7286.91168 255.523602,7287.8172 257.348463,7288.79353 C255.843351,7289.62824 253.980638,7290.56468 251.988432,7291.58588 M263.090998,7283.18289 C262.747343,7282.73013 262.161634,7282.37809 261.538073,7282.26141 C259.705243,7281.91336 248.270974,7281.91237 246.439141,7282.26141 C245.939097,7282.35515 245.493839,7282.58153 245.111335,7282.93357 C243.49964,7284.42947 244.004664,7292.45151 244.393145,7293.75096 C244.556505,7294.31342 244.767679,7294.71931 245.033639,7294.98558 C245.376298,7295.33761 245.845463,7295.57995 246.384355,7295.68865 C247.893451,7296.0008 255.668037,7296.17532 261.506198,7295.73552 C262.044094,7295.64178 262.520231,7295.39147 262.895762,7295.02447 C264.385932,7293.53455 264.28433,7285.06174 263.090998,7283.18289" id="youtube-[#ffffff]"> </path> </g> </g> </g> </g>
                                
                            </svg>
                    
                        </a>

                    </li>

                    <li class="footer-icon">

                        <a target="_blank" href="https://t.me/theexitishere6" class="tg">
                            
                            <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>                            
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>                            
                                <g id="SVGRepo_iconCarrier" fill="#FFF"><path d="M12 4C10.4178 4 8.87103 4.46919 7.55544 5.34824C6.23985 6.22729 5.21447 7.47672 4.60897 8.93853C4.00347 10.4003 3.84504 12.0089 4.15372 13.5607C4.4624 15.1126 5.22433 16.538 6.34315 17.6569C7.46197 18.7757 8.88743 19.5376 10.4393 19.8463C11.9911 20.155 13.5997 19.9965 15.0615 19.391C16.5233 18.7855 17.7727 17.7602 18.6518 16.4446C19.5308 15.129 20 13.5823 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM15.93 9.48L14.62 15.67C14.52 16.11 14.26 16.21 13.89 16.01L11.89 14.53L10.89 15.46C10.8429 15.5215 10.7824 15.5715 10.7131 15.6062C10.6438 15.6408 10.5675 15.6592 10.49 15.66L10.63 13.66L14.33 10.31C14.5 10.17 14.33 10.09 14.09 10.23L9.55 13.08L7.55 12.46C7.12 12.33 7.11 12.03 7.64 11.83L15.35 8.83C15.73 8.72 16.05 8.94 15.93 9.48Z"/> </g>                            
                            
                            </svg>

                        </a>

                    </li>

                </ul>

            </div>

            <div class="footer-text-block">

                <ul class="footer-text-list">

                    <li class="footer-text">

                        <a href="index_en.html" class="language">en</a>

                    </li>

                    <li class="footer-text">

                        <a href="" class="support">поддержка</a>

                    </li>

                    <li>

                        <p class="exitsignal">&copy; 2023 сигнал на выход</p>

                    </li>

                </ul>

            </div>

        </div>

    </footer>

    <script src="script/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Slider(document.querySelector('.slider-container'));
        });
    </script>

</body>

</html>