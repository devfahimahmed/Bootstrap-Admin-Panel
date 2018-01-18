<!DOCTYPE html>
<html lang="en">

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
    </head>

<body>

<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
           <img alt="Brand" src="images/logo.png">
      </a>
    </div>
       <!--Profile-->
        <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Profile <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="profile.php">Change Avatar</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"> </span> Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                  </ul>
                </li>
         </ul> 
          <!--Start Notification-->
        <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-bell"></span><span class="badge">2</span><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <div class="alert alert-default alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Admin</strong> Please Complete Your profile
                     </div>
                    <div class="alert alert-default alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Admin</strong> Please Password is weak
                     </div>
                  </ul>
                </li>
         </ul><!--End Notification-->

                        <!--Message-->
        <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-envelope"></span><span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-message">
                       <li>
                           <div>    
                               <strong>Fahim</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</p>    
                           </div>
                       </li>
                       <li class="divider" role="separator"></li>    
                   
                  </ul>
                      
              <ul class="dropdown-menu dropdown-message">
                       <li>
                           <div>    
                               <strong>Fahim</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</p>    
                           </div>
                       </li>
                       <li class="divider" role="separator"></li>    
                      <li>
                           <div>    
                               <strong>Fahim</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</p>    
                           </div>
                       </li>
                </ul> 
            
            <ul class="dropdown-menu dropdown-message">
                       <li>
                           <div>    
                               <strong>Fahim</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</p>    
                           </div>
                       </li>
                       <li class="divider" role="separator"></li>    
                      <li>
                           <div>    
                               <strong>Fahim</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</p>    
                           </div>
                       </li>
                </ul>
                </li>
         </ul>  
                              
                                            
                     <!--Form-->
        <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span></button>
        </form> 

        
    </div>
</nav>


<nav class="navbar navbar-default navbar-fixed-bottom footer">
  <div class="container">
        <p class="muted pull-right animated bounce">Copyright © Fahim Ahmed 2017</p>
  </div>
</nav>
</body>


</html>