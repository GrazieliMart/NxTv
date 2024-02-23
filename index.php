 <?php
// index.php
include './client/variables.php';

?>

<!--Project Done - G.M-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NxTv - VODS e Canais de Tv</title>
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />
   
   
    <link rel="icon" type="image/png" href="img/logo.png" sizes="32x32"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg>
    <!-- favicon -->
    <link rel="icon" href="/client/assets/logo/favicon.ico">
    <!-- end favicon -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', '<?php echo $EmpresaGtmCode ?>');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $EmpresaGtmCode ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->




    <div class="navbar">
        <div class="content">
            <img src="img/L.webp" alt="" id="mobile">
            <img src="img/logo1.webp" alt="Imagem no canto esquerdo" id="web">
            <a style="--clr: #7808d0" class="button" href="cadastro.php">
                <span class="button__icon-wrapper">
                    <svg width="10" class="button__icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15">
                        <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                    </svg>

                    <svg class="button__icon-svg  button__icon-svg--copy" xmlns="http://www.w3.org/2000/svg" width="10" fill="none" viewBox="0 0 14 15">
                        <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                    </svg>
                </span>
                Solicitar Demo
            </a>
        </div>
    </div>

    <div class="video-container" id="top">
        <img src="img/img.webp" alt="Imagem de Fundo" class="background-image">
        <div class="video-content" style="width:100%;" id="top2">
            <div class="image-container-top">
                <img src="img/tv.webp" alt="">
            </div>
            <div class="text-top">
                <h1>Você é <span>Provedor de Internet</span>?</h1>
                <h1>Ofereça Canais de TV e VODs para toda a sua <span>Base de Clientes</span></h1>



                <h2>É <span>Grátis</span> para toda a sua base!</h2>

                <div>
                    <a style="--clr: #7808d0" class="button" href="cadastro.php" id="btn-mobile">
                        <span class="button__icon-wrapper">
                            <svg width="10" class="button__icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15">
                                <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                            </svg>

                            <svg class="button__icon-svg  button__icon-svg--copy" xmlns="http://www.w3.org/2000/svg" width="10" fill="none" viewBox="0 0 14 15">
                                <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                            </svg>
                        </span>
                        Solicitar Demo
                    </a>
                    <a href="cadastro.php">
                        <button class="btn-cad">Quero Contratar</button>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="image-container" id="boxes1">
        <div class="image-box" style="background-color: #131960">
            <p>Aumente o <b>faturamento</b> e ganhe mais <b>mercado</b></p>
        </div>
        <div class="image-box" style="background-color: #f4a10c;">
            <p>Utilize como estratégia de <b>upgrade de plano</b> e <b>retenção</b></p>
        </div>
        <div class="image-box" style="background-color: #131960">
            <p>Setup <b>gratuito</b> e <b>integração</b> com os principais ERPS</p>
        </div>
    </div>


    </div>
    </div>


    <div class="video-container" id="mid">
        <img src="img/aa.webp" alt="Imagem de Fundo" class="background-image" id="back-img">
        <div class="video-content" id="top1">
            <div class="image-container-top">
                <img src="img/cel.png" alt="" id="sec-img">
            </div>
            <div class="text-top1">
                <img src="img/faixa.png" alt="" id="faixa">
                <div class="mob">
                    <h1>A NxTV oferece também planos pagos
                        com <span>Conteúdo Premium</span></h1>
                </div>
                <p>Conheça alguns dos estúdios:</p>
                <div class="container2">
                    <div class="box2"><img src="img/nx (1).webp" alt=""></div>
                    <div class="box2"><img src="img/nx (8).webp" alt=""></div>
                    <div class="box2"><img src="img/nx (7).webp" alt=""></div>
                    <div class="box2"><img src="img/9.webp" alt=""></div>
                </div>
                <div class="btn-contact">

                </div>
                <p>+ de 150 Canais de TV em pacotes</p>
                <div class="container2">
                    <div class="box2"><img src="img/nx (6).webp" alt=""></div>
                    <div class="box2"><img src="img/nx (5).webp" alt=""></div>
                    <div class="box2"><img src="img/nx (4).webp" alt=""></div>
                    <div class="box2"><img src="img/nx (3).webp" alt=""></div>
                    <div class="box2"><img src="img/nx (2).webp" alt=""></div>
                </div>
            </div>
        </div>


        <div class="image-container" id="boxes">
            <div class="image-box" style="background-color: #131960">
                <p>Planos <b>White Label</b> com a <b>marca do provedor</b></p>
            </div>
            <div class="image-box" style="background-color: #f4a10c;">
                <p>Planos <b>customizados</b> com muitos <b>benefícios</b></p>
            </div>
            <div class="image-box" style="background-color: #131960;">
                <p>Materiais para <b>criação de artes de divulgação</b></p>
            </div>
        </div>


        <div class="video-container" id="cont">

            <div class="video-content">

                <div class="text-top1">
                    <img src="img/bn.png" alt="" id="faixa2">
                    <img src="img/disp.png" alt="" id="img1-mob">

                </div>
                <div class="image-container-top">
                    <img src="img/nxx.png" alt="" id="img-mob">
                </div>
            </div>




        </div>
    </div>
    </div>
    <footer>
        <div class="container-outer">
           <div class="icons-rodape"> <a href=""> <i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-facebook"></i></a>
             <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i></a>
            </div>
            <div class="left-section">
               
                <p>NxTV é a primeira empresa brasileira especializada em
                    plataformas e aplicativos OTT a oferecer conteúdo AVOD
                    e canais Fast Channel para Provedores de Internet.
                    Oferece também planos premium de canais especiais de
                    TV On-line, VODs e TVODs.</p>
            </div>
            <div class="container-random">
                <div class="box-random">Cobertura <span>Nacional</span></div>
                <div class="box-random">ISP's de <span>283</span> municípios</div>
                <div class="box-random"><span>26</span> estados brasileiros</div>
            </div>
            <div class="right-section">
                <img src="img/L.webp" alt="">
                <!-- link do vídeo 
                <video class="custom-video" autoplay muted loop width="600">
                    <source src="nx1.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                </video> -->
            </div>
            
        </div> 
        
            <div class="icons-rodape-mobile"> 
            <a href=""> <i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i></a>
            </div>
            
            
            <div class="copyright">
            <span>©Copyright NXTV Todos os Direitos Reservados. CNPJ: 21.812.210/0001-54</span>
        </div>

        

        <!-- Salvar as utms nos cookies do navegador com expiração de 7 dias -->
        <script>
            // Função para obter o valor de um parâmetro da URL
            function getURLParameter(name) {
                name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
                var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
                var results = regex.exec(location.search);
                return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
            }

            // Coletar os valores das UTM da URL
            // var utmSource = getURLParameter('utm_source');
            var fbClid = getURLParameter('fbclid');
            var utmSource = window.location.hostname;
            var utmMedium = getURLParameter('utm_medium');
            var utmCampaign = getURLParameter('utm_campaign');

            // Obter a data atual
            var currentDate = new Date();

            // Definir a data de expiração em 7 dias
            var expirationDate = new Date(currentDate.getTime() + (7 * 24 * 60 * 60 * 1000));

            // Converter a data de expiração para o formato de cookie
            var expirationDateString = expirationDate.toUTCString();

            // Salvar os valores das UTM nos cookies do navegador com data de expiração de 7 dias
            document.cookie = 'fbclid=' + fbClid + ';path=/;expires=' + expirationDateString;
            document.cookie = 'utm_source=' + utmSource + ';path=/;expires=' + expirationDateString;
            document.cookie = 'utm_medium=' + utmMedium + ';path=/;expires=' + expirationDateString;
            document.cookie = 'utm_campaign=' + utmCampaign + ';path=/;expires=' + expirationDateString;
        </script>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>


</html>