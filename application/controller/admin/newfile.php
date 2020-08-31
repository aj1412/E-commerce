<?
session_start();


if(! $_SESSION['adminId'])
{

    echo "Online login can Access .<br><br><br>Click <a href='login.php' here</a>To Login<br>";
    exit;
}
?>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<link rel="stylesheet" href="
https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <script src="../../../adminassets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
</head>

<style>
  .table-responsive .table tr>td{
    vertical-align: middle;
  }
</style>

<form class="form-horizontal" action="../admin-function/addaction" method="POST" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Enter a Book in Database</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newname">Enter a new Book Name</label>  
  <div class="col-md-6">
  <input  name="name" type="text" placeholder="Eg : Do elephant ship" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newcode">Enter a Book Code</label>  
  <div class="col-md-6">
  <input  name="code" type="alphanumeric" placeholder="Eg: 452***" class="form-control input-md" required="">
    
  </div>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="newimage">Enter The image</label>
  <div class="col-md-4">
    <input type="file" name="image" class="input-file" >
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newprice">Enter a Book Price</label>  
  <div class="col-md-6">
  <input  name="price" type="number" placeholder="Eg: 100" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button type="submit" name="submit" class="btn btn-info" onclick="md.showNotification('top','right')">Submit</button>
  </div>
</div>

</fieldset>
</form>


<div class="container">
            <br />
            <br />
            <br />
            <h2 align="center">Ajax Live Data Search using Jquery PHP MySql</h2><br />
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Search</span>
                    <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
                </div>
            </div>
            <br />
            <div id="result"></div>
        </div>
        <div style="clear:both"></div>
        <br />
        
        <br />
        <br />
        <br />
    </body>
</html>


<script>
$(document).ready(function(){
    load_data();
    function load_data(query)
    {
        $.ajax({
            url:"http://myprojectspi.ga/application/controller/admin-function/fetch",
            method:"post",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
        });
    }
    
    $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
            load_data();            
        }
    });
});
</script>