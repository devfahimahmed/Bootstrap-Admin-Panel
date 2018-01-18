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
    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="css/responsive.css">

<?php 
include('header.php');    
include('sidebar.php');    
?>


</head>

<body>


       <!--Star nav-->


<div class="container">
<!--Dashrow Start-->
<div class="main">
<div class="row">

     
      <!--Start Dashboard-->
     
   <div class="container">
     <div class="row">

        <ol class="col-xs-12 col-md-10 col-md-offset-2 breadcrumb">
          <li>View Patient &nbsp;</li>
          <i class="fa fa-eye  fa-fw"></i>
            <span class="sr-only">Loading...</span>
        </ol>
    </div>          
    </div>
    
   <div class="col-md-10 col-md-offset-2">
    <div class="panel panel-success">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <h2 class="text-center pull-left" style="padding-left: 30px;"> <span class="glyphicon glyphicon-list-alt"> </span> Details </h2>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="col-xs-12 col-md-4">
                <label> Search </label>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control input-md" name="search">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-md btn-warning"> <span class=" glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="panel-body table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="text-center"> No. </th>
              <th class="text-center"> Name </th>
              <th class="text-center"> Mobile No. </th>
              <th class="text-center"> Gender </th>
              <th class="text-center"> Address </th>
              <th class="text-center"> Action </th>
            </tr>
          </thead>

          <tbody>
            <tr class="edit" id="detail">
              <td id="no" class="text-center"> 1 </td>
              <td id="name" class="text-center"> ABC </td>
              <td id="mobile" class="text-center"> 5412547854 </td>
              <td class="text-center">Male</td>
              <td id="city" class="text-center"> New York </td>
              <td id="action" class="text-center"><span class="btn btn-primary  glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;<span class="btn btn-warning  glyphicon glyphicon-trash" aria-hidden="true"></span>
              </td>
            </tr>

            <tr>
              <td class="text-center"> 2 </td>
              <td class="text-center"> DFG </td>
              <td class="text-center"> 4025478965 </td>
              <td class="text-center">Male</td>
              <td class="text-center"> Los Angelos </td>
              <td id="action" class="text-center"><span class="btn btn-primary  glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;<span class="btn btn-warning  glyphicon glyphicon-trash" aria-hidden="true"></span>
              </td>              
            </tr>

            <tr>
              <td class="text-center"> 3 </td>
              <td class="text-center"> XYZ </td>
              <td class="text-center"> 4102369745 </td>
               <td class="text-center">Male</td>
              <td class="text-center"> Las Vegas </td>
              <td id="action" class="text-center"><span class="btn btn-primary  glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;<span class="btn btn-warning  glyphicon glyphicon-trash" aria-hidden="true"></span>
              </td>              
            </tr>

            <tr>
              <td class="text-center"> 4 </td>
              <td class="text-center"> JKL </td>
              <td class="text-center"> 2536541028 </td>
              <td class="text-center"> Male </td>
              <td class="text-center"> California </td>
              <td id="action" class="text-center"><span class="btn btn-primary  glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;<span class="btn btn-warning  glyphicon glyphicon-trash" aria-hidden="true"></span>
              </td>              
            </tr>

            <tr>
              <td class="text-center"> 5 </td>
              <td class="text-center"> DFG </td>
              <td class="text-center"> 4025478965 </td>
              <td class="text-center">Male</td>
              <td class="text-center"> Los Angelos </td>
              <td id="action" class="text-center"><span class="btn btn-primary  glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;<span class="btn btn-warning  glyphicon glyphicon-trash" aria-hidden="true"></span>
              </td>              
            </tr>
          </tbody>
        </table>
      </div>

      <div class="panel-footer">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-md-8">
              </div>
              <div class="col-md-4">
              <p class="muted pull-right"><strong> </strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div><!--Dashrow end-->
</div>
</div><!--Container end-->
<script>  $(document).ready(function(){
      $(".form-control").popover({title: "Search Here", placement: "top"});
     })</script>
</body>

</html>