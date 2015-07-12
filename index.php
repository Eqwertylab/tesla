<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TeslaWatsh</title>

  <link rel="icon" type="image/png" href="favicon.png">
  <link href='http://fonts.googleapis.com/css?family=Exo+2:400,200,300&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <aside class="sidebar_mob">
    <ul class="menu_mob">
      <li><a href="#specifications">Функционал</a></li>
      <li><a href="#excellence">Преимущества</a></li>
      <li><a href="#promo">Вопрос - Ответ</a></li>
      <li><a href="#work">Как мы работаем</a></li>
    </ul>
  </aside>

  <div class="curtain" id="curtain"></div>

  <div class="wrapper" data-spy="scroll" data-target="#navbar-header" data-offset="40">
    <div class="layout">

      <header class="header_mob visible-xs">
        
        <div class="page_title">TeslaWatch</div>

        <div class="nav_mob_toggle" id="nav_mob_toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        <a href="#top" class="logo_mob"></a>  
      </header>

      <header class="header hidden-xs" id="navbar-header">
        <div class="container">
          <div class="row">
            <a href="#top" class="col-sm-3 logo"></a>
            
            <ul class="menu nav nav-tabs">
              <li><a href="#specifications">Функционал</a></li>
              <li><a href="#excellence">Преимущества</a></li>
              <li><a href="#promo">Вопрос - Ответ</a></li>
              <li><a href="#work">Как мы работаем</a></li>
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
                  <button class="btn __show_video" 
                    data-modal="video" 
                    data-modal-after="start_video">
                      Смотреть видео
                  </button>
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

                <form action="send.php" class="form top_form"  id="form1">
                  
                  <input type="hidden" name="form_name" value="Заголовок">

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
                    <button class="btn __order" data-modal="edit">Хочу такой браслет</button>
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

            <form action="send.php" class="form promo_form"  id="form2">

              <input type="hidden" name="form_name" value="Блок акция">

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
          <header class="section_head">Отзывы пользователей</header>
          <div class="slider">

            <div class="rev_list slides">

              <div class="rev_item slide active">
                <div class="rev_body">
                  <div class="rev_photo">
                    <img src="img/rev1.jpg" alt="">
                  </div>
                  <div class="rev_desc">
                    <div class="rev_name">Шеповалов Максим</div>
                    <div class="rev_post">Админстратор ночного клуба</div>
                    <div class="rev_text">Praesent quis neque pharetra, dignissim risus eu, finibus arcu. Nulla eu malesuada mi, at tempor augue. In vitae ipsum id neque rutrum luctus at id nibh. Mauris mi ante, fermentum a mollis eu, sollicitudin non odio. Vivamus pulvinar eros non velit posuere tristique. Suspendisse sollicitudin tincidunt suscipit. </div>
                  </div>
                </div>
              </div>

              <div class="rev_item slide">
                <div class="rev_body">
                  <div class="rev_photo">
                    <img src="img/rev1.jpg" alt="">
                  </div>
                  <div class="rev_desc">
                    <div class="rev_name">Сергей Бодров</div>
                    <div class="rev_post">Админстратор ночного клуба</div>
                    <div class="rev_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium deserunt in officia, aperiam saepe dolorum, voluptas at sint dicta magnam a sunt adipisci dolore, aliquid ea mollitia? Ad, deserunt, perferendis.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="direction_nav_wrap">
              <ul class="direction_nav">
                <li class="before"></li>
                <li class="next"></li>
              </ul>
            </div>
          </div>
        </section>

        <section class="section work" id="work">
          <div class="container">
            <header class="section_head">Как мы работаем</header>

            <ul class="work_list">

              <li class="work_item __asc __arrow_up">
                <div class="work_caption">Оставляете заявку</div>
                <div class="work_ico __shape"></div>
              </li>

              <li class="work_item __desc __arrow_down">
                <div class="work_caption">Звонит менеджер для подтверждения заказа</div>
                <div class="work_ico __tel"></div>
              </li>

              <li class="work_item __asc __arrow_up">
                <div class="work_caption">Отправляем</div>
                <div class="work_ico __vespa"></div>
              </li>

              <li class="work_item __desc">
                <div class="work_caption">Получаете и оплачиваете</div>
                <div class="work_ico __hand"></div>
              </li>
            </ul>
          </div>
        </section>

        <section class="section whywe">
          <div class="container">

            <header class="section_head"><span>Шесть причин заказать браслет TESLAWATCH у нас</span></header>

            <div class="row whywe_list">
              
              <div class="col-sm-6 col-md-4 whywe_item">
                <div class="whywe_head">Мы производители</div>
                <div class="whywe_body">Curabitur ut lorem semper, dictum arcu quis, ultrices quam. Fusce a felis aliquet, rhoncus ipsum ac, porta orci. Donec consequat tortor ipsum, non elementum nisl laoreet quis.</div>
              </div>

              <div class="col-sm-6 col-md-4 whywe_item">
                <div class="whywe_head">100% гарантия возврата и обмена</div>
                <div class="whywe_body">Curabitur ut lorem semper, dictum arcu quis, ultrices quam. Fusce a felis aliquet, rhoncus ipsum ac, porta orci. Donec consequat tortor ipsum, non elementum nisl laoreet quis.</div>
              </div>

              <div class="col-sm-6 col-md-4 whywe_item">
                <div class="whywe_head">Уведомляем о приходе посылки</div>
                <div class="whywe_body">Curabitur ut lorem semper, dictum arcu quis, ultrices quam. Fusce a felis aliquet, rhoncus ipsum ac, porta orci. Donec consequat tortor ipsum, non elementum nisl laoreet quis.</div>
              </div>

              <div class="col-sm-6 col-md-4 whywe_item">
                <div class="whywe_head">Бесплатный обмен</div>
                <div class="whywe_body">Curabitur ut lorem semper, dictum arcu quis, ultrices quam. Fusce a felis aliquet, rhoncus ipsum ac, porta orci. Donec consequat tortor ipsum, non elementum nisl laoreet quis.</div>
              </div>

              <div class="col-sm-6 col-md-4 whywe_item">
                <div class="whywe_head">Оплата при получении</div>
                <div class="whywe_body">Curabitur ut lorem semper, dictum arcu quis, ultrices quam. Fusce a felis aliquet, rhoncus ipsum ac, porta orci. Donec consequat tortor ipsum, non elementum nisl laoreet quis.</div>
              </div>

              <div class="col-sm-6 col-md-4 whywe_item">
                <div class="whywe_head">Работаем по всей РФ</div>
                <div class="whywe_body">Curabitur ut lorem semper, dictum arcu quis, ultrices quam. Fusce a felis aliquet, rhoncus ipsum ac, porta orci. Donec consequat tortor ipsum, non elementum nisl laoreet quis.</div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <footer class="section footer">
      <div class="footer_container">
        
        <div class="row">
          <div class="col-sm-6 ftels">
            <a href="#" class="footer_logo"></a>
            <div class="ftels_item">8 (800) 123 45 67</div>
            <div class="ftels_item">8 (495) 987 65 12</div>
          </div>

          <div class="col-sm-6 faddress">
            ООО “МосХайТек” <br>
            ИНН 123456789456 <br>
            г. Москва, ул.Новосадовая 5а <br>
            info@teslawatch.ru
          </div>
        </div>

        <div class="forder">
          <div class="btn_wrap">
            <button class="btn __order" data-modal="edit">Хочу такой браслет</button>
          </div>
        </div>

        <div class="fapp">
          <p>Удобное мобильное приложение</p>
          <a href="" class="fapp_link __google"></a>
          <a href="" class="fapp_link __apple"></a>
        </div>
      </div>
    </footer>
  </div>
  
  <div class="fake" id="fake">
    Новый заказ: <br>
    <b id="name">Иванов Иван</b> <br>
    <span id="city">г. Оренбург</span>
  </div>

  <div class="modal_wrap">
  
    <div class="modal" data-modal-id="edit">
      <div class="modal_inner">
       
        <section class="modal_body">
              
          <form action="send.php" class="form modal_form" id="form3">
            
            <input type="hidden" name="form_name" value="Всплывающее окно">

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
        </section>
      </div>
      <span class="modal_close" data-modal-close="edit"></span>
    </div>

    <div class="modal" data-modal-id="answer">
      <div class="modal_inner">
        <section class="modal_body" id="answer_body">
          <!-- Ответ -->
        </section>
      </div>
      <span class="modal_close" data-modal-close="answer"></span>
    </div>

    <div class="modal __video" data-modal-id="video">
      <div class="modal_inner">
        <section class="modal_body">
          <video 
            id="example_video_1" 
            class="video-js vjs-default-skin vjs-big-play-centered"
            controls preload="auto" 
            poster="video/caption.jpg" 
            width="auto" height="auto"
            data-setup='{}'>
           <source src="video/TeslaWatch.mp4" type='video/mp4' />
           <source src="video/TeslaWatch.webm" type='video/webm' />
           <source src="video/TeslaWatch.ogv" type='video/ogg' />
           <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
          </video>
        </section>
      </div>
      <span class="modal_close" data-modal-close="video" data-modal-after="pause_video"></span>
    </div>
  </div>

  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/countdown.min.js"></script>
  <script src="js/tooltipster/js/jquery.tooltipster.min.js"></script>
  <script src="js/bootstrap-scrollspy.min.js"></script>
  <script src="js/jquery.smooth-scroll.js"></script>
  <script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="js/jquery.form.min.js"></script>
  <script src="js/modal/js/modal.js"></script>
  <script src="video-js/video.js"></script>
  <script src="js/app.js"></script>
</body>
</html>