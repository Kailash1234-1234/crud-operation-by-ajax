<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page !!</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<div class="row">
    
    <div class="col-md-6">
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
    <div class="col">
    <h1>Show Subject name</h1>
    
       <div class="table table-bordered showdata1" id="showdata1">
       </div>
      
       
       <div >
      
       <input id="showdataajax" type="button" value="show data">
       </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        function loaddata(){
            $.ajax({
                url: 'selectdata.php',
                type: 'POST',
                success: function(data){
                    $("#showdata1").html(data);
                },
                error : function(){
                    alert("tttttttttttttttttttttttttttttt");
                } 
            })
        }
        loaddata();

        $("#btn").on("click", function(e){
            e.preventDefault();
            alert("i am register");
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
                    alert(data); 
                    loaddata();               }
            })
          
        })

        $("#showdataajax").on("click", function(){
            alert("hello i am lll")
            $.ajax({
                url: 'arrayajax.php',
                type: 'POST',
                success: function(data){
                    $("#showdata1").html(data);
                },
                error : function(){
                    alert("tttttttttttttttttttttttttttttt");
                } 
            })
        })
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>