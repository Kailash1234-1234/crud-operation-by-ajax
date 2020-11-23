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
require 'config.php';
$name= $_POST['name'];
$email=$_POST['email'];
$password= $_POST['password'];
$place=$_POST['place'];
$query = "INSERT INTO register(`name`, `email`, `password`, `place`) 
VALUES('{$name}','{$email}','{$password}', '{$place}')";
 $result= mysqli_query($con, $query) or die("error");
if ($result == true) {
    echo "success";
} else {
    echo "error";
}
?>