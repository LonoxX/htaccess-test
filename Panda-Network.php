<!--
##########################################################################
#      Scripte dürfen nur verändert bzw. auf eigenen Bedürfnisse	     #
#              angepasst werden, wenn die Copyrighthinweise              #
#                      leserlich und sichtbar bleiben.                   #
#                                                                        #
#                         Powert & Copyright                             #
#                       Dev-MB | panda-network.de                        #
#                                                                        #
##########################################################################
-->
<!DOCTYPE html>
<html lang="de">

<head>
  <!-- Meta tag Keywords -->
  <meta charset="utf-8">
  <title>Panda-Network htaccess tester.</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
  <meta name="author" content="Panda-Network.de | LonoxX">
  <meta name="publisher" content="Panda-Network.de | LonoxX">
  <meta name="keywords" content="htaccess Tester, Panda-Network.de,Panda-Network">
  <meta name="description" content="htaccess Tester">
  <meta name="robots" content="INDEX,FOLLOW">
  <meta name="revisit-after" content="14days">
  <link href="https://cdn.panda-network.de/img/favicon.ico" rel="shortcut icon">
  <link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
</head>

<body id="home">
  <?php

echo "<h1>Panda-Network Apache <tt>.htaccess</tt> Tester.</h1>";
if (strpos($_SERVER['REQUEST_URI'], 'Panda-Network.php') === false) {
    echo "<p><tt>mod_rewrite</tt> is working! You used the path <tt>" . $_SERVER['REQUEST_URI'] . "</tt> to request this page.</p>";
} elseif (is_readable(__DIR__.'/.htaccess') ) {
    echo "<p>The file .htaccess exists and is readable to the webserver. These are its contents: </p>\n<textarea style='width: 700px; height: 200px;'>";
    echo file_get_contents(__DIR__.'/.htaccess');
    echo "</textarea>";
} else {
    echo "<p><strong>Error:</strong> The file .htaccess does not exist or it is not readable to the webserver. <br><br>Retieve a new version of the file here, and place it in your webroot. Make sure it is readable to the webserver.</p>";
    die();
}
?>
</body>

</html>