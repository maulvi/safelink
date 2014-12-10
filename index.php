<?php
// Willy Arisky
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Link Decrypter</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="/"><?php echo $title; ?></a></li>
              <li><a href="http://citizen.co.id">News</a></li>
              <li><a href="http://tv.citizen.co.id">TV Online</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
                <h3><b>What is <?php echo $title; ?>?</b></h3>
Link Decrypter is a service that is used to protect a link.
With Link Decrypter, you also protect your blog / website belongs to you because it uses a null referer, so it can not be tracked.
Link Decrypter is free, so we put some ads to make this website alive.
        <center>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Top -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-9743974578479731"
             data-ad-slot="6859678607"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});

        </script>
        </center>

         <center> <a class="btn btn-md btn-primary" href="<?php echo $domain; ?>/redirect/?site=<?php echo base64_encode($go); ?>" role="button">Visit Link &raquo;</a></center>
        
        <center>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Top -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-9743974578479731"
             data-ad-slot="6859678607"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});

        </script>
        </center>
        <h3>Random Post</h3>
        <?php
        $xml=simplexml_load_file($feed);
        $xmlink=$xml->channel->item[0]->link;
        echo "<b><i class=\"glyphicon glyphicon-send\"></i> <a href=" .$xmlink. ">" .$xml->channel->item[0]->title ."</a></b><br/>";
        echo "<b><i class=\"glyphicon glyphicon-send\"></i> <a href=" .$xmlink. ">" .$xml->channel->item[1]->title ."</a></b><br/>";
        echo "<b><i class=\"glyphicon glyphicon-send\"></i> <a href=" .$xmlink. ">" .$xml->channel->item[2]->title ."</a></b><br/>";
        echo "<b><i class=\"glyphicon glyphicon-send\"></i> <a href=" .$xmlink. ">" .$xml->channel->item[3]->title ."</a></b><br/>";
        echo "<b><i class=\"glyphicon glyphicon-send\"></i> <a href=" .$xmlink. ">" .$xml->channel->item[4]->title ."</a></b><br/>";
        ?>
      </div>

    </div> <!-- /container -->
<center><?php echo $title; ?> - Copyright &copy; 2015</center>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
