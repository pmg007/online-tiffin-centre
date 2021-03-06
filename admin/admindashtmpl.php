<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../project/images/logo.png">
  <!--css-->
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/combine.css">
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/slick.css">
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/dashboard.css">
  <!--javascript-->
  
  <script type="text/javascript" src="../../bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript"src="../../bootstrap/js/slick.min.js"></script>

  
  <title>Dashboard</title>
</head>
<body>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header" style="margin-top: 15px;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../project/index.php"><span style="color: #90C531;font-weight: bolder;">Delicious Tiffins Gwalior</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" >
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="#"><span style="color: #90C531;font-weight: bold;">Hi, <?php echo $_SESSION['aname']; ?></span></a></li>
            <li><a href="adminlogout.php"><span style="color: #90C531;font-weight: bold;">Logout</span></a></li>
            <!--<li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>-->
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="adminchangepassword.php">Change password</a></li>
            <li><a href="adminaddfooditem.php">Add food item</a></li>
            <li><a href="adminupdatefooditem.php">Update food item</a></li>
            <li><a href="admindeletefooditem.php">Delete food item</a></li>
            <li><a href="adminvieworders.php">View orders</a></li>
            <li><a href="adminuserinfo.php">User info</a></li>
            <li><a href="admincontactformentries.php">Contact form entries</a></li>
            <li><a href="../../project/menu.php">Menu</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <!--<div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>-->

          <h2 class="sub-header"><?php echo 'Hi, '.$_SESSION['aname']; ?></h2>
        </div>
      </div>
    </div>
  </body>
</html>
