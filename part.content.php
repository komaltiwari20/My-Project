<p>Hello World <?php p($_['user']) ;

$v=p($_['user']);

//$myfile = fputs('saved.txt', $v.PHP_EOL , FILE_APPEND | LOCK_EX);
//$myfile = file_put_contents('saved.txt', $v.PHP_EOL , FILE_APPEND | LOCK_EX);
//$q=10;
//$myfile = file_put_contents('saved.txt', $q.PHP_EOL , FILE_APPEND | LOCK_EX);
?></p>

<p><button id="hello">click me</button></p>
<?php

session_start();
$a=p($_['user']);
echo $a;


$txt = 'hello';
$myfile = file_put_contents('saved.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
//$myfile = fputs
//('saved.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
echo file_get_contents('saved.txt');
//echo "hola";
session_start();

$_SESSION['regName'] = $v;

?>
<form method="get" action="try.php">
    <input type="hidden" name="varname" value="p($_['user'])">
    <input type="submit">
</form>
<form action="/owncloud/apps/another/templates/try.php" method="post">
<input type="submit" value="view activity log">
</form>
<p><textarea id="echo-content">
    Send this as ajax
</textarea></p>
<p><button id="echo">Send ajax request</button></p>

Ajax response: <div id="echo-result"></div>
