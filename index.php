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
    <a href="signup.php?sign=up" id="signup">Sign Up</a>
    <a href="signup.php?sign=in" id="signin">Sign In</a>
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
          <div class="lvl-img"></div>

          <article>
          <h1>GoGo</h1>
          <div>
          <p class="lvl-description">Designed for kids to keep them motivated and focus in their path to become bilinguals</p>
            <ul class="lvl-sub">
              <li class="lvl-sub-lvls">Gogo 1 <span>(16 lessons)</span></li>
              <li class="lvl-sub-lvls">Gogo 2 <span>(16 lessons)</span></li>
              <li class="lvl-sub-lvls">Gogo 3 <span>(16 lessons)</span></li>
              <li class="lvl-sub-lvls">Gogo 4 <span>(16 lessons)</span></li>
              <li class="lvl-sub-lvls">Gogo 5 <span>(16 lessons)</span></li>
              <li class="lvl-sub-lvls">Gogo 6 <span>(16 lessons)</span></li>
            </ul>
          </div>
          </article>
        </section>
        <section class="lvl-container">
          <div class="lvl-img"></div>
          <article>
            <h1>Basic</h1>
            <div>
            <p class="lvl-description">Design for Young And adults to start learning</p>
            <ul class="lvl-sub">
              <li class="lvl-sub-lvls">Introductory <span>(16 Lessons)</span></li>
              <li class="lvl-sub-lvls">Basic <span>(15 Lessons)</span></li>
              <li class="lvl-sub-lvls">Intermediate <span>(10 Lessons)</span></li>
            </ul>
            </div>
          </article>
        </section>
        <section class="lvl-container">
          <div class="lvl-img"></div>
          <article>
            <h1>Advanced</h1>
            <div>
            <p class="lvl-description">Design for Young and adults to push their English level</p>
            <ul class="lvl-sub">
              <li class="lvl-sub-lvls">Advance I <span>(20 Lessons)</span></li>
              <li class="lvl-sub-lvls">Advance II <span>(20 Lessons)</span></li>
            </ul>
            </div>
          </article>
        </section>
      </div>
    </section>
  <!-- *******************Teachers Section********************* -->
    <section class="m-teachers-container">
      <h2>Teachers</h2>

      <div class="teachers-carrousel">
        <article class="teachers-card">
          <div class="teachers-card-img">
            <img class="img-suplement" src="https://placeimg.com/200/200/people/3"></img>
          </div>
          <section class="teachers-card-desc">
            <h3>Lexington Chaparro</h3>
            <p>2 Years of experience</p>
            <p class="teacher-stars"> ⭐ ⭐ ⭐ ⭐</p>
          </section>
        </article>

        <article class="teachers-card">
          <div class="teachers-card-img">
            <img class="img-suplement" src="https://placeimg.com/200/200/people/2"></img>
          </div>
          <section class="teachers-card-desc">
            <h3>Maria Farfan</h3>
            <p>1 Year of Experience</p>
            <p class="teacher-stars"> ⭐ ⭐ ⭐</p>
          </section>
        </article>

        <article class="teachers-card">
          <div class="teachers-card-img">
            <img class="img-suplement" src="https://placeimg.com/200/200/people/1"></img>
          </div>
          <section class="teachers-card-desc">
            <h3>Jose Farfan</h3>
            <p>3 Years of Experience</p>
            <p class="teacher-stars"> ⭐</p>
          </section>
        </article>

        <article class="teachers-card">
          <div class="teachers-card-img">
            <img class="img-suplement" src="https://placeimg.com/200/200/people/5"></img>
          </div>
          <section class="teachers-card-desc">
            <h3>Pepe Lopez</h3>
            <p>1 Year of Experience</p>
            <p class="teacher-stars"> ⭐ ⭐ ⭐</p>
          </section>
        </article>
      </div>
    </section>

  <!-- *******************Comments Section********************* -->
    <section class="m-comments-container">
      <h2>Leave us Your Comments, Opinions and Ideas</h2>
      <form action="comment.php" method="post">
        <div class="form-name">
          <label for="fullname">Name</label>
          <input type="text" name="fullname" placeholder=" Your name...">
        </div>

        <div class="form-comment">
          <label for="comment">Comment</label>
          <textarea name="comment" id="" cols="30" rows="10" placeholder=" Your Comment..."></textarea>
        </div>
        <div class="form-input">
          <input type="submit" value="Send comment">
        </div>

      </form>
    </section>

    <section class="m-display-container">
    <?php include_once __DIR__ . "./comment.php";?>
      <?php $displayComment;?>
    </section>
  </main>

  <?php require_once __DIR__ . "./templates/footer.html.php";?>
  <script src="scripts/script.js" type="module"></script>
</body>
</html>