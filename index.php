<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/Group 93.png" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/scss/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Primary Meta Tags -->
    <title>Redesign Landing Page NEON</title>
    <meta name="title" content="Redesign Landing Page NEON " />
    <meta
      name="description"
      content="A conta digital certa pra cuidar bem do seu dinheiro"
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://neon-project.netlify.app/" />
    <meta property="og:title" content="Redesign Landing Page NEON " />
    <meta
      property="og:description"
      content="A conta digital certa pra cuidar bem do seu dinheiro"
    />
    <meta
      property="og:image"
      content="https://neon-project.netlify.app/share-img.jpg"
    />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://neon-project.netlify.app/" />
    <meta property="twitter:title" content="Redesign Landing Page NEON " />
    <meta
      property="twitter:description"
      content="A conta digital certa pra cuidar bem do seu dinheiro"
    />
    <meta
      property="twitter:image"
      content="https://neon-project.netlify.app/share-img.jpg"
    />
  </head>
  <body>
    <header>
      <div class="container">
        <a href="" class="logo">
          <img src = "<?php echo get_template_directory_uri() ?>/img/logo-neon.svg" alt="Logo Neon" />
        </a>
        <nav>
          <ul>
            <li>
              <a href="">Produtos Neon</a>
            </li>
            <li>
              <a href="">Conta digital PJ</a>
            </li>
            <li>
              <a href="">Quem somos</a>
            </li>
            <li>
              <a href="">Blog</a>
            </li>
            <li>
              <a href="">Ajuda</a>
            </li>
          </ul>
          <button class="btn-secundary white">Abra sua conta digital</button>

          <button class="btn-mobile">
            <img src = "<?php echo get_template_directory_uri() ?>/img/btn-responsive.svg" alt="" />
          </button>
        </nav>
      </div>
    </header>

    <section class="s-hero">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h3>Abra sua conta, ?? s?? baixar o app!</h3>
          <h1>A conta digital certa pra cuidar bem do seu dinheiro</h1>
          <button class="btn-primary">Abra sua conta digital</button>
          <ul>
            <li>
              <div class="icon">
                <img
                  src="img/icon-cartao-sem-anuidade.svg"
                  alt="icone sem cart??o de anuidade"
                />
              </div>
              <span
                >Cart??o sem <br />
                anuidade</span
              >
            </li>
            <li>
              <div class="icon">
                <img src = "<?php echo get_template_directory_uri() ?>/img/icon-conta-digital.svg" alt="" />
              </div>
              <span>Conta digital <br />100% gr??tis</span>
            </li>
            <li>
              <div class="icon">
                <img src = "<?php echo get_template_directory_uri() ?>/img/icon-dinheiro.svg" alt="" />
              </div>
              <span
                >Seu dinheiro <br />
                rendendo mais</span
              >
            </li>
          </ul>
        </div>
        <div class="area-image">
          <h2 data-aos="fade-left">Banco 100% digital</h2>
          <div class="image" data-aos="zoom-in">
            <img src = "<?php echo get_template_directory_uri() ?>/img/card-neon-front.png" class="card-front" alt="" />
            <img src = "<?php echo get_template_directory_uri() ?>/img/card-neon-back.png" class="card-back" alt="" />
            <img src = "<?php echo get_template_directory_uri() ?>/img/circle-cards-neon.svg" class="circle" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="s-card-neon">
      <div class="container">
        <div class="left-area">
          <div class="ilustra-mockup">
            <img
              src="img/circle-mockup.svg"
              class="circle"
              data-aos="fade-left"
              alt=""
            />
            <img src = "<?php echo get_template_directory_uri() ?>/img/mockup-iphone-01.svg" data-aos="flip-right" alt="" />
          </div>
          <div class="text" data-aos="fade-up">
            <div class="icon">
              <img src = "<?php echo get_template_directory_uri() ?>/img/icon-neon.svg" class="icon" alt="" />
            </div>
            <div class="info-txt">
              <h3>Baixe nosso app</h3>
              <p>
                Que tal abrir uma conta digital para ver como a gente faz a sua
                vida muito mais simples?
              </p>
              <ul>
                <li>
                  <a href="" target="_blank">
                    <img src = "<?php echo get_template_directory_uri() ?>/img/apple-store.svg" alt="" />
                  </a>
                </li>
                <li>
                  <a href="" target="_blank">
                    <img src = "<?php echo get_template_directory_uri() ?>/img/google-play.svg " alt="" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="right-area">
          <div class="main-text" data-aos="fade-left">
            <h2>Resolva sua vida direto pelo app Neon!</h2>
            <ul>
              <li>
                <div class="info">
                  <img src = "<?php echo get_template_directory_uri() ?>/img/icon-cartao-credito.svg" class="icon" alt="" />
                  <div class="txt">
                    <h3>Cart??o de cr??dito sem anuidade</h3>
                    <p>
                      Conta digital com cart??o de cr??dito sem anuidade e sem
                      complica????o
                    </p>
                  </div>
                </div>
                <img src = "<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="" />
              </li>
              <li>
                <div class="info">
                  <img src = "<?php echo get_template_directory_uri() ?>/img/icon-taxas.svg" class="icon" alt="" />
                  <div class="txt">
                    <h3>Sem taxas</h3>
                    <p>
                      Transfer??ncias, boletos de dep??sito e outros servi??os
                      gratuitos
                    </p>
                  </div>
                </div>
                <img src = "<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="" />
              </li>
              <li>
                <div class="info">
                  <img src = "<?php echo get_template_directory_uri() ?>/img/icon-investimentos.svg" class="icon" alt="" />
                  <div class="txt">
                    <h3>Mais investimentos</h3>
                    <p>
                      Rendem mais que a poupan??a e voc?? resgata quando quiser
                    </p>
                  </div>
                </div>
                <img src = "<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="" />
              </li>
            </ul>
            <a href="" class="btn">Conhe??a outros produtos</a>
          </div>
          <div class="box-card" data-aos="fade-left">
            <div class="text">
              <h2>Neon Pejota</h2>
              <h3>Contas digitais PJ gratuitas para decolar seu neg??cio!</h3>
              <p>
                As melhores contas para fazer pagamentos, compras e receber dos
                seus clientes.
              </p>
              <div class="btns">
                <button class="btn-primary">Sou MEI</button>
                <button class="btn-primary">SOU ME</button>
              </div>
            </div>
            <img src = "<?php echo get_template_directory_uri() ?>/img/card-neonpj.png" class="image" alt="image" />
          </div>
        </div>
      </div>
    </section>
    <section class="s-depoimentos">
      <div class="container">
        <div class="top" data-aos="fade-right">
          <h2>
            <span>Pr??tico, f??cil, moderno</span> Voc?? resolve tudo sem estresse
            ????
          </h2>
          <div class="swiper-pagination"></div>
        </div>

        <div class="slide-depoimentos" data-aos="fade-up">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card-depoimentos">
                <div class="user">
                  <strong>@marciogurka</strong>
                  <img src = "<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="" />
                </div>
                <p>
                  Valeu @banconenon! Linda embalagem e o cart??o tbm ?? lindo!
                  Muito amor por esse banco #bancoNeon
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-depoimentos">
                <div class="user">
                  <strong>@kleriene18</strong>
                  <img src = "<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="" />
                </div>
                <p>
                  Eu uso o Neon pra render o pouquinho que eu tenho. Como disse
                  minha amiga Bruna, um dia eu abro o app de novo e PA: t?? rica.
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-depoimentos">
                <div class="user">
                  <strong>@mzltweet</strong>
                  <img src = "<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="" />
                </div>
                <p>
                  S?? por ter um cart??o virtual com bloqueio f??cil no app, j??
                  ganha e muito na seguran???? pro cliente.
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-depoimentos">
                <div class="user">
                  <strong>@marciogurka</strong>
                  <img src = "<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="" />
                </div>
                <p>
                  Valeu @banconenon! Linda embalagem e o cart??o tbm ?? lindo!
                  Muito amor por esse banco #bancoNeon
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-depoimentos">
                <div class="user">
                  <strong>@mzltweet</strong>
                  <img src = "<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="" />
                </div>
                <p>
                  S?? por ter um cart??o virtual com bloqueio f??cil no app, j??
                  ganha e muito na seguran???? pro cliente.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="s-conta-digital">
      <div class="container">
        <div class="text" data-aos="fade-right">
          <h2>
            <span>Aproveite</span> Domine o seu dinheiro com uma conta 100%
            digital
          </h2>
          <ul>
            <li>
              <div class="icon">
                <img src = "<?php echo get_template_directory_uri() ?>/img/icon-cartao-internacional.svg" alt="" />
              </div>
              <div class="info">
                <h4>Cart??o visa internacional</h4>
                <p>Cart??o visa internacional</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <img src = "<?php echo get_template_directory_uri() ?>/img/icon-cartao-sem-anuidade.svg" alt="" />
              </div>
              <div class="info">
                <h4>Zero mensalidade e anuidade</h4>
                <p>N??o gaste grana pagando taxas desnecess??rias.</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <img src = "<?php echo get_template_directory_uri() ?>/img/icon-invesimento.svg" alt="" />
              </div>
              <div class="info">
                <h4>Investimento que rende mais que a poupan??a</h4>
                <p>Invista o seu dinheiro de maneira mais rent??vel.</p>
              </div>
            </li>
          </ul>
          <button class="btn-primary">Abra sua conta digital</button>
        </div>
        <div class="image">
          <img
            src="img/mockup-cash-digital01.png"
            data-aos="fade-up"
            class="mockup-01"
            alt=""
          />
          <img
            src="img/mockup-cash-digital02.png"
            data-aos="fade-down"
            class="mockup-02"
            alt=""
          />
          <img
            src="img/circle-cash-digital.svg"
            data-aos="zoom-in"
            class="circle"
            alt=""
          />
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="top">
          <img src = "<?php echo get_template_directory_uri() ?>/img/logo-neon.svg" alt="logo neon" />
          <div class="share">
            <span> Acompanhe nas redes </span>
            <ul>
              <li>
                <a href=""><img src = "<?php echo get_template_directory_uri() ?>/img/icon-youtube.svg" alt="" /></a>
              </li>
              <li>
                <a href=""><img src = "<?php echo get_template_directory_uri() ?>/img/icon-linkedin.svg" alt="" /></a>
              </li>
              <li>
                <a href=""><img src = "<?php echo get_template_directory_uri() ?>/img/icon-facebook.svg" alt="" /></a>
              </li>
              <li>
                <a href=""><img src = "<?php echo get_template_directory_uri() ?>/img/icon-instagram.svg" alt="" /></a>
              </li>
              <li>
                <a href=""><img src = "<?php echo get_template_directory_uri() ?>/img/icon-twitter-white.svg" alt="" /></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="main">
          <nav>
            <div class="item">
              <strong>Produtos Neon</strong>
              <ul>
                <li>
                  <a href="">Cart??o de cr??dito</a>
                </li>
                <li>
                  <a href="">Cart??o pr??-pago</a>
                </li>
                <li>
                  <a href="">Neon Mais</a>
                </li>
                <li>
                  <a href="">Investimentos</a>
                </li>
                <li>
                  <a href="">Empr??stimo</a>
                </li>
              </ul>
            </div>
            <div class="item">
              <strong>Conta digital PJ</strong>
              <ul>
                <li>
                  <a href="">Sou MEI</a>
                </li>
                <li>
                  <a href="">Sou ME</a>
                </li>
              </ul>
            </div>
            <div class="item">
              <strong>Blog</strong>
              <ul>
                <li>
                  <a href="">#focanodinheiro</a>
                </li>
                <li>
                  <a href="">O poder da comunidade</a>
                </li>
                <li>
                  <a href="">Desafio das 52 semanas</a>
                </li>
                <li>
                  <a href="">Planilha de gastos</a>
                </li>
              </ul>
            </div>
            <div class="item">
              <strong>Institucional</strong>
              <ul>
                <li>
                  <a href="">Conhe??a a Neon</a>
                </li>
                <li>
                  <a href="">Trabalhe conosco</a>
                </li>
                <li>
                  <a href="">Termos de uso</a>
                </li>
                <li>
                  <a href="">Pol??ticas de privacidade</a>
                </li>
              </ul>
            </div>
            <div class="item">
              <strong>Ajuda</strong>
              <ul>
                <li>
                  <a href="">Ouvidoria</a>
                </li>
                <li>
                  <a href="">Fale conosco</a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="btns">
            <button>
              <img src = "<?php echo get_template_directory_uri() ?>/img/icon-envelope.svg" alt="" />
              <div class="info">
                <strong>Atendimento:</strong>
                <span> oi@neon.com.br (24 horas)</span>
              </div>
            </button>
            <button>
              <img src = "<?php echo get_template_directory_uri() ?>/img/icon-imprensa.svg" alt="" />
              <div class="info">
                <strong>Imprensa:</strong>
                <span> imprensa@neon.com.br</span>
              </div>
            </button>
          </div>
        </div>
        <div class="msg">
          <div class="icon">????</div>
          <p>
            Oi! Leu at?? aqui? Voc?? se preocupa com os m??nimos detalhes, mesmo. A
            gente tamb??m. Por isso o time Neon est?? sempre trabalhando para
            fazer a conta digital perfeita para voc?? ; )
          </p>
        </div>
      </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      var swiper = new Swiper(".slide-depoimentos", {
        slidesPerView: 3,
        spaceBetween: 32,
        pagination: {
          el: ".s-depoimentos .top .swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1.3,
            spaceBetween: 16,
          },
          600: {
            slidesPerView: 2.3,
            spaceBetween: 15,
          },
          1200: {
            slidesPerView: 3,
            spaceBetween: 32,
          },
        },
      });

      AOS.init({
        duration: 1000,
        once: true,
      });
    </script>
  </body>
</html>
