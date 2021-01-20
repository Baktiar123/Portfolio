<!DOCTYPE html>
<html>

<head>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script type="text/javascript">
    $(window).on('scroll', function(){
      if ($(window).scrollTop()){
        $('nav').addClass('black');
      }
      else{
        $('nav').removeClass('black');
      }
    })
  </script>

  <style type="text/css">
    .nav {
      width : 100%;
      background-color: rgba(0,0,0,.1);
      position: fixed;
      z-index: 1;
    }

    .nav.black{
      background-color: rgba(0,0,0,.2);
    }

    .nav ul{
      text-align: center;
    }

    .nav ul li{
      display: inline-block;
    }

    .nav ul li a{
      display: block;
      text-decoration: none;
      text-transform: uppercase;
      color : #ffff;
      font-size: 20px;
      font-family: 'Raleway', sans-serif;
      letter-spacing: 1px;
      line-height: 10px;
      font-weight: 600;
      padding: 25px;
      transition: all ease 0.5s;
    }

    .nav ul li a:hover{
      background-color: #211b4385;
    }

  </style>

</head>

<body>
  <nav>
    <ul>
      <li>
        <a href='#'>Item 1</a>
      </li>
      <li>
        <a href='#'>Item 2</a>
      </li>
      <li>
        <a href='#'>Item 3</a>
      </li>
      <li>
        <a href='#'>Item 4</a>
      </li>
      <li>
        <a href='#'>Item 5</a>
      </li>
    </ul>
  </nav>

<header>
  <div class='container'><br><br><br><br><br><br><br><br><br><br>
    <h1>Opacity on scroll</h1>
  </div>
</header>

<div id='nav-bg'></div>
<section id='about'>
  <div class='container'>
    <p>Header Fixed Transparan Ala Seo Techman.<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
</section>

</body>


</html>
