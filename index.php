<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page !!</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" 
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
  <link rel="stylesheet" 
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
  crossorigin="anonymous">
</head>
<body class="bg-warning">
<div class="container">
<div class="row mt-5">
    <div class="col-md-5">
    <h1 class="text-center">Register Here !!</h1>
        <form>
            <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
            </div><div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">
            </div><div class="form-group">
            <label for="place">Place</label>
            <input class="form-control" type="text" name="place" id="place">
            </div>
            <input type="button" class="btn btn-outline-success" id="btn" value="Register Here..">
        </form>
    </div>
    <div class="col-md-6">
      <h1 class="text-center">Show data By Ajax</h1>
       <div class=" showdata1" id="showdata1">
       </div>
          <!-- Modal -->
          <div class="modal fade" id="mymodel" tabindex="-1" role="dialog" aria-labelledby="mymodel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h1 class="text-center">!! Update Details Here !!</h1>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script>
    $(document).ready(function(){
      //laod data in php ajax
        function loaddata(){
            $.ajax({
                url: 'selectdata.php',
                type: 'POST',
                success: function(data){
                    $("#showdata1").html(data);
                },
                error : function(){
                    alert("error");
                } 
            })
        }
        loaddata();
        // insert data into database by ajax
        $("#btn").on("click", function(e){
            e.preventDefault();
            var name=$("#name").val();
            var email=$("#email").val();
            var password=$("#password").val();
            var place=$("#place").val();
            // alert(name+email+password+place);

            $.ajax({
                url: "register.php",
                type: "POST",
                data: {name:name, email:email, password:password, place:place},
                success: function(data){
                   // alert(data); 
                    loaddata();               }
            })
          
        })
        //delete data from database by ajax php
        $(document).on("click",".delete-user", function(e){
            if(confirm("Are you Sure Do you really want to delete this User ?")){
            // alert("i am delete");
            var userId= $(this).data("id");
           // alert(userId);
            $.ajax({
                url: "deleteUser.php",
                type: "POST",
                data:{uId:userId},
                success : function(data){
                 //   alert(data);
                    if(data==1){
                        alert("delete success fully");
                        loaddata();
                    }
                }
            })
        }
        })
        //update data form by ajax
        $(document).on("click",".update-user", function(e){
         var userId= $(this).data("updateid");
          // alert(userId);
            $.ajax({
                url: "updateform.php",
                type: "POST",
                data:{uid:userId},
                success : function(data){
                   $(".modal-body").html(data);
                }
            })
        })
        //update data into database by ajax
        $(document).on("click",".update-form", function(e){
            if(confirm("Are you Sure Do you really want to Update your Details?")){
            var uname=$("#uname").val();
            var uemail=$("#uemail").val();
            var upassword=$("#upassword").val();
            var uplace=$("#uplace").val();    
            var uuserId= $(this).data("uid");
           //  alert(uname+uemail+upassword+uplace+uuserId);
          
            $.ajax({
                url: "updateUser.php",
                type: "POST",
                data:{uuid:uuserId, uname:uname, uemail:uemail, upassword:upassword, uplace:uplace},
                success : function(data){
                  if(data==1){
                     // alert("updated successfully");
                     $("#exampleModalScrollable").slideUp();
                     loaddata();
                  } else {
                      alert("Some thing went wrong")
                  }
                }
            })
            }
        })
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>