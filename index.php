<!DOCTYPE html>
<?php session_start(); require "pdo_connect.php";
require "global_defaults.php";
 ?>
<!-- saved from url=(0045)http://semantic-ui.com/examples/homepage.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Home - <?php echo $main_sm_name; ?></title>
  <link rel="stylesheet" type="text/css" href="source/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="source/dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="source/dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="source/dist/components/transition.css">

  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }

</style>
<style>
.loader {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('source/images/loader.gif') 50% 50% no-repeat rgb(249,249,249);
}

  </style>

  <div class="loader"></div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>


  <script src="source/themes/default/assets/library/jquery.min.js"></script>
  <script src="source/dist/components/visibility.js"></script>
  <script src="source/dist/components/sidebar.js"></script>
  <script src="source/dist/components/transition.js"></script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
</head>
<body class="pushable">

<!-- Following Menu -->
<div class="ui large top fixed menu transition hidden">
  <div class="ui container">
  <a href="../index.php" class="active item">Home</a>
  <a href="jobs.php" class="item">Jobs</a>
  <a href="scripts" class="item">Scripts</a>
  <a href="about.php" class="item">About</a>
       <?php if ($_SESSION['loggedin'] !== 1) { ?>
      
  <a href="login.php" class="item">Login</a>
  <a href="login.php" class="item">Signup</a>
 <?php } else { ?>
 <?php if ($_SESSION['admin'] !== 1) { ?>
  <a href="ucp/" class="item">UCP</a>
 <?php } else { ?>
    <a href="ucp/" class="item">UCP</a>
    <a href="ucp/" class="item">ACP</a>
 <?php }
  } ?>



    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu left">
  <a href="../index.php" class="active item">Home</a>
  <a href="jobs.php" class="item">Jobs</a>
  <a href="scripts" class="item">Scripts</a>
  <a href="about.php" class="item">About</a>
 <?php if ($_SESSION['loggedin'] !== 1) { ?>
  <a href="login.php" class="item">Login</a>
  <a href="login.php" class="item">Signup</a>
 <?php } else { ?>
 <?php if ($_SESSION['admin'] !== 1) { ?>
  <a href="ucp/" class="item">UCP</a>
 <?php } else { ?>
    <a href="ucp/" class="item">UCP</a>
    <a href="ucp/" class="item">ACP</a>
 <?php }
  } ?>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>

           <a href="../index.php" class="active item">Home</a>
  <a href="jobs.php" class="item">Jobs</a>
  <a href="scripts" class="item">Scripts</a>
  <a href="about.php" class="item">About</a>

  
      <div class="right item">
 <?php if ($_SESSION['loggedin'] !== 1) { ?>
  <a href="login.php" class="ui inverted button">Login</a>
  <a href="login.php" class="ui inverted button">Signup</a>
 <?php } else { ?>
 <?php if ($_SESSION['admin'] !== 1) { ?>
  <a href="ucp/" class="ui inverted button">UCP</a>
 <?php } else { ?>
    <a href="ucp/" class="ui inverted button">UCP</a>
    <a href="ucp/" class="ui inverted button">ACP</a>
 <?php }
  } ?>
  </div>

      </div>
    </div>


    <div class="ui text container">

      <h1 class="ui inverted header">
        <?php echo $main_sm_name; ?>
      </h1>
      <h2 class="ui inverted orange header"><?php echo $main_sm_tagline; ?></h2>
      <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>
    </div>

  </div>

    <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3 class="ui header"><?php echo $main_sm_box1_head; ?></h3>
          <p><?php echo $main_sm_box1_text; ?></p>
     <!--      <a href="scripts"  class="ui huge button">Check Our Scripts Out</a> -->
        </div>
        <div class="column">
        <h3 class="ui header"><?php echo $main_sm_box2_head; ?></h3>
          <p><?php echo $main_sm_box2_text; ?></p>
    <!--      <a href="jobs.php"  class="ui huge button">Check Our Jobs Out</a> -->
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
          <h3 style="text-align:center;" class="ui header"><?php echo $main_sm_about_head; ?></h3>
          <p style="text-align:center;"><?php echo $main_sm_about_text; ?></p>
      <div class="row">
        <div class="center aligned column">
      <!--    <a href="about.php"  class="ui huge button">View More</a> -->


        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3><?php echo $main_sm_other; ?></h3>
          <p><?php echo $main_sm_other_under; ?></p>
        </div>
        <div class="column">
          <h3><?php echo $main_sm_other2; ?></h3>
          <p>
            <?php echo $main_sm_other_under; ?>
          </p>
        </div>
      </div>
    </div>
  </div>

<!-- if you really want to you can edit the text here. It looks intimidating but it's plain English -->
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="contact.php" class="item">Contact The Developer</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a class="item">UNDER CONSTRUCTION</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Thank you for visiting this site, I did the PHP and then used the Semantic Framework to do the css.</p>
        </div>
      </div>
    </div>
  </div>
</div>



</body></html>
