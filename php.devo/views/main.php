<!DOCTYPE html>
<html>
<head>
	<title>Shareboard</title>

	<link rel="stylesheet" href="<?php ROOT_PATH; ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php ROOT_PATH; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php ROOT_PATH; ?>assets/css/bootstrap-grid.css">
  <link rel="stylesheet" href="<?php ROOT_PATH; ?>assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php ROOT_PATH; ?>assets/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php ROOT_PATH; ?>assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php ROOT_PATH; ?>assets/css/style.css">

</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"> <!-- nav for the navbar -->
      <a class="navbar-brand" href="#">Shareboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li>
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
          </li>
          <li>
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
          </li>
        </ul>

         

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">

          <li>
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
          </li>
          <li>
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
          </li>
          </ul>

      </div>
    </nav>

    <main role="main" class="container" style="margin-top: 50px" > <!-- main for the main container body -->
        <div class = "row">
        	<?php require ($view); ?>
        </div>
    </main>
    	

</body>
</html>