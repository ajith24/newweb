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
          <ul>
            <li><a href="index.html"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Charts</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Data Visualization</a></li>
            <li><a href="maps.html"><i class="fa fa-map-marker fa-fw"></i>Maps</a></li>
            <li><a href="manage-users.html"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
            <li><a href="#" class="active"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
            <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Add</h2>
            <form action="adddataToDb.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
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
              </div>
              
              <label class="control-label templatemo-block">Select Date of Birth</label>   
              <div class="row form-group">
                <div class="col-lg-2 col-md-2 form-group"> 
                    
                            
                  <select class="form-control" name="inputBdyear" required="required">
                  <option value="0000" selected="selected" disabled="disabled">Year</option>
                  <?php for($i = 1950; $i<=2016; $i++){
                  			echo "<option value='$i'>$i</option>";
                  	
                  		}
                  ?>                     
                  </select>
                            
                </div>
                <div class="col-lg-2 col-md-2 form-group"> 
                       
                  <select class="form-control" name="inputBdMonth">
                  	<option value="0" selected="selected" disabled="disabled">Month</option>
                    <option value="1">Jan</option>
                    <option value="2">Feb</option>
                    <option value="3">Mar</option>          
                    <option value="4">Apr</option>          
                    <option value="5">May</option>          
                    <option value="6">Jun</option>          
                    <option value="7">Jul</option>          
                    <option value="8">Aug</option>          
                    <option value="9">Sep</option>
                    <option value="10">Oct</option>          
                    <option value="11">Nov</option>          
                    <option value="12">Dec</option>                                          
                  </select>
                </div>
               <div class="col-lg-2 col-md-2 form-group"> 
                          
                  <select class="form-control"  name="inputBdDay">
                  <option value="0" selected="selected" disabled="disabled">Day</option>
                   <?php for($i = 1; $i<=31; $i++){
                  			echo "<option value='$i'>$i</option>";
                  	
                  		}
                  ?>                     
                  </select>
                </div>
              </div>
              
               <label class="control-label templatemo-block">Select Date of Birth</label>   
              <div class="row form-group">
                <div class="col-lg-2 col-md-2 form-group"> 
                    
                                
                  <select class="form-control"  name="inputAdYear" required="required">
                  <option value="0000" selected="selected" disabled="disabled">Year</option>
                  <?php for($i = 1950; $i<=2016; $i++){
                  			echo "<option value='$i'>$i</option>";
                  	
                  		}
                  ?>                     
                  </select>
                            
                </div>
                <div class="col-lg-2 col-md-2 form-group"> 
                             
                  <select class="form-control" name="inputAdMonth">
                  	<option value="0" selected="selected" disabled="disabled">Month</option>
                    <option value="1">Jan</option>
                    <option value="2">Feb</option>
                    <option value="3">Mar</option>          
                    <option value="4">Apr</option>          
                    <option value="5">May</option>          
                    <option value="6">Jun</option>          
                    <option value="7">Jul</option>          
                    <option value="8">Aug</option>          
                    <option value="9">Sep</option>
                    <option value="10">Oct</option>          
                    <option value="11">Nov</option>          
                    <option value="12">Dec</option>                                          
                  </select>
                </div>
               <div class="col-lg-2 col-md-2 form-group"> 
                  
                  <select class="form-control" name="inputAdDay">
                  <option value="0" selected="selected" disabled="disabled">Day</option>
                   <?php for($i = 1; $i<=31; $i++){
                  			echo "<option value='$i'>$i</option>";
                  	
                  		}
                  ?>                     
                  </select>
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
          <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
          </footer>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>
