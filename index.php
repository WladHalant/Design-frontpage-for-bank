<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
  <meta charset="utf-8">
  <title>Единое окно - все ссылки в одном месте!</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Добавляем стили Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Добавляем js Bootstrap -->
  <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="bootstrap/js/clock.js"></script>

</head>
<body>
<style>
  body {
    background-image: url(assets/icons/back.jpg);
    background-attachment:fixed;
    background-size:cover;
  }
</style>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-danger text-white m-3 rounded mybtn">

  <a href="#"> <img class="img-fluid" src="assets/icons/logo.png"></a>


  <div class="collapse.show navbar-collapse" id="navbarSupportedContent">


	<div class="col-sm-12 text-right">
	<div  class="row">
	<div id="doc_time" class="col-sm-12">
		 <script type="text/javascript">
 clock();
</script>
</div></div>
	<div class="row">
<div class="col-sm-12">
 <?php $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo ' IP-адрес: '.$_SERVER['REMOTE_ADDR'] ?>
<br></div></div>
	<div class="row">
	<div class="col-sm-12">
 Имя компьютера:
	<script language="javascript">
var net = new ActiveXObject("WScript.Network");
document.write(net.ComputerName);
</script>
</div></div>
 
</div>


  </div>
</nav>
 

<div class="row m-3">


      <div class="col-sm-9 mx-auto">
        <a class="tile red rounded mybtn" href="../bo.php">
          <div class="row"><span><H2>Банковские офисы</H2></span></div>
        </a>
      </div>
	  </div>
<div class="row m-3">
      <div class="col-sm-9 mx-auto">
        <a class="tile blue rounded mybtn" href="../ap.php">
          <div class="row"><span><H2>Административные пункты</H2></span></div>
        </a>
      </div>
	  </div>
  </div>

   <?php
 //------ Counter -----------------------------------
 define("_BBC_PAGE_NAME", "index");
 define("_BBCLONE_DIR", "./bbclone/");
 define("COUNTER", _BBCLONE_DIR."mark_page.php");
 if (is_readable(COUNTER)) include_once(COUNTER);
 ?>
</body>
</html>
