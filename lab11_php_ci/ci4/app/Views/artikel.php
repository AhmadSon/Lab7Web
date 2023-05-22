<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>

    <h1><?= $title; ?></h1>
    <hr>
    <h1><?= $content; ?></h1>

    <br>


      
<h1>Hello World!</h1>
<p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
  lorem elit, iaculis innisl volutpat, malesuada tincidunt arcu. Proin
  in leo fringilla, vestibulum mi porta, faucibus felis. Integer
  pharetra est nunc, nec pretium nunc pretium ac.
</p>
<a href="#"
  ><button class="button" style="vertical-align: middle">
    <span>Learn more </span>
  </button></a
>
</section>
<section id="wrapper">
<section id="main">
  <div class="row">
    <div class="box">
      <img
        src="https://dummyimage.com/120/db7d25/fff.png"
        alt=""
        class="image-circle"
      />
      <h3>Heading</h3>
      <p>
        Donec sed odio dui. Etiam porta sem malesuada magna mollis
        euismod.
      </p>
      <a href="#"
        ><button type="button" class="button-img">
          View detail
        </button></a
      >
    </div>
    <div class="box">
      <img
        src="https://dummyimage.com/120/3e73e6/fff.png"
        alt=""
        class="image-circle"
      />
      <h3>Heading</h3>
      <p>
        Donec sed odio dui. Etiam porta sem malesuada magna mollis
        euismod.
      </p>
      <a href="#"
        ><button type="button" class="button-img">
          View detail
        </button></a
      >
    </div>
    <div class="box">
      <img
        src="https://dummyimage.com/120/71e6d4/fff.png"
        alt=""
        class="image-circle"
      />
      <h3>Heading</h3>
      <p>
        Donec sed odio dui. Etiam porta sem malesuada magna mollis
        euismod.
      </p>
      <a href="#"
        ><button type="button" class="button-img">
          View detail
        </button></a
      >
    </div>
  </div>

  <hr class="divider" />
  <article id="article" class="entry">
    <h2>First featurette heading.</h2>
    <img src="https://dummyimage.com/150/7b8a70/fff.png" alt="" />
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Vestibulum lorem elit, iaculis in nisl volutpat, malesuada
      tincidunt arcu. Proin in leo fringilla, vestibulum mi porta,
      faucibus felis. Integer pharetra est nunc, nec pretium nunc
      pretium ac.
    </p>
  </article>
  <hr class="divider" />
  <article class="entry">
    <h2>First featurette heading.</h2>
    <img
      src="https://dummyimage.com/150/7b8a70/fff.png"
      alt=""
      class="right-img"
    />
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Vestibulum lorem elit, iaculis in nisl volutpat, malesuada
      tincidunt arcu. Proin in leo fringilla, vestibulum mi porta,
      faucibus felis. Integer pharetra est nunc, nec pretium nunc
      pretium ac.
    </p>
  </article>
</section>
<aside id="sidebar">
  <div class="widget-box">
    <h3 class="title">Widget Header</h3>
    <ul>
      <li><a href="#">Widget Link</a></li>
      <li><a href="#">Widget Link</a></li>
      <li><a href="#">Widget Link</a></li>
      <li><a href="#">Widget Link</a></li>
      <li><a href="#">Widget Link</a></li>
    </ul>
  </div>
  <div class="widget-box">
    <h3 class="title">Widget Text</h3>
    <p>
      Vestibulum lorem elit, iaculis in nisl volutpat, malesuada
      tincidunt arcu. Proin in leo fringilla, vestibulum mi porta,
      faucibus felis. Integer pharetra est nunc, nec pretium nunc
      pretium ac.
    </p>
  </div>
</aside>
</section>


    

    <?= $this->include('template/footer'); ?>
</body>
</html>