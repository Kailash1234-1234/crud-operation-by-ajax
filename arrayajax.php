<?php
/**
 * Recipe class file
 *
 * PHP Version 5.2
 *
 * @category Recipe
 * @package  Recipe
 * @author   Lorna Jane Mitchell <lorna@ibuildings.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/recipes
 */
$myarray=[
    ['<b>SNO</b>','Subject 1','subject 2','subject 3','subject 4','subject 5','subject 6','subject 7','subject 8','subject 9','subject 10','subject 11'],
    ['<b>Subject Name</b>','php','phpmysql','java','C','C++','javaScript','perl','NodeJs','Database','Python','hadoop'],
    ['<b>Subject Code</b>','102','103','104','105','106','107','109','1033','908','1091','880']
];

 //print_r($myarray);
// $result="<ul>";
// for ($i=0; $i < count($myarray); $i++) { 
//   echo "<li>".$myarray[$i]."</li>";
// }
// $result="</ul>";
// echo $result;

for ($i=0;$i<count($myarray);$i++) {
    echo "<tr>";
    for ($j=0;$j<count($myarray[$i]);$j++) {
        echo('<td>' . $myarray[$i][$j] . '</td>');
    } 
    echo "<tr>";
}
  
?>

