<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visual Admin Dashboard - Preferences</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Visual Admin</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">
          <?php require 'menu.php';?>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Add</h2>
            <form action="addUserToDb.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">First Name</label>
                    <input type="text" name="inputFirstName" class="form-control" id="inputFirstName" placeholder="John" required="required">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Last Name</label>
                    <input type="text" name="inputLastName" class="form-control" id="inputLastName" placeholder="Smith" required="required">                  
                </div> 
              </div>
              <div class="row form-group">
                
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Email</label>
                    <input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="admin@company.com">                  
                </div> 
                 <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">Username</label>
                    <input type="text" name="inputUsername" class="form-control" id="inputUsername" placeholder="username" required="required">                  
                </div>
                 
              </div>
              
              
              <div class="row form-group">
                
                 <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputPass">Password</label>
                    <input type="password" name="inputPass" class="form-control" id="inputPass" placeholder="******" required="required">                      
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputRePass">Re-type Password</label>
                    <input type="password" name="inputRePass" class="form-control" id="inputRePass" placeholder="******" required="required">                 
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12">
                  <label class="control-label templatemo-block">Upload Image</label> 
                  <!-- <input type="file" name="fileToUpload" id="fileToUpload" class="margin-bottom-10"> -->
                  <input type="file" name="fileToUpload" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false">
                  <p>Maximum upload size is 5 MB.</p>                  
                </div>
              </div>
              <div class="form-group text-right">
                <input type="submit" class="templatemo-blue-button" value="Submit" />
                <input type="reset" class="templatemo-white-button" Value="Reset"/>
              </div>                           
            </form>
          </div>
         <div class="templatemo-flex-row flex-content-row">
            <footer class="text-right">
            <p>Copyright &copy; 2084 Ajith World
            | Designed by <a href="http://www.ajithworld.in" target="_parent">Ajith</a></p>
          </footer>         
        </div>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>
