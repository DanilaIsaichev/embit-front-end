<html>
 <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <link rel="stylesheet" href="style.css">
  <title>ЭМБиТ | Электронная многопрофильная биржа труда</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="scripts/navbar-burger.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
 </head>
 <body>
   <wrapper>
   <header>
    <nav class="navbar is-white has-shadow" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <div class="navbar-item" id="logo">
          <a><img src="../images/logo-birga.png" onclick="location.href='../index.php'" style="max-height: 80px"></a>
        </div>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-end">
          <a class="navbar-item" href="#">О бирже</a>
          <a class="navbar-item" href="#">О системе</a>
          <a class="navbar-item" href="#">Помощь</a>
          <a class="navbar-item" href="#">Партнеры</a>
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-dark" href="pages/login.php">Войти</a>
              <a class="button is-warning" href="pages/registration.php"><b>Зарегистрироваться</b></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
   </header>
  
  <main id="index">
    <div class='column zero-padding' id="index-column">
      <img src="images/cat.jpg" >
      <h1>Работа для молодых специалистов, выпускников и студентов</h1><br>
      <p>Региональный центр содействия трудоустройству и адаптации к рынку труда выпускников учебных заведений</p><br>
      <p>Санкт-Петербургского государственного университета промышленных технологий и дизайна</p>
    </div>
    <div class='column'>
      <h2 class='block'>Электронная многопрофильная биржа труда (ЭМБиТ) помогает:</h2>
      <ul class="helps-list">
        <li>
          удобно и быстро найти подходящую работу
        </li>
        <li>
          получить профориентационную помощь
        </li>
        <li>
          получить полезную информацию о ситуации на рынке труда и образовательных услугах
        </li>
        <li>
          узнать актуальную информацию о мероприятиях и нормативно-правовых актах региона по вопросам трудоустройства
        </li>
        <li>
          качественно подобрать персонал
        </li>
      </ul>
    </div>
      <div class='block-list'> 
        <div class='block' id='block-search'> 
            <h3 class='block'>Поиск работы</h3>
            <div class="field is-grouped">
              <input class="input" type="text" placeholder="Найти работу"> 
              <button class="button is-white">&#128269</button>
            </div>
            <p class='block'>Региональный центр содействия трудоустройству молодежи располагает собственной базой вакансий, городским банком вакансий Комитета по труду и занятости населения Санкт-Петербурга и банком компании Headhunter</p>
            <a class='button is-white' id='arrow' href='pages/registration.php'> Перейти к поиску вакансий &#8594</a>
        </div>
        <div class='block' id='block-search'> 
            <h3 class='block'>Поиск персонала</h3>
            <div class="field is-grouped">
              <input class="input" type="text" placeholder="Найти резюме"> 
              <button class="button is-white">&#128269</button>
            </div>
            <p class='block'>Региональный центр приглашает руководителей фирм и начальников кадровых служб к сотрудничеству по вопросам трудоустройства, стажировок, качества и содержания подготовки молодых специалистов, выпускников и студентов учебных заведений</p>
            <a class='button is-white' id='arrow' href='pages/registration.php'> Перейти к поиску резюме &#8594</a>
        </div>
      </div>
  </main>
  <div id='map'>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab071b30e0b5bc92b5eb4d1e394ecb31d0497d73803cdbaed34057d11c028fe48&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
  </div>
  <footer>
    <div class="line">
      <div class="two-columns">
        <p><b>Городская студенческая биржа труда и обучения (ГСБТО)</b></p>
        <p><i class="fas fa-clock"></i> с 10:00 до 16:00</p>
        <p><i class="fas fa-map-marker-alt"></i> 191186, Санкт-Петербург, ул. Большая Морская, д. 18, СПбГУПТД, офис 131</p>
      </div>
      <div class="two-columns">
        <p><i class="fas fa-phone"></i> (812) 315-02-94, (812) 315-13-56</p>
        <p><i class="fas fa-fax"></i> (812) 315-02-94</p>
        <p><i class="fas fa-envelope"></i> birga@sutd.ru</p>
      </div>
    </div>
  </footer>
  </wrapper>
 </body>
</html>