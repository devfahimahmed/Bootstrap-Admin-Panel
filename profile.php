<!DOCTYPE html>
<html lang="en">

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

<?php 
include('header.php');    
include('sidebar.php');    
?>


</head>

<body>


<div class="main">
<div class="container">
<!--Dashrow Start-->
<div class="row">

     
      <!--Start Dashboard-->
     
   <div class="container">
     <div class="row">

        <ol class="col-xs-12 col-md-10 col-md-offset-2 breadcrumb">
            <li class="blue">Profile</li>
          <i class="fa fa-gear fa-spin  fa-fw"></i>
        </ol>
    </div>          
    </div>
<div class="col-md-9 col-md-offset-3">
        <form>
          <div class="form-group col-xs-6">
            <label for="exampleInput1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Patient Name" required>
          </div>
          <div class="clearfix"></div>
          <div class="form-group col-xs-6">
            <label for="exampleInputPassword1">Gender</label>
                <select class="form-control">
                  <option>Male</option>
                    <option>Female</option>
                </select>
          </div> 
        <div class="clearfix"></div>
        <div class="form-group col-xs-6">
            <label for="exampleInputPassword1">Disease</label>
                <select class="form-control">
                  <option>Select Disease</option>
                  <option>Fever</option>
                  <option>Cancer</option>
                  <option>Broncitics</option>
                  <option>Injury</option>
                  <option>Acinetobacter</option>
                  <option>Adenovirus Infection</option>
                </select>
          </div>
        <div class="clearfix"></div>
        <div class="form-group col-xs-4">
            <label for="exampleInputPassword1">Address</label>
            <textarea type="text" class="form-control" id="exampleInputAddress1" placeholder="Address" required ></textarea>
          </div>
            <div class="clearfix"></div> 
             <div class="form-group col-xs-6">
                <label for="exampleInputAmount">Phone</label>
                <div class="input-group">
                  <div class="input-group-addon">+880</div>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="Phone" required>
                </div>
              </div>
            <div class="clearfix"></div>
          <div class="form-group col-xs-4">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Add image here.</p>
          </div>
        <div class="clearfix"></div>
          <button type="submit" class="btn btn-primary loading">Submit</button>
          
        </form>
   </div>    
</div><!--Dashrow end-->
</div><!--Container end-->
</div>
</body>

</html>