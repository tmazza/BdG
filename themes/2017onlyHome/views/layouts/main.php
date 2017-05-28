<!DOCTYPE html>
<!--
  Transit by TEMPLATED
  templated.co @templatedco
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Bolão do Gordo</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="<?=$this->assetsDir;?>/2017onlyHome/js/html5shiv.js"></script><![endif]-->
    <script src="<?=$this->assetsDir;?>/2017onlyHome/js/jquery.min.js"></script>
    <script src="<?=$this->assetsDir;?>/2017onlyHome/js/skel.min.js"></script>
    <script src="<?=$this->assetsDir;?>/2017onlyHome/js/skel-layers.min.js"></script>
    <script src="<?=$this->assetsDir;?>/2017onlyHome/js/init.js"></script>
    <link rel="stylesheet" href="<?=$this->assetsDir;?>/2017onlyHome/css/skel.css" />
    <link rel="stylesheet" href="<?=$this->assetsDir;?>/2017onlyHome/css/style.css" />
    <link rel="stylesheet" href="<?=$this->assetsDir;?>/2017onlyHome/css/style-xlarge.css" />
  </head>
  <body class="landing">

    <!-- Header -->
      <header id="header">
        <a href="<?=$this->createUrl('/site/index');?>">
          <img style='float:left;' src="<?=$this->assetsDir;?>/images/logo-single.png" width=60px; />          
          <div style="float:left;margin-top:-15px;font-weight:bold;font-size:20px;color: white;">Bolão do gordo</div>
        </a>
        <nav id="nav">
          <ul>
            <li><a href="<?=$this->createUrl('/site/login');?>">Entrar</a></li>
            <li><a href="<?=$this->createUrl('/cadastro/index');?>" class="button special">Cadatre-se</a></li>
          </ul>
        </nav>
      </header>

    <!-- Banner -->
      <section id="banner">
        <h2>Reunindo fãs do futebol desde 2007</h2>
        <p>Ganhe prêmios e se divirta junto com amigos e familiares</p>
        <ul class="actions">
          <li>
            <a href="#conheca" class="button big">Conheça</a>
          </li>
        </ul>
      </section>

    <!-- One -->
      <section id="conheca" class="wrapper style1 special">
        <div class="container">
          <header class="major">
            <h2>Como funciona</h2>
            <p>Modalidade paga e modalidade gratuita. Como assim?</p>
          </header>
          <div class="row 150%">
            <div class="6u 12u$(medium)">
              <section class="box">
                <i class="icon big rounded color1 fa-cloud"></i>
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
              </section>
            </div>
            <div class="6u$ 12u$(medium)">
              <section class="box">
                <i class="icon big rounded color6 fa-rocket"></i>
                <h3>Adipisicing elit totam</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque eveniet, nesciunt molestias. Ipsam, voluptate vero.</p>
              </section>
            </div>
          </div>
        </div>
      </section>

    <!-- Two -->
      <section id="two" class="wrapper style2 special">
        <div class="container">
          <header class="major">
            <h2>Depoimento dos campeões</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, autem.</p>
          </header>
          <section class="profiles">
            <div class="row">
              <section class="3u 6u(medium) 12u$(xsmall) profile">
                <img src="<?=$this->assetsDir;?>/2017onlyHome/images/profile_placeholder.gif" alt="" />
                <h4>Lorem ipsum</h4>
                <p>Lorem ipsum dolor</p>
              </section>
              <section class="3u 6u$(medium) 12u$(xsmall) profile">
                <img src="<?=$this->assetsDir;?>/2017onlyHome/images/profile_placeholder.gif" alt="" />
                <h4>Voluptatem dolores</h4>
                <p>Ullam nihil repudi</p>
              </section>
              <section class="3u 6u(medium) 12u$(xsmall) profile">
                <img src="<?=$this->assetsDir;?>/2017onlyHome/images/profile_placeholder.gif" alt="" />
                <h4>Doloremque quo</h4>
                <p>Harum corrupti quia</p>
              </section>
              <section class="3u$ 6u$(medium) 12u$(xsmall) profile">
                <img src="<?=$this->assetsDir;?>/2017onlyHome/images/profile_placeholder.gif" alt="" />
                <h4>Voluptatem dicta</h4>
                <p>Et natus sapiente</p>
              </section>
            </div>
          </section>
          <footer>
            <p>
            Explicar que existe um periodo em que é possível participar do bolão pago sem precisar pagar  ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolore illum, temporibus veritatis eligendi, aliquam, dolor enim itaque veniam aut eaque sequi qui quia vitae pariatur repudiandae ab dignissimos ex!</p>
            <ul class="actions">
              <li>
                <a href="<?=$this->createUrl('/cadastro/index');?>" class="button big">Comece agora</a>
              </li>
            </ul>
          </footer>
        </div>
      </section>

    <!-- Three -->
      <section id="three" class="wrapper style3 special">
        <div class="container">
          <header class="major">
            <h2>Consectetur adipisicing elit</h2>
            <p>Lorem ipsum dolor sit amet. Delectus consequatur, similique quia!</p>
          </header>
        </div>
        <div class="container 50%">
          <form action="#" method="post">
            <div class="row uniform">
              <div class="6u 12u$(small)">
                <input name="name" id="name" value="" placeholder="Name" type="text">
              </div>
              <div class="6u$ 12u$(small)">
                <input name="email" id="email" value="" placeholder="Email" type="email">
              </div>
              <div class="12u$">
                <textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
              </div>
              <div class="12u$">
                <ul class="actions">
                  <li><input value="Send Message" class="special big" type="submit"></li>
                </ul>
              </div>
            </div>
          </form>
        </div>
      </section>

    <!-- Footer -->
      <footer id="footer">
        <div class="container">
          <section class="links">
            <div class="row">
              <section class="3u 6u(medium) 12u$(small)">
                <h3>Lorem ipsum dolor</h3>
                <ul class="unstyled">
                  <li><a href="#">Lorem ipsum dolor sit</a></li>
                  <li><a href="#">Nesciunt itaque, alias possimus</a></li>
                  <li><a href="#">Optio rerum beatae autem</a></li>
                  <li><a href="#">Nostrum nemo dolorum facilis</a></li>
                  <li><a href="#">Quo fugit dolor totam</a></li>
                </ul>
              </section>
              <section class="3u 6u$(medium) 12u$(small)">
                <h3>Culpa quia, nesciunt</h3>
                <ul class="unstyled">
                  <li><a href="#">Lorem ipsum dolor sit</a></li>
                  <li><a href="#">Reiciendis dicta laboriosam enim</a></li>
                  <li><a href="#">Corporis, non aut rerum</a></li>
                  <li><a href="#">Laboriosam nulla voluptas, harum</a></li>
                  <li><a href="#">Facere eligendi, inventore dolor</a></li>
                </ul>
              </section>
              <section class="3u 6u(medium) 12u$(small)">
                <h3>Neque, dolore, facere</h3>
                <ul class="unstyled">
                  <li><a href="#">Lorem ipsum dolor sit</a></li>
                  <li><a href="#">Distinctio, inventore quidem nesciunt</a></li>
                  <li><a href="#">Explicabo inventore itaque autem</a></li>
                  <li><a href="#">Aperiam harum, sint quibusdam</a></li>
                  <li><a href="#">Labore excepturi assumenda</a></li>
                </ul>
              </section>
              <section class="3u$ 6u$(medium) 12u$(small)">
                <h3>Illum, tempori, saepe</h3>
                <ul class="unstyled">
                  <li><a href="#">Lorem ipsum dolor sit</a></li>
                  <li><a href="#">Recusandae, culpa necessita nam</a></li>
                  <li><a href="#">Cupiditate, debitis adipisci blandi</a></li>
                  <li><a href="#">Tempore nam, enim quia</a></li>
                  <li><a href="#">Explicabo molestiae dolor labore</a></li>
                </ul>
              </section>
            </div>
          </section>
          <div class="row">
            <div class="8u 12u$(medium)">
              <ul class="copyright">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
              </ul>
            </div>
            <div class="4u$ 12u$(medium)">
              <ul class="icons">
                <li>
                  <a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
                </li>
                <li>
                  <a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
                </li>
                <li>
                  <a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
                </li>
                <li>
                  <a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <?php if(!YII_DEBUG): ?>
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-31889911-1', 'auto');
      ga('send', 'pageview');
      </script>
      <?php endif; ?>
  </body>
</html>