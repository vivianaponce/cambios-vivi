<?php session_start();?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="moviely favicon.png" type="image/ico">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" href="css\font-awesome-4.7.0/css/font-awesome.min.css">
        <title>Mi Perfil</title>
    </head>

    <body>
        <div class="container">
            <?php
                include("conexion.php");
                include("opciones.php");

                if(isset($_SESSION['id_usuario']))
                {
                    $id_usuario = $_SESSION['id_usuario'];
                    
                    $q = "SELECT * from usuario where id_usuario = '$id_usuario' and administrador =1";
                    $resultado=mysqli_num_rows(mysqli_query($conexion,$q));
                    if($resultado!=0){echo $opciones_admin; $_SESSION['administrador'] = 1;}
                    else{
                        echo $opciones;
                        $_SESSION['administrador'] = 0;
                    } 
                }
                else {
                    echo $opciones_sin_sesion;
                    $_SESSION['administrador'] = 0;
                }

                echo '
                <main class="main-profile">
                    <section class="container profile-container profile">
                        <div class="profile-avatar">
                            <img class="profile-img" src="/placeholder.svg" alt="User Avatar"/>
                        </div>
                        <div class="profile-data">
                            <h1 class="profile-name">John Doe</h1>
                            <p class="profile-ussername">@johndoe</p>
                        </div>
                        <div class="profile-button">
                            <button class="button-logout">Logout</button>
                        <div/>
                    </section>
                    <section class="container profile-container aboutme">
                        <h2 class="tittle">About Me</h2>
                        <p class="profile-description">
                            I\'m a passionate movie enthusiast who loves exploring new films and sharing my thoughts with others. In my
                            free time, you can find me curating my collection of favorites, discovering hidden gems, and discussing the
                            latest releases with my friends.
                        </p>
                    </section>
                    <section class="container profile-container friends">
                        <h2 class="tittle">Friends</h2>
                        <div class="container friends-container">
                            <article class="friends-data">
                                <div class="friends-avatar">
                                    <img class="friends-img" src="/placeholder.svg" alt="Friend 1"/>
                                </div>
                                <p class="friends-name">Jane Doe</p>
                            </article>
                            <article class="friends-data">
                                <div class="friends-avatar">
                                    <img class="friends-img" src="/placeholder.svg" alt="Friend 2"/>
                                </div>
                                <p class="friends-name">Bob Smith</p>
                            </article>
                            <article class="friends-data">
                                <div class="friends-avatar">
                                    <img class="friends-img" src="/placeholder.svg" alt="Friend 3"/>
                                </div>
                                <p class="friends-name">Emily Johnson</p>
                            </article>
                            <article class="friends-data">
                                <div class="friends-avatar">
                                    <img class="friends-img" src="/placeholder.svg" alt="Friend 4"/>
                                </div>
                                <p class="friends-name">Michael Brown</p>
                            </article>
                        </div>
                    </section>
                    <section class="container profile-container favorite">
                        <h2 class="tittle">Favorites</h2>
                        <div class="favorite-container">
                            <article class="favorite-data">
                                <img class="-img" src="/placeholder.svg" alt="Movie 1"/>
                                <div class="favorite-name">
                                    <h3 class="favorite-tittle">The Shawshank Redemption</h3>
                                </div>
                            </article>
                            <article class="favorite-data">
                                <img class="favorite-img" src="/placeholder.svg" alt="Movie 2"/>
                                <div class="favorite-name">
                                    <h3 class="favorite-tittle">Inception</h3>
                                </div>
                            </article>
                            <article class="favorite-data">
                                <img class="favorite-img" src="/placeholder.svg" alt="Movie 3"/>
                                <div class="favorite-name">
                                    <h3 class="favorite-tittle">The Dark Knight</h3>
                                </div>
                            </article>
                            <article class="favorite-data">
                                <img class="favorite-img" src="/placeholder.svg" alt="Movie 4"/>
                                <div class="favorite-name">
                                    <h3 class="favorite-tittle">Forrest Gump</h3>
                                </div>
                            </article>
                        </div>
                    </section>
                    <section class="container profile-container generos">
                        <h2 class="tittle">Favorite Movie Genres</h2>
                        <div class="generos-container">
                            <span class="generos-name">Drama</span>
                            <span class="generos-name">Action</span>
                            <span class="generos-name">Sci-Fi</span>
                            <span class="generos-name">Comedy</span>
                        </div>
                    </section>
                    <section class="container profile-container later">
                        <h2 class="tittle">Watch Later</h2>
                        <div class="later-container">
                            <article class="later-data">
                                <img class="later-img" src="/placeholder.svg" alt="Movie 5"/>
                                <div class="later-name">
                                    <h3 class="later-tittle">The Godfather</h3>
                                </div>
                            </article>
                            <article class="later-data">
                                <img class="later-img" src="/placeholder.svg" alt="Movie 6"/>
                                <div class="later-name">
                                    <h3 class="later-tittle">Pulp Fiction</h3>
                                </div>
                            </article>
                            <article class="later-data">
                                <img class="later-img" src="/placeholder.svg" alt="Movie 7"/>
                                <div class="later-name">
                                    <h3 class="later-tittle">The Lord of the Rings</h3>
                                </div>
                            </article>
                            <article class="later-data">
                                <img class="later-img" src="/placeholder.svg" alt="Movie 8"/>
                                <div class="later-name">
                                    <h3 class="later-tittle">The Silence of the Lambs</h3>
                                </div>
                            </article>
                        </div>
                    </section>
                    <section class="container profile-container continue">
                        <h2 class="tittle">Continue Watching</h2>
                        <div class="continue-container">
                            <article class="continue-data">
                                <img class="continue-img" src="/placeholder.svg" alt="Movie 9"/>
                                <div class="continue-name">
                                    <h3 class="continue-tittle">The Shining</h3>
                                </div>
                            </article>
                            <article class="continue-data">
                                <img class="continue-img" src="/placeholder.svg" alt="Movie 10"/>
                                <div class="continue-name">
                                    <h3 class="continue-tittle">Interstellar</h3>
                                </div>
                            </article>
                            <article class="continue-data">
                                <img class="continue-img" src="/placeholder.svg" alt="Movie 11"/>
                                <div class="continue-name">
                                    <h3 class="continue-tittle">The Departed</h3>
                                </div>
                            </article>
                            <article class="continue-data">
                                <img class="continue-img" src="/placeholder.svg" alt="Movie 12"/>
                                <div class="continue-name">
                                    <h3 class="continue-tittle">The Prestige</h3>
                                </div>
                            </article>
                        </div>
                    </section>
                    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
                </main>
                ';
            ?>
            <script src="script/jquery.js"></script>
            <script src="script/pop-ups.js"></script>
            <script src="script/botonTop.js"></script>
        </div>      
    </body>
    <footer>
        <p>&copy; CineFlow 2024</p>
    </footer>
</html>