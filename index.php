<?php require_once '_cms_user/_cms_lib.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>StatiCMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/staticms.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
    <![endif]-->

<?php if($_SESSION['admin'])include('headjs.php');?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  </head>

  <body>
<div class="alert alert-info" id="log" style="display:none"></div>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1 class="editable" id="1"><?=getContent(1)?></h1>
        <p class="editable" id="3"><?=getContent(3)?></p>
      </div>

<div id="login" class="modal hide fade in" style="display: none; ">
            <div class="modal-header">
              <a class="close" data-dismiss="modal">×</a>
		<img src="/img/enterpassword.png">
            </div>
            <div class="modal-body">

    <form class="form-inline" id="myform">
    <input type="password" class="input-small" placeholder="Podaj hasło" id="haslo">
	<p class="logmsg" id="logmsg"><br /></p>
            <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Anuluj</a>
			<input type="submit" id="login" class="btn btn-success" value="OK"/>

            </div>
	</form>
</div>
    
</div>
<script src="/js/bootstrap.js"></script>

      <hr>

      <footer>
        <p class="editable" id="2"><?=getContent(2)?></p>
		<?php if ($_SESSION['admin']==1) echo '<a href="_cms_user/_cms_auth.php" role="button" class="btn btn-mini">Zakończ edycję</a>';?>
		<?php if ($_SESSION['admin']!=1) echo '<a href="#login" role="button" class="btn btn-mini" data-toggle="modal">Edytuj stronę</a>';?>
		  
		</footer>

    </div> <!-- /container -->

<script src="/js/login.js">
</script>

  </body>
</html>

