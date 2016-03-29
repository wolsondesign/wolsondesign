<?php

if($_POST["submit"]) {
    $recipient="wolsondesign@gmail.com";
    $subject="Wolson Design request";
    $sender=$_POST["cd-name"];
    $company=$_POST["cd-company"];
    $senderEmail=$_POST["cd-email"];
    $message=$_POST["cd-textarea"];
    $url="https://dribbble.com/wolsondesign";

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent. In the meantime you can check out my <a href=$url>Dribbble profile</a></p>";
}

?><!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Need to reach Andrew Wolson? Look no further. - Wolson Design</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="navigation">
          <div class="grid">
            <a href="#menu" class="menu-link">Menu</a>
            <nav id="menu" role="navigation">
              <ul>
                <li><a href="/work">work</a></li>
                <li><a href="/about">about</a></li>
                <li class="active"><a href="/contact">contact</a></li>
                <li><a href="/thoughts">thoughts</a></li>
              </ul>
            </nav>
          </div>
        </header>
        <section id="masthead">
          <article class="grid">
            <a href="/">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/71894/tiger-badge-head.png" />
            </a>
            <h4>Andrew Wolson</h4>
          </article>
        </section>
        <main class="grid">
          <article class="col-3-3">
            <form id="contact-form" class="cd-form floating-labels" method="post" action="index.php">
              <fieldset>
                <section class="col-1-3">
                  <legend><h1>D_S_GN IS<br> A GAM_<br> L_T’S PLA_</h1></legend>
                </section>
                <section class="col-2-3">
                  <div class="success"><?=$thankYou ?></a></div>
                  <div>
                    <label class="cd-label" for="cd-name" name="cd-name">Name</label>
                    <input class="user" type="text" name="cd-name" id="cd-name" required>
                  </div> 
                  <div>
                    <label class="cd-label" for="cd-company">Company</label>
                    <input class="company" type="text" name="cd-company" id="cd-company">
                  </div>
                  <div>
                    <label class="cd-label" for="cd-email" name="cd-email">Email</label>
                    <input class="email" type="email" name="cd-email" id="cd-email" required>
                  </div>
                  <div>
                    <label class="cd-label" for="cd-textarea">Whats up?</label>
                    <textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
                  </div>
                  <div>
                    <input type="submit" name="submit" value="Send Message">
                  </div>
                </section>
              </fieldset>
            </form>
          </article>
        </main>
        <footer class="grid">
          <article class="col-3-3">
            <aside class="col-1-2">
                <h5>Let's be friends</h5>
                <ul class="flat-list">
                  <li><a href="https://dribbble.com/wolsondesign">Dribbble</a> &middot;</li>
                  <li><a href="http://codepen.io/wolsondesign/">CodePen</a> &middot; </li>
                  <li><a href="https://plus.google.com/u/0/+AndrewWolson?rel=author">g+</a> &middot; </li>
                  <li><a href="https://twitter.com/wolsondesign">Twitter</a></li>
                </ul>
                <h5 class="copyright">Copyright 2016 Andrew Wolson</h5>
              </aside>
          </article>
        </footer>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-17380590-1','auto');ga('send','pageview');
        </script>
    </body>
</html>
