<?php
$HOME = 'https://www.aristidesneto.com.br';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="pt-br" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="pt-br" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="pt-br"> <!--<![endif]-->  
<head>
    <title>Aristides Neto - Desenvolvedor Full Stack</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfólio de Aristides Neto - Desenvolvedor Web Full Stack">
    <meta name="author" content="Aristides Neto">    
    <link rel="shortcut icon" href="favicon.jpg">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?= $HOME ?>/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= $HOME ?>/assets/plugins/font-awesome/css/font-awesome.min.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?= $HOME ?>/assets/css/styles-6.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66661857-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-66661857-1');
</script>


    <!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.linkinside.com.br/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '3']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

</head> 

<body>

    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile img-circle" src="<?= $HOME ?>/assets/images/profile-aristides-neto.png" alt="Profile de Aristides Neto" />
                <h1 class="name">Aristides Neto</h1>
                <h3 class="tagline">Desenvolvedor Full Stack / Analista de Sistema</h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: contato@aristidesneto.com.br" title="Enviar email para Aristides">contato@aristidesneto.com.br</a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="https://linkinside.com.br" title="Visitar Link Inside" target="_blank">linkinside.com.br</a></li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="https://www.linkedin.com/in/aristidesbneto/" target="_blank">linkedin.com/in/aristidesbneto</a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="https://github.com/aristidesneto" target="_blank">github.com/aristidesneto</a></li>
                    <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/aristidesbneto" target="_blank">@aristidesbneto</a></li>
                </ul>
            </div>

            <div class="education-container container-block">
                <h2 class="container-block-title">Formação</h2>
                <div class="item">
                    <h4 class="degree">Ciência da Computação</h4>
                    <h5 class="meta">Universidade do Vale do Paraíba</h5>
                    <div class="time">2005 - 2009</div>
                </div>            
            </div>         
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Hobbies</h2>
                <ul class="list-unstyled interests-list">
                    <li>Músicas - Rock clássicos</li>
                    <li>Violão / Guitarra</li>
                    <li>Séries - GOT e outras...</li>
                    <li>Esportes - Futebol (sedentarismo chegou)</li>
                </ul>
            </div>
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Sobre</h2>
                <div class="summary">
                    <p>Um caso de amor com Linux desde 2007, desde então já foram vários sistemas quebrados, arquivos perdidos, madrugadas em claro tudo por curiosidade ao sistema e a vontade de aprender coisas novas.</p>
                    <p>Em 2010 conheci a programação web e hoje como desenvolvedor Full Stack desenvolvi sites e sistemas para internet. Trabalhando com as linguagens de programação como PHP, Jquery e Ajax. Banco de dados MySql, framework front-end Bootstrap e framework back-end Laravel.</p>                        
                    <p>Com a necessidade de configurar um ambiente de desenvolvimento e consequentemente de produção, com o conhecimento de Linux adiquirido durante esses anos, hoje realizo a instalação e configuração de um servidor web Linux desde a instalação do SO e a configuração de serviços como Nginx, MariaDB/MySql, PHP, Firewall, recursos de segurança, instalação de um Painel de gerenciamento, otimização, monitoramento de logs, serviços de email externo, e-mail transacionais como SendGrid e SparkPost.</p>                                                           
                </div>
            </section>                    

            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Projetos</h2>
                <div class="intro">
                    <p>Aqui você encontra os projetos desenvolvidos por mim. Desenvolvimentos de sites ou sistemas web. Projetos Open Source que ajudei a contribuir no Git Hub entre outros. Projetos em ordem cronológica.</p>
                </div>

                <div class="item">
                    <span class="project-title"><a href="https://www.lucianevecchioconsultora.com.br" target="_blank"><i class="fa fa-check"></i> Luciane Vecchio Consultora</a></span> - 
                    <span class="project-tagline">Site e blog da profissional de Coach Luciane Vecchio. Você encontrará artigos e dicas sobre vários temas como empregos, consultorias, RH, motivação e muito mais.</span>
                </div>

                <div class="item">
                    <span class="project-title"><a href="https://www.gdflex.com.br" target="_blank"><i class="fa fa-check"></i> GDFlex Sistemas Construtivo</a></span> - 
                    <span class="project-tagline">Site de empresa especializada em sistema de construção a seco (divisórias, gesso acartonado, drywall, pisos vinílicos, forros e persianas).</span>
                </div>
                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-book"></i>Artigos</h2>
                <div class="intro">
                    <p>Aqui você pode acompanhar os artigos que escrevo para o meu blog <a href="https://linkinside.com.br/blog" target="_blank">Link Inside</a>. Artigos sobre programação, servidores linux, dicas e muito mais.</p>
                </div>

                <div class="item">
                    <span class="project-title"><a href="https://linkinside.com.br/blog/configurando-um-servidor-lemp-debian-9-parte-2" target="_blank"><i class="fa fa-check"></i> Configurando um servidor LEMP Debian 9 - Parte 2</a></span> - 
                    <span class="project-tagline">Aprenda a configurar um servidor web usando LEMP no Debian 9. Iremos instalar o Nginx, MariaDB e PHP 7.2.</span>
                </div>

                <div class="item">
                    <span class="project-title"><a href="https://linkinside.com.br/blog/configurando-virtual-host-no-nginx" target="_blank"><i class="fa fa-check"></i> Configurando Virtual Host no Nginx</a></span> - 
                    <span class="project-tagline">Aprenda a instalação e a configuração básica de como criar um server block com o servidor web Nginx.</span>
                </div>

                <div class="item">
                    <span class="project-title"><a href="https://linkinside.com.br/blog/criar-sitemap-automaticamente-em-php" target="_blank"><i class="fa fa-check"></i> Criar sitemap automaticamente em PHP</a></span> - 
                    <span class="project-tagline">Aprenda a gerar seu sitemap automaticamente com um script em PHP e enviar para o Google sem esforço nenhum</span>
                </div>

                <div class="item">
                    <span class="project-title"><a href="https://linkinside.com.br/blog/configurando-um-servidor-web-do-zero" target="_blank"><i class="fa fa-check"></i> Configurando um servidor LEMP Debian 9 - Parte 1</a></span> - 
                    <span class="project-tagline">Configuração de um servidor web usando LEMP no Debian 9. Criando um usuário e configurando o SSH</span>
                </div>

            </section><!--//section-->            
            
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="<?= $HOME ?>/assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?= $HOME ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="<?= $HOME ?>/assets/js/main.js"></script>            
</body>
</html> 

