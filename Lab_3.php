<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="The best cheese in the whole world" />
  <meta property="og:title" content="Arla Natura Lite" />
  <meta property="og:description" content="The best cream cheese" />
  <meta property="og:image" content="https://www.arla.ru/4ab6a6/globalassets/arla-global/arla-in-local-areas/ru/banners/product-images/400light-300.png?preset=product-mobile" />
  <link rel="shortcut icon" href="./images//favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="./style/backgrounds.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>Arla Natura</title>
</head>

<body>
  <header>
    <a class="logo" href="#s"><img src="https://www.arla.ru/UI/img/arla-logo.e700c018.svg" alt="" /></a>
    <div class="header__menu">
      <nav class="header__nav" tabindex="1">
        <ul>
          <li><a href="#about">О ПРОДУКТЕ</a></li>
          <li><a href="#features">ФИШЕЧКИ</a></li>
          <li><a href="#order">КУПИТЬ</a></li>
          <li><a href="#we">О НАС</a></li>
          <li><a href="#contacts">СВЯЗЬ</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="content-wrapper">
    <div class="content-wrapper__about" id="about">
      <div class="content-wrapper__back">
        <img src="https://www.arla.ru/495bb6/globalassets/arla-global/arla-in-local-areas/ru/website-update-2019/2191x999-top_v5.jpg?preset=full-desktop" alt="ad" />
      </div>

      <div class="content-wrapper__text">
        <p class="brake-symbol">☫</p>
        <p>
          Желтый сыр Arla Natura® «Сливочный светлый» в удобной нежирной
          семейной упаковке помогает оставаться здоровым. Богат легкоусвояемым
          кальцием: в 100 г продукта содержится 86% дневной нормы.
        </p>
        <p>
          <strong>Состав:</strong> Молоко нормализованное пастеризованное,
          соль поваренная пищевая, бактериальная закваска мезофильных
          молочнокислых микроорганизмов, молокосвертывающий ферментный
          препарат микробного происхождения.
        </p>
        <p></p>
      </div>
    </div>
    <div class="content-wrapper__features" id="features">
      <div class="content-wrapper__back">
        <img src="https://www.arla.ru/496190/globalassets/arla-global/products---overview/all-our-brands/arla-cheese/20160229-arla-yellow_cheese_hero_2700x1000_01.jpg?preset=full-desktop" alt="girl_photo" />
      </div>

      <p class="brake-symbol">☫</p>
      <div class="content-wrapper__text">
        <h3 class="kicker">Сыр</h3>
        <h3 class="kicker">Arla Natura® «Сливочный светлый»</h3>
        <ul class="content-wrapper__list">
          <li>Легкий</li>
          <li>Больше белка</li>
          <li>Меньше жира</li>
        </ul>
        <p>
          Мы в Arla Foods убеждены, что молоко – гениальное изобретение
          природы! Это первое, что пробует человек, появляясь на свет, а затем
          молоко может стать частью здорового питания на протяжении всей его
          жизни.
        </p>
        <p>
          Кроме того, мы уверены: для правильного питания важно не только
          употреблять здоровую пищу, но и соблюдать правильный баланс. Все
          дело в том, в каком соотношении и как вы ее употребляете.
        </p>
        <p>
          Мы считаем важным сохранить все полезные свойства молока при его
          переработке и сделать наши продукты безопасными для каждого члена
          вашей семьи.
        </p>
      </div>
    </div>
    <div class="content-wrapper__order" id="order">
      <div class="content-wrapper__order-form">
        <h3 class="kicker">Купить наш Arla Natura</h3>
        <p>Вы можете купить сыр Arla Natura прямо здесь</p>
        <button id="myBtn" class="content-wrapper__btn order-btn" data-toggle="modal" data-target="#buyModal">
          Купить
        </button>
      </div>
    </div>

    <!-- Overlay -->
    <div id="myModal" class="modal">
      <!-- Контент віконця -->
      <div class="modal-content">
        <div class="modal__header">
          <i class="fa fa-times-circle close fa-3x"></i>
          <h4>Подтвердите покупуку</h4>
        </div>

        <?php
        // define variables and set to empty values
        $amount = $country = $fname = $lname = "";
        $tel = $mail = $gender = $address = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["fname"])) {
            $fnameErr = "Name is required";
          } else {
            $fname = test_input($_POST["fname"]);
          }

          if (empty($_POST["mail"])) {
            $mailErr = "Email is required";
          } else {
            $mail = test_input($_POST["mail"]);
          }

          if (empty($_POST["lname"])) {
            $lname = "";
          } else {
            $lname = test_input($_POST["lname"]);
          }

          if (empty($_POST["amount"])) {
            $amount = "";
          } else {
            $amount = test_input($_POST["amount"]);
          }

          if (empty($_POST["address"])) {
            $addressrErr = "address is required";
          } else {
            $address = test_input($_POST["address"]);
          }
        }
        function test_input($data)
        {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        <form class="modal__form" action="" method="POST">
          <div class="modal__item">
            <span class="bolded">Товар:</span>
            <span>Сыр Arla Natura® Light 400g</span>
          </div>
          <label class="bolded modal__item" for="amount">Количество:</label>
          <input class="modal__item" type="number" name="amount" id="amount" min="1" autocomplete="off" />
          <div class="modal__radio">
            <input type="radio" name="country" id="ukraine" />Украина
            <input type="radio" name="country" id="checz" />
            Чехия
            <input type="radio" name="country" id="denmark" />
            Дания
          </div>
          <br />
          <input class="modal__item" type="text" id="fname" name="fname" placeholder="Имя" autocomplete="off" />
          <input class="modal__item" type="text" id="lname" name="lname" placeholder="Фамилия" autocomplete="off" /><br />
          <input class="modal__item" type="tel" name="tel" id="tel" placeholder="Телефон" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
          <input class="modal__item" type="email" name="mail" id="mail" placeholder="Email"><br>
          <textarea class="modal__item" name="address" id="address" placeholder="Адрес"></textarea><br>
          <input type="submit" class="content-wrapper__btn modal__btn" id="sub__btn" value="Подтвердить">
          <input type="reset" class="content-wrapper__btn modal__btn reset-btn" value="Отменить">

        </form>

        <?php
          echo "<p>FROM FILE</p>";
          $myFile = fopen("data.log", "a+") or die("Unnable to open file!");
          $text = $_SERVER["REMOTE_ADDR"] . "#" . $_POST["fname"] . "#" . $_POST["mail"] . "#" . $_POST["address"] . "\n";
          fwrite($myFile, $text);
          

          $file = file("data.log");
          foreach ($file as $val) {
            $arr = explode("#", $val);
            echo "Ім'я " . $arr[1] . "<br>";
          }
          fclose($myFile);
        ?>
      </div>
    </div>

    <p class="brake-symbol">☫</p>
    <div class="content-wrapper__text">
      <h3 class="kicker">Кто мы?</h3>
      <div class="column">
        <p>
          История компании Arla Foods началась больше 130 лет назад, в 80-х
          годах XIX века. В это время молочные фермеры Дании и Швеции стали
          создавать небольшие кооперативы и вкладывать средства в
          переработку молока. Это позволило им эффективнее использовать
          произведенное в их хозяйствах молоко и делать более качественную
          продукцию. Доходы, полученные от продажи молока и молочных
          продуктов, фермеры делили поровну между собой. Такая организация
          бизнеса гарантировала процветание их фермам, а им самим, их семьям
          и потомкам – стабильное будущее.
        </p>
        <p>
          Многолетний опыт фермеров полностью оправдал идею кооперации.
          Объединившись в единое целое, небольшие фермерские кооперативы
          почувствовали себя намного увереннее. После Второй мировой войны в
          Дании насчитывалось уже 1650 кооперативных предприятий молочной
          промышленности. Постепенно они расширили свою деятельность и
          перешли от создания локальных и региональных кооперативов к
          межнациональным.
        </p>
        <p>
          В 2000 году объединились крупнейший датский кооператив MD Foods и
          шведский Arla ekonomisk Forening. Таким образом, была создана
          компания под названием Arla Foods. Позже идею кооперации молочных
          фермеров поддержали в других странах. Посредством слияний к Arla
          Foods присоединились владельцы кооперативных хозяйств в
          Великобритании, Нидерландах, Германии, Бельгии и Люксембурге.
          Расширение Arla Foods продолжается и сегодня. Благодаря этому
          фермерские хозяйства компании становятся сильнее.
        </p>
      </div>
    </div>
  </div>
  <footer class="footer-distributed">
    <div class="footer-left">
      <a class="logo" href="#s"><img src="https://www.arla.ru/UI/img/arla-logo.e700c018.svg" alt="" /></a>

      <div class="footer-links">
        <h4>Центральный офис</h4>
        <div class="footer__item">
          <img src="https://img.icons8.com/pastel-glyph/24/000000/earth-planet.png" />
          <span>Украина</span> <br />
        </div>
        <div class="footer__item">
          <img src="https://img.icons8.com/ios/24/000000/city-buildings.png" />
          <span>03148, г. Киев</span>
          <span>Донецкая ул., 50, корп. 2</span><br />
        </div>
        <div class="footer__item">
          <img src="https://img.icons8.com/ios/24/000000/ringing-phone.png" />
          <span>Телефон: +38 (099) 346-60-06</span>
        </div>

        <p class="footer__item">
          <a href="https://goo.gl/maps/vcnJh2KQBjK1SWaV9" target="_blank" rel="noopener">Найти в Google Картах</a>
        </p>
      </div>

      <p class="footer-company-name">Arla © 2020</p>
    </div>

    <div class="footer-right">
      <!--<p>Свяжитесь с нами</p>-->

      <form action="#" method="GET">
        <input type="text" autocomplete="off" name="email" placeholder="Email" />
        <input type="text" autocomplete="off" name="name" placeholder="Имя" />
        <textarea name="message" placeholder="Сообщение"></textarea>
        <input class="content-wrapper__btn" type="reset" value="Удалить" />
        <input class="content-wrapper__btn" type="submit" value="Отправить" />
      </form>
    </div>
  </footer>
  </div>
  <script src="./script/script.js"></script>
</body>

</html>