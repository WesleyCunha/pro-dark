<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head><meta charset="utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Saira:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/svgInject.js"></script>
        <title>Wesley Cunha</title>
    </head>

    <body>
        <div id="inicio"></div>
        <!--=== start bg intro ===-->
        <div class="bg-intro"></div>
        <!--=== start bg home ===-->
        <div class="bg-home">
            <img src="assets/svg/bg-home-hero.svg" alt="">
        </div>
        <!--=== start pais de origem ===-->
        <div class="pais"><i class="fas fa-map-marker-alt"></i> BRASIL, SERGIPE</div>
        <!--=== start header desktop ===-->
        <header>
            <nav class="header-desktop">
                <ul class="nav-left">
                    <li><a id="inicio-links" href="#inicio">INICIO</a></li>
                    <li><a id="projetos-link" href="#projetos">TRABALHOS</a></li>
                </ul>
                <ul class="nav-center">
                    <li><a href="#">DEUS É FIEL</a></li>
                </ul>
                <ul class="nav-right">
                    <li><a id="avaliacoes-link" href="#avaliacoes">AVALIAÇÕES</a></li>
                    <li><a id="contato-link" href="#contato">CONTATO</a></li>
                </ul>
            </nav>

            <nav class="header-mobile">
                <div class="menu-hamburgue"></div>
                <span>Deus é Fiel</span>
            </nav>
            <nav class="menu-mobile">
                <ul class="menu-mobile-principal">
                    <li><a href="#inicio"><i class="fas fa-home"></i> INICIO</a></li>
                    <li><a href="#projetos"><i class="fas fa-laptop-house"></i> TRABALHOS</a></li>
                    <li><a href="#avaliacoes"><i class="fas fa-star"></i> AVALIAÇÕES</a></li>
                    <li><a href="#contato"><i class="fas fa-envelope"></i> CONTATO</a></li>
                </ul>
            </nav>
            <!--=== start header mobile ===-->
        </header>
        <!--=== start hero principal ===-->
        <section class="hero">
            <div class="hero-container">
                <div class="hero-content">
                    <h2>Óla eu sou</h2>
                    <h1>
                        <div>
                            <span class="h1-title">W</span>
                            <span class="h1-title">e</span>
                            <span class="h1-title">s</span>
                            <span class="h1-title">l</span>
                            <span class="h1-title">e</span>
                            <span class="h1-title">y</span>
                        </div>
                        <div>
                            <span class="h1-title">C</span>
                            <span class="h1-title">u</span>
                            <span class="h1-title">n</span>
                            <span class="h1-title">h</span>
                            <span class="h1-title">a</span>
                        </div>
                    </h1>
                    <span class="desens">Dev. Front-End / Back-End</span>
                    <span class="desen design-montion">Montion Design</span>
                    <p>Sou criativo trabalho com front-end e back-end já realizei varios trabalhos como desenvolvedor e irei desenvolver o seu projeto com, qualidade e muita dedicação.</p>
                    <a href="#contato" class="btn-primary">Solicite um orçamento <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="hero-img">
                    <img src="assets/svg/icon01.svg" class="icon1" alt="" onload="SVGInject(this)" />
                    <img src="assets/svg/icon02.svg" class="icon2" alt="" onload="SVGInject(this)" />
                    <img src="assets/svg/icon02.svg" class="icon3" alt="" onload="SVGInject(this)" />
                    <img src="assets/svg/hero.svg" alt="">
                </div>
            </div>
        </section>
        <!--=== start projetos ===-->
        <section class="projetos" id="projetos">
            <div class="heading ">
                <h2>QUALIDADE E DEDICAÇÃO</h2>
                <h1>ALGUNS PROJETOS <span>DESENVOLVIDOS</span></h1>
            </div>
            <div class="box-projetos">
                <div class="main">
                    <div class="box">
                        <h1>Estudo Pantera Negra</h1>
                        <div class="imagem">
                            <img src="assets/img/projeto01.jpg" alt="">
                        </div>
                        <h2>Tecnologia</h2>
                        <p>HTML5 / CSS</p>
                        <a href="#"><i class="far fa-eye"></i> Visualizar</a>
                    </div>
                </div>
                <div class="main">
                    <div class="box">
                        <h1>Portifólio Wesley Cunha</h1>
                        <div class="imagem">
                            <img src="assets/img/projeto04.jpg" alt="">
                        </div>
                        <h2>Tecnologia</h2>
                        <p>HTML5 / SCSS / JS / SVGINJECT</p>
                        <a href="#"><i class="far fa-eye"></i>Visualizar</a>
                    </div>
                </div>
                <div class="main">
                    <div class="box">
                        <h1>Estudo Interative Art</h1>
                        <div class="imagem">
                            <img src="assets/img/projeto03.jpg" alt="">
                        </div>
                        <h2>Tecnologia</h2>
                        <p>HTML5 / SCSS / JS</p>
                        <a href="#"><i class="far fa-eye"></i>Visualizar</a>
                    </div>
                </div>
                <div class="main">
                    <div class="box">
                        <h1>Estudo WG CURSOS</h1>
                        <div class="imagem">
                            <img src="assets/img/projeto05.jpg" alt="">
                        </div>
                        <h2>Tecnologia</h2>
                        <p>HTML5 / CSS / PHP / MYSQL</p>
                        <a href="#"><i class="far fa-eye"></i>Visualizar</a>
                    </div>
                </div>
                <div class="main">
                    <div class="box">
                        <h1>Estudo Hamburgueria</h1>
                        <div class="imagem">
                            <img src="assets/img/projeto06.jpg" alt="">
                        </div>
                        <h2>Tecnologia</h2>
                        <p>HTML5 / CSS / PHP / MYSQL</p>
                        <a href="#"><i class="far fa-eye"></i>Visualizar</a>
                    </div>
                </div>
            </div>
        </section>
        <!--=== start avaliacoes ===-->
        <section class="avaliacoes" id="avaliacoes">
            <div class="heading ">
                <h2>Avaliação do cliente</h2>
                <h1>O QUE ELES <span>DISSERAM</span></h1>
            </div>
            <div class="box-avaliacoes">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="user">
                                <img src="assets/img/pic-3.png" alt="">
                                <div class="content">
                                    <h1>Wesley Cunha</h1>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat cumque harum necessitatibus, soluta similique quasi non blanditiis </p>
                        </div>
                        <div class="swiper-slide">
                            <div class="user">
                                <img src="assets/img/pic-3.png" alt="">
                                <div class="content">
                                    <h1>Wesley Cunha</h1>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat cumque harum necessitatibus, soluta similique quasi non blanditiis </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=== start perfil ===-->
        <section class="perfil" id="Perfil">
            <div class="heading ">
                <h2>MINHA HISTÓRIA</h2>
                <h1>UM POUCO MAIS DE <span>MIM</span></h1>
            </div>
            <div class="box-perfil">
                <div class="perfil-content">
                    <h2>QUEM É?</h2>
                    <h1>Wesley Cunha</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat iure porro ipsa rerum vitae! In aliquam commodi quidem quisquam. Eveniet modi voluptas quibusdam soluta repellendus placeat porro, beatae nulla excepturi.</p>
                    <p class="habilidades-title">HABILIDADES</p>
                    <div class="habilidades">
                        <ul class="listra-habilidades-front">
                            <li>html5</li>
                            <li>css3</li>
                            <li>sass</li>
                        </ul>
                        <ul class="listra-habilidades-back">
                            <li>javascript</li>
                            <li>php</li>
                            <li>mysql</li>
                        </ul>
                    </div>
                </div>
                <div class="perfil-image1">
                    <img src="assets/img/perfil.png" alt="">

                </div>
                <div class="perfil-image2">
                    <img src="assets/img/perfil2.png" alt="">
                    <img src="assets/img/perfil3.png" alt="">
                </div>
            </div>
        </section>
        <!--=== start formulario contato ===-->
        <section class="formulario-contato" id="contato">
            <div class="heading ">
                <h2>ESPERO VOCÊ</h2>
                <h1>SOLICITE UM <span>ORÇAMENTO</span></h1>
                <?php
                if(!empty($_SESSION["errorForm"])):
                    echo "<span class=\"error_email\"><i class=\"fas fa-times\"></i> ".$_SESSION["errorForm"]."</span>";
                    session_destroy();
                endif;
                if(!empty($_SESSION["sucessoForm"])):
                    echo "<span class=\"sucesso_email\"> <i class=\"fas fa-thumbs-up\"></i>".$_SESSION["sucessoForm"]."</span>";
                    session_destroy();
                endif;
                ?>
            </div>
            <div class="formulario-box">
                <form action="phpmailer/enviarMail.php" method="POST">
                    <h1>Contato</h1>
                    <br />
                    <span><i class="fas fa-user"></i> Nome:</span>
                    <input type="text" name="nome" required placeholder="Seu Nome">
                    <span><i class="fas fa-envelope"></i> E-mail:</span>
                    <input type="email" name="email" required placeholder="Seu E-mail">
                    <span><i class="fas fa-comment-dots"></i> Sua mensagem:</span>
                    <textarea cols="30" name="menssagem" required rows="10" placeholder="Sua Mensagem"></textarea>
                    <input type="submit" value="ENVIAR">
                </form>
                <div class="box-content">

                    <h1><i class="fas fa-envelope"></i> contato@wesleycsv.com.br</h1>
                    <h2><i class="fab fa-youtube"></i> <a href="https://www.youtube.com/channel/UC4QPR37iflk7vnPO_H7a9tg?sub_confirmation=1" target="_blank">wesley cunha</a></h2>
                    <h3><i class="fab fa-instagram-square"></i> <a target="_blank" href="https://www.instagram.com/wesleycsv/">wesleycsv</a></h3>
                </div>
            </div>
        </section>
        <!--=== start footer ===-->
        <footer>
            <div class="box-img">
                <img src="assets/svg/hero.svg" alt="">
            </div>
            <h6>Desenvolvedor Web: <span>Wesley Cunha </span>| All Rights Reserved!</h6>
        </footer>
        <!--=== end footer ===-->
        <!--=== start javascript e app ===-->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>

    </html>