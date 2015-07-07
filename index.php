<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TeslaWatsh</title>
  <link href='http://fonts.googleapis.com/css?family=Exo+2:400,200,300&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <aside class="sidebar_mob">
    <ul class="menu_mob">
      <li><a href="">Функционал</a></li>
      <li class="active"><a href="">Преимущества</a></li>
      <li><a href="">Условия доставки</a></li>
      <li><a href="">Вопрос - Ответ</a></li>
      <li><a href="">Как мы работаем</a></li>
    </ul>
  </aside>

  <div class="curtain" id="curtain"></div>

  <div class="wrapper">
    <div class="layout">

      <header class="header_mob visible-xs">
        
        <div class="page_title">TeslaWatch</div>

        <div class="nav_mob_toggle" id="nav_mob_toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        <a href="" class="logo_mob"></a>  
      </header>

      <header class="header hidden-xs">
        <div class="container">
          <div class="row">
            <a href="#" class="col-sm-3 logo"></a>
            
            <ul class="menu">
              <li><a href="">Функционал</a></li>
              <li class="active"><a href="">Преимущества</a></li>
              <li><a href="">Условия доставки</a></li>
              <li><a href="">Вопрос - Ответ</a></li>
              <li><a href="">Как мы работаем</a></li>
            </ul>
          </div>
        </div>
      </header>

      <main class="main">

        <section class="section top" id="top">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">

                <div class="top_head">Приведи себя в форму при помощи персонального помощника</div>

                <div class="top_desc">
                  <div class="top_desc_title">Хотите узнать что такое TESLAWATCH?</div>
                  <button class="btn __show_video">Смотреть видео</button>
                </div>

                <table class="price_table">
                  <tr>
                    <td class="price_base">базовая<br>стоимость</td>
                    <td>стоимость<br>на время акции</td>
                    <td>цена при покупке<br>2-х браслетов</td>
                  </tr>
                  <tr class="price_row">
                    <td class="price_base"><s>5000р.</s></td>
                    <td><span class="price_medium">3490р.</span></td>
                    <td><span class="price_best __decor">2990р.</span></td>
                  </tr>
                  <tr>
                    <td class="price_base">выгода: <br>0р.</td>
                    <td>выгода: <br><span class="price_medium">1510р.</span></td>
                    <td>выгода: <br><span class="price_best">4020р.</span></td>
                  </tr>
                </table>
              </div>
              <div class="col-sm-5">

                <form action="" class="top_form">

                  <div class="top_form_head">Закажите браслет и получите чехол для бега в подарок!</div>

                  <div class="form_item">
                    <input type="text" name="name" placeholder="Ваше имя" class="base_control">
                  </div>

                  <div class="form_item">
                    <input type="text" name="phone" placeholder="Телефон" class="base_control">
                  </div>

                  <div class="form_item">
                    <div class="btn_wrap">
                      <button class="btn __order gradient">Заказать</button>
                    </div>
                  </div>
                </form>
                
                <div class="countdown_wrap">
                  <div class="countdown">

                    <header class="countdown_head">
                      До окончания акции осталось:
                    </header>

                    <div class="clock">

                      <div class="clock_item">
                        <div class="clock_value hours" id="hours">06</div>
                        <div class="clock_caption">часы</div>
                      </div>

                      <div class="clock_item">
                        <div class="clock_value minutes" id="minutes">34</div>
                        <div class="clock_caption">минуты</div>
                      </div>
                      
                      <div class="clock_item">
                        <div class="clock_value seconds" id="seconds">45</div>
                        <div class="clock_caption">секунды</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section specifications" id="specifications">
          <div class="container">
            <header class="section_head">
              Характеристики 
              <div class="cloud_min hidden-xs tooltip" 
                title="TeslaWatch T-band работает через приложение для мобильного устройства. <br>
                        Браслеты работают по протоколу Bluetooth 4.0 и выше. <br>
                        Приложение рассчитано на iOS (от 7.0) и Android (от 4.3 версии и выше)." >
                Bluetooth 4.0 <br> 
                iPhone 4S <br> 
                Android 4.3
              </div>
            </header>
            <div class="row">
              <div class="col-md-6">
                <ul class="spec_list __left">
                  <li><span class="spec_ico __alarm">Умный будильник</span></li>
                  <li><span class="spec_ico __juice">Сиситема напоминаний <br>о приеме воды</span></li>
                  <li><span class="spec_ico __stop">Шагомер</span></li>
                  <li><span class="spec_ico __clipboard">Учет сожженных<br>калорий</span></li>
                  <li><span class="spec_ico __piano">4 режима работы</span></li>
                </ul>
              </div>
              <div class="col-md-5 col-md-offset-1">
                <ul class="spec_list __right">
                  <li><span class="spec_ico __graph">Подробная статистика</span></li>
                  <li><span class="spec_ico __target">Установка целей в <br>приложении</span></li>
                  <li><span class="spec_ico __moon">Отслеживание фаз сна</span></li>
                  <li><span class="spec_ico __ball">Напоминание что нужно <br>размяться</span></li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="section manifest" id="manifest">
          <div class="container">

            <div class="row maifest_list">

              <div class="col-sm-3 maifest_item">
                <div class="maifest_capton __ico_wallet">Оплата при получении</div>
                <div class="maifest_desc">Вы платите деньги курьеру при получении браслетов</div>
              </div>

              <div class="col-sm-3 maifest_item">
                <div class="maifest_capton __ico_sheriff">100% гарантия возврата</div>
                <div class="maifest_desc">Мы соблюдаем "Закон о защите прав потребителей”</div>
              </div>

              <div class="col-sm-3 maifest_item">
                <div class="maifest_capton __ico_download">Максимально низкая цена</div>
                <div class="maifest_desc">Мы являемся производителями, поэтому Вы покупаете браслеты без дополнительной наценки</div>
              </div>

              <div class="col-sm-3 maifest_item">
                <div class="maifest_capton __ico_russia">Доставка по всей России</div>
                <div class="maifest_desc">Мы высылаем браслеты во все региона нашей страны</div>
              </div>
            </div>

            <ul class="faq_list">

              <li class="faq_item">
                <header class="faq_header">Принцип работы браслета</header>
                <div class="faq_body">Современные ученые так объяснили целебные свойства турмалина: энергетические вибрации камня идентичны вибрациям человеческого тела, поэтому способны стимулировать энергетические потоки в теле и могут оказывать регулирующее действие на весь организм человека.</div>
              </li>

              <li class="faq_item">
                <header class="faq_header">Почему турмалин стабилизирует биомагнитное поле человека?</header>
                <div class="faq_body">Современные ученые так объяснили целебные свойства турмалина: энергетические вибрации камня идентичны вибрациям человеческого тела, поэтому способны стимулировать энергетические потоки в теле и могут оказывать регулирующее действие на весь организм человека.</div>
              </li>

              <li class="faq_item">
                <header class="faq_header">Почему браслет Teslawatch выводит из организма до 97,5% токсинов?</header>
                <div class="faq_body">Современные ученые так объяснили целебные свойства турмалина: энергетические вибрации камня идентичны вибрациям человеческого тела, поэтому способны стимулировать энергетические потоки в теле и могут оказывать регулирующее действие на весь организм человека.</div>
              </li>

              <li class="faq_item">
                <header class="faq_header">Почему браслет увеличивает рост мышечной массы в три раза?</header>
                <div class="faq_body">Современные ученые так объяснили целебные свойства турмалина: энергетические вибрации камня идентичны вибрациям человеческого тела, поэтому способны стимулировать энергетические потоки в теле и могут оказывать регулирующее действие на весь организм человека.</div>
              </li>
            </ul>

            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4  center-block specifications_order">
                <div class="btn_wrap">
                    <button class="btn __order">Хочу такой браслет</button>
                  </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section excellence" id="excellence">
          <div class="container">
            <header class="section_head">Преимущества T-BAND</header>

            <ul class="ex_list __type_1">

              <li class="ex_item" data-descid="1">
                <svg class="hexagon">
                  <g>
                    <polygon points="41, 0 125, 0 166, 72 125, 143  41, 143 0, 72" /> 
                    <image x="60" y="20" xlink:href="img/ico-nautical.png" width="47" height="47"/>
                    <text x="85" y="90" text-anchor="middle">Долговечность</text>
                  </g>
                </svg>
              </li>

              <li class="ex_item __mob_right" data-descid="2">
                <svg class="hexagon">
                  <g>
                    <polygon points="41, 0 125, 0 166, 72 125, 143  41, 143 0, 72" /> 
                    <image x="60" y="20" xlink:href="img/ico-tie.png" width="47" height="47"/>
                    <text x="85" y="90" text-anchor="middle">Лаконичный</text>
                    <text x="85" y="110" text-anchor="middle">дизайн</text>
                  </g>
                </svg>
              </li>

              <li class="ex_item __mob_left" data-descid="3">
                <svg class="hexagon">
                  <g data-ex-id="1">
                    <polygon points="41, 0 125, 0 166, 72 125, 143  41, 143 0, 72" /> 
                    <image x="60" y="20" xlink:href="img/ico-smile.png" width="47" height="47"/>
                    <text x="85" y="90" text-anchor="middle">Удобный</text>
                    <text x="85" y="110" text-anchor="middle">браслет</text>
                  </g>
                </svg>
              </li>
            </ul>

            <ul class="ex_list __type_2">

              <li class="ex_item __mob_right" data-descid="4">
                <svg class="hexagon">
                  <g data-ex-id="1">
                    <polygon points="41, 0 125, 0 166, 72 125, 143  41, 143 0, 72" /> 
                    <image x="60" y="20" xlink:href="img/ico-piggy.png" width="47" height="47"/>
                    <text x="85" y="90" text-anchor="middle">Цена ниже</text>
                    <text x="85" y="110" text-anchor="middle">аналогов</text>
                  </g>
                </svg>
              </li>

              <li class="ex_item __mob_left" data-descid="5">
                <svg class="hexagon">
                  <g data-ex-id="1">
                    <polygon points="41, 0 125, 0 166, 72 125, 143  41, 143 0, 72" /> 
                    <image x="60" y="20" xlink:href="img/ico-mute.png" width="47" height="47"/>
                    <text x="85" y="90" text-anchor="middle">Будит</text>
                    <text x="85" y="110" text-anchor="middle">только Вас</text>
                  </g>
                </svg>
              </li>

              <li class="ex_item __mob_right" data-descid="6">
                <svg class="hexagon">
                  <g data-ex-id="1">
                    <polygon points="41, 0 125, 0 166, 72 125, 143  41, 143 0, 72" /> 
                    <image x="60" y="20" xlink:href="img/ico-settings.png" width="47" height="47"/>
                    <text x="85" y="90" text-anchor="middle">Российское</text>
                    <text x="85" y="110" text-anchor="middle">производство</text>
                  </g>
                </svg>
              </li>
            </ul>

            <ul class="ex_list __type_3">

              <li class="ex_item __mob_left" data-descid="7">
                <svg class="hexagon">
                  <g data-ex-id="1">
                    <polygon points="41, 0 125, 0 166, 72 125, 143  41, 143 0, 72" /> 
                    <image x="60" y="20" xlink:href="img/ico-battery.png" width="47" height="47"/>
                    <text x="85" y="90" text-anchor="middle">Автономность</text>
                  </g>
                </svg>
              </li>

              <li class="ex_item __mob_right" data-descid="8">
                <svg class="hexagon">
                  <g data-ex-id="1">
                    <polygon points="41, 0 125, 0 166, 72 125, 143  41, 143 0, 72" /> 
                    <image x="60" y="20" xlink:href="img/ico-iphone.png" width="47" height="47"/>
                    <text x="85" y="90" text-anchor="middle">Совместимость</text>
                  </g>
                </svg>
              </li>

              <li class="ex_item __mob_left" data-descid="9">
                <svg class="hexagon">
                  <g data-ex-id="1">
                    <polygon points="41, 0 125, 0 166, 72 125, 143  41, 143 0, 72" /> 
                    <image x="60" y="20" xlink:href="img/ico-graduate.png" width="47" height="47"/>
                    <text x="85" y="90" text-anchor="middle">Действительно</text>
                    <text x="85" y="110" text-anchor="middle">умный</text>
                    <text x="85" y="130" text-anchor="middle">будильник</text>
                  </g>
                </svg>
              </li>
            </ul>

            <div class="ex_description">
              
              <div class="ex_inner __image __active"></div>

              <div class="ex_inner __text" data-desc="1">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </div>

              <div class="ex_inner __text" data-desc="2">
                Nostrum nihil aut voluptates ab facilis similique est facere quas rem vel impedit, corrupti quasi beatae enim tenetur fugiat.
              </div>

              <div class="ex_inner __text" data-desc="3">
                Facere quas rem vel impedit, corrupti quasi beatae enim tenetur fugiat.
              </div>

              <div class="ex_inner __text" data-desc="4">
                Nihil aut voluptates ab facilis similique est facere
              </div>

              <div class="ex_inner __text" data-desc="5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </div>

              <div class="ex_inner __text" data-desc="6">
                Nostrum nihil aut voluptates ab facilis similique est facere quas rem vel impedit, corrupti quasi beatae enim tenetur fugiat.
              </div>

              <div class="ex_inner __text" data-desc="7">
                Facere quas rem vel impedit, corrupti quasi beatae enim tenetur fugiat.
              </div>

              <div class="ex_inner __text" data-desc="8">
                Nihil aut voluptates ab facilis similique est facere
              </div>

              <div class="ex_inner __text" data-desc="9">
                Nihil aut voluptates ab facilis similique est facere
              </div>
            </div>
          </div>
        </section>

        <section class="section promo" id="promo">
          <div class="container">
            <div class="section_head">
              До конца акции
              <div class="clock">

                <div class="clock_item">
                  <div class="clock_value hours" id="hours">06</div>
                  <div class="clock_caption">часы</div>
                </div>

                <div class="clock_item">
                  <div class="clock_value minutes" id="minutes">34</div>
                  <div class="clock_caption">минуты</div>
                </div>
                
                <div class="clock_item">
                  <div class="clock_value seconds" id="seconds">45</div>
                  <div class="clock_caption">секунды</div>
                </div>
              </div>
            </div>

            <div class="row promo_desc">
              <div class="col-sm-7">
                <table class="price_table">
                  <tr>
                    <td class="price_base">базовая<br>стоимость</td>
                    <td>стоимость<br>на время акции</td>
                    <td>цена при покупке<br>2-х браслетов</td>
                  </tr>
                  <tr class="price_row">
                    <td class="price_base"><s>5000р.</s></td>
                    <td><span class="price_medium">3490р.</span></td>
                    <td><span class="price_best __decor">2990р.</span></td>
                  </tr>
                  <tr>
                    <td class="price_base">выгода: <br>0р.</td>
                    <td>выгода: <br><span class="price_medium">1510р.</span></td>
                    <td>выгода: <br><span class="price_best">4020р.</span></td>
                  </tr>
                </table>
              </div>
              <div class="col-sm-5">

                <div class="gift">Чехол для бега в подарок!</div>
              </div>
            </div>

            <form action="" class="promo_form">
              <div class="promo_form_inner">

                <div class="form_item">
                  <input type="text" name="name" placeholder="Ваше имя" class="base_control">
                </div>

                <div class="form_item">
                  <input type="text" name="phone" placeholder="Телефон" class="base_control">
                </div>

                <div class="btn_wrap">
                  <button class="btn __order">Заказать браслет с подарком</button>
                </div>
              </div>
            </form>

            <ul class="faq_list">

              <li class="faq_item">
                <header class="faq_header">Принцип работы браслета</header>
                <div class="faq_body">Современные ученые так объяснили целебные свойства турмалина: энергетические вибрации камня идентичны вибрациям человеческого тела, поэтому способны стимулировать энергетические потоки в теле и могут оказывать регулирующее действие на весь организм человека.</div>
              </li>

              <li class="faq_item">
                <header class="faq_header">Почему турмалин стабилизирует биомагнитное поле человека?</header>
                <div class="faq_body">Современные ученые так объяснили целебные свойства турмалина: энергетические вибрации камня идентичны вибрациям человеческого тела, поэтому способны стимулировать энергетические потоки в теле и могут оказывать регулирующее действие на весь организм человека.</div>
              </li>

              <li class="faq_item">
                <header class="faq_header">Почему браслет Teslawatch выводит из организма до 97,5% токсинов?</header>
                <div class="faq_body">Современные ученые так объяснили целебные свойства турмалина: энергетические вибрации камня идентичны вибрациям человеческого тела, поэтому способны стимулировать энергетические потоки в теле и могут оказывать регулирующее действие на весь организм человека.</div>
              </li>

              <li class="faq_item">
                <header class="faq_header">Почему браслет увеличивает рост мышечной массы в три раза?</header>
                <div class="faq_body">Современные ученые так объяснили целебные свойства турмалина: энергетические вибрации камня идентичны вибрациям человеческого тела, поэтому способны стимулировать энергетические потоки в теле и могут оказывать регулирующее действие на весь организм человека.</div>
              </li>
            </ul>
          </div>
        </section>

        <section class="section review" id="review">
          
        </section>
      </main>
    </div>
    <footer class="footer">
      <div class="container">
        <header class="section_head">Отзывы пользователей</header>
        
      </div>
    </footer>
  </div>
  <script src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="js/jquery-validation/dist/localization/messages_ru.min.js"></script>
  <script src="js/jquery-validation/dist/additional-methods.min.js"></script>
  <script src="js/countdown.min.js"></script>
  <script src="js/tooltipster/js/jquery.tooltipster.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>