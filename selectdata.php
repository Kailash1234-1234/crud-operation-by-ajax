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
$query = "select * from register";
$result= mysqli_query($con, $query) or die("error");
echo'<table class="table table-bordered table-hover">';
if (mysqli_num_rows($result)>0) {
    echo"</tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>place</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo"</tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['place']}</td>
        <td>
          <a href='#' data-updateid='{$row['id']}'
          class='btn btn-outline-primary update-user' 
          data-toggle='modal' data-target='#mymodel'>Update</a>
        </td>
        <td>
        <a href='#' data-id='{$row['id']}'
         class='btn btn-outline-danger delete-user'>Delete</a>
        </td></tr>";
    }
}
echo "</table>";
// echo $output;
?>