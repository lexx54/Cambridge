<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambridge Language Institute</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style720.css">
  <link rel="stylesheet" href="css/style1020.css">

</head>
<body>
  <nav></nav>

  <header>
  <div class="h-img-container">
    <picture>
      <source srcset="images/headerLG.jpg" media="(min-width:720px)">
      <img src="images/headerSM.jpg" alt="">
    </picture>
    <h1>Cambridge</h1>
  </div>
  <div class="h-sign-container">
    <p id="signup">Sign Up</p>
    <p id="signin">Sign In</p>
  </div>
  </header>

  <main>
  <!-- *******************Institute Section********************* -->
    <section class="m-institute-container">
      <h1>Cambridge Language Institute</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, ab voluptatum. Autem sed quod saepe consectetur ipsa fugiat dolorum eius odio voluptates modi porro minus, nostrum reprehenderit repellendus ipsum hic!</p>
    </section>

  <!-- *******************Levels Section********************* -->
    <section class="m-levels-container">
      <h2>Levels</h2>
      <div id="levels">
        <section class="lvl-container">
          <div class="lvl-img"><img src="" alt=""></div>
          <article>
          <h1>GoGo</h1>
          <div>
          <p class="lvl-description">Designed for kids</p>
            <ul class="lvl-sub">
              <li class="lvl-sub-lvls">Gogo 1</li>
              <li class="lvl-sub-lvls">Gogo 2</li>
              <li class="lvl-sub-lvls">Gogo 3</li>
              <li class="lvl-sub-lvls">Gogo 4</li>
              <li class="lvl-sub-lvls">Gogo 5</li>
              <li class="lvl-sub-lvls">Gogo 6</li>
            </ul>
          </div>
          </article>
        </section>
        <section class="lvl-container">
          <div class="lvl-img"><img src="" alt=""></div>
          <article>
            <h1>Basic</h1>
            <div>
            <p class="lvl-description">Design for Young And adults to start learning</p>
            <ul class="lvl-sub">
              <li class="lvl-sub-lvls">Introductory <span>(16 lecciones)</span></li>
              <li class="lvl-sub-lvls">Basic <span>(15 lecciones)</span></li>
              <li class="lvl-sub-lvls">Intermediate <span>(10 lecciones)</span></li>
            </ul>
            </div>
          </article>
        </section>
        <section class="lvl-container">
          <div class="lvl-img"><img src="" alt=""></div>
          <article>
            <h1>Advance</h1>
            <div>
            <p class="lvl-description">Design for Young And adults to push your English level</p>
            <ul class="lvl-sub">
              <li class="lvl-sub-lvls">Advance I <span>(20 lecciones)</span></li>
              <li class="lvl-sub-lvls">Advance II <span>(20 lecciones)</span></li>
            </ul>
            </div>
          </article>
        </section>
      </div>
    </section>
  <!-- *******************Teachers Section********************* -->
    <section class="m-teachers-container"></section>

  <!-- *******************Comments Section********************* -->
    <section class="m-comments-container"></section>
  </main>

  <?php require_once __DIR__ . "./templates/footer.html.php";?>
  <script src="scripts/script.js" type="module"></script>
</body>
</html>
