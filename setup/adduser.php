<?php require "../pdo_connect.php"; require "../global_defaults.php"; ?>
<html><head>
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Project SA - Register</title>
  <link rel="stylesheet" type="text/css" href="../source/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="../source/dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="../source/dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="../source/dist/components/icon.css">


  <script src="../source/themes/default/assets/library/jquery.min.js"></script>
  <script src="../source/dist/components/transition.js"></script>
  <script src="../source/dist/components//form.js"></script>
  <script src="../source/dist/components//transition.js"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
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
  background: url('../source/images/loader.gif') 50% 50% no-repeat rgb(249,249,249);
}

  </style>

  <div class="loader"></div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>


  
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            username: {
              identifier  : 'myusername',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your username'
                },

          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },

                {
                  type   : 'myusernaem',
                  prompt : 'Please enter a valid email'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        User Registration
      </div>
    </h2>
    <form method="post" action="rauth.php" class="ui large form">
      <div class="ui stacked segment">
        <div class="field">

        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="Username">
          </div>
        </div>
<br>
        <div class="field">
          <div class="ui left icon input">
            <i class="mail icon"></i>
            <input type="text" name="email" placeholder="Email">
          </div>
        </div>
<br>

        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
<br>

        <input type="submit" class="ui fluid large teal submit button" value="Login"></input>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Already Registered? <a target="_blank" href="login.php">Login Here</a>
    </div>
  </div>
</div>




</body></html>