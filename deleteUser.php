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
$id=$_POST['uId'];
// echo "hello ".$id;
$sql="DELETE FROM `register` WHERE `id` = $id";
if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    echo 0;
}
?>