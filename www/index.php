<?php
require '../app/app.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<a href="pop.php">Verificar novos emails agora</a> |
<a href="stat.php">Emails</a> |

<pre><?php
$log = passthru('tac ../log/popper.log');
echo $log;
?></pre>
</body>
</html>