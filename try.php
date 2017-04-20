<?php
//require 'part.content.php';
//require 'main.php';
//$v = $_GET['varname'];
/*echo"hi";
$file = '/owncloud/apps/myap/templates/saved.txt';
// Open the file to get existing content
$current = file_get_contents($file);
echo $current;
// Append a new person to the file
$current .= "John Smith\n";
// Write the contents back to the file
file_put_contents($file, $current);
$loggedUser = getOCloggedUser();
require_once <xxx>
if ($loggedUser.empty()) echo "You have to login on OC first!";
else echo "Hi ".$loggedUser;




$file = '/owncloud/apps/myap/templates/saved.txt';
// The new person to add to the file
$person = "John Smith\n";
// Write the contents to the file,
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
//$fp=fopen('saved.txt','a');
*/
//p($_['user']);
//$txt = 'hi';
 //$myfile = file_put_contents('saved.txt', p($_['user']).PHP_EOL , FILE_APPEND | LOCK_EX);
//echo file_get_contents($myfile);

//require_once '/var/www/owncloud/lib/base.php';
  // require_once '/var/www/owncloud/lib/public/user.php';
   //$val=getDisplayName( );

//echo $val;

//$v = $_SESSION['varname'];
//session_start();
//$v = $_GET['regName'];
//echo $v
$q='ree';
//$txt = p($_['user']);
$myfile = file_put_contents('saved.txt', $v.PHP_EOL , FILE_APPEND | LOCK_EX);
$vall=file_get_contents('/home/student/Downloads/owncloud(1).log');
echo $vall;
 //$myfile = file_put_contents('saved.txt', $v.PHP_EOL , FILE_APPEND | LOCK_EX);
//$myfile = fwrite('saved.txt', $q.PHP_EOL , FILE_APPEND | LOCK_EX);

//fwrite($fp,$_['user']."\n\n");

//fclose($fp);

//header("location: "$_SERVER['HTTP_REFERER']);

//echo "HEY THERE";

//$file = '/home/student/Downloads/owncloud(1).log';
//$searchfor = '"time"';

// the following line prevents the browser from parsing this as HTML.
//header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
//$contents = file_get_contents($file);
// escape special characters in the query
//$pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
//$pattern = "/.*$searchfor.*\$/m";
//echo $pattern;
// search, and store all matching occurences in $matches
//if(preg_match($pattern, $contents, $matches)){
//echo $matches;
//echo $matches;
//  echo "Found matches:\n";

//$keywords = preg_quote($pattern, '/');
 /*
$searchfor = 'time';
$pattern = "/.*$searchfor.*\$/m";
$contents = file_get_contents($file);
$handle = @fopen("/home/student/Downloads/owncloud(1).log", "r");

if ($handle)
if(preg_match_all($pattern, $contents, $matches)) {
    while (($buffer = fgets($handle, 29)) !== false) {
      echo $buffer;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
echo implode("\n",$matches[0]);
echo $matches[0];

else{
   echo "No matches found";

*/
?>















