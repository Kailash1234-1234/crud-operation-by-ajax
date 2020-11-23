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
$id= $_POST['uid'];
// echo $id;
$query = "SELECT * from register WHERE `id`=$id";
$result= mysqli_query($con, $query) or die("error");
if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
        echo ' <form>
        <div class="form-group">
        <label for="name">User Id</label>
        <input class="form-control" readonly type="text" name="uid" id="uid" 
        value="'.$row['id'].'">
        </div>
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="uname" 
        value="'.$row['name'].'">
        </div>
        <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="uemail" 
        value="'.$row['email'].'">
        </div><div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="text" name="password" id="upassword" 
        value="'.$row['password'].'">
        </div><div class="form-group">
        <label for="place">Place</label>
        <input class="form-control" type="text" name="place" id="uplace"
         value="'.$row['place'].'">
        </div>
        <input type="button" class="btn btn-outline-success update-form"
         data-dismiss="modal" data-uid="'.$row['id'].'" value="Update details">
        </form>';
    }
}

?>