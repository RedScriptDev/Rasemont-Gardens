<!doctype html>
<html class="no-js" lang="">
<head>
<?php include('inc/meta.php') ?>
</head>
<body>
  <!--[if lt IE 10]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
<?php include('inc/header.php') ?>
    <section class="page--content">
    <div class="page--title"><h1>Contact Us</h1></div>
    </div>
<div class="contact--form">
  <form id="leadcap" method="post" action="inc/mailer.php">
  <fieldset>
    <label>First Name</label>
    <input type="text" name="fname" required/>
  </fieldset>
  <fieldset>
    <label>Last Name</label>
    <input type="text" name="lname" required/>
  </fieldset>
   <fieldset>
    <label>Best Contact Number</label>
    <input type="tel" pattern='[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}' maxlength="10" name="phone" required/>
  </fieldset>
  <fieldset>
    <label>Email Address</label>
    <input type="email" name="email" required/>
  </fieldset>
<input type="submit" value="Contact Us"/>
  </form>

  <div id="form--messages"></div>
  <div id="loading"><img src="images/ajax-loader.gif"/></div>
</div>

<div class="contact--img">
  <img src="images/purpleflower.jpg" />
</div>
</section>

    <?php include('inc/footer.php') ?>
</body>
</html>
