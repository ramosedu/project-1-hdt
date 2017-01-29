

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Project 1 API</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project 1 Github API</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="https://www.youtube.com/" target="_blank">Youtube</a></li>
            <li><a href="http://www.oracle.com/" target="_blank">Oracle</a></li>
            <li><a href="https://github.com/" target="_blank">Github</a></li>
            <li><a href="https://www.indeed.com" target="_blank">Indeed</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="">Pie Charts <span class="sr-only">(current)</span></a></li>
            <li><a href="#andrewrepo">Andrew's Repository</a></li>
            <li><a href="https://developer.github.com/v3/">Github API</a></li>
   			<li><a href="https://dev.twitter.com/docs">Twitter API</a></li>
   			<li><a href="https://developers.facebook.com">Facebook API</a></li>
   			<li><a href="https://dev.mysql.com/doc/employee/en/">MySQL API</a></li>
          </ul>
    
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Pie Charts</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
	            <canvas id="myChart" width="250" height="250"></canvas>
				<script src="piechart1.js">
	    		</script>
	              <h4>Descriptions</h4>
	              <span class="text-muted">Null Descriptions vs Non-Null Descriptions</span>
            </div>


            <div class="col-xs-6 col-sm-3 placeholder">
	              <canvas id="myChart2" width="250" height="250"></canvas>

				<script src="piechart2.js">
	    		</script>
	              <h4>Home Pages</h4>
	              <span class="text-muted">Null Home Pages vs Non-Null Home Pages</span>
            </div>

            <div class="col-xs-6 col-sm-3 placeholder">
	              <canvas id="myChart3" width="250" height="250"></canvas>

				<script src="piechart3.js"></script>
	              <h4>Forks</h4>
	              <span class="text-muted">True Forks vs Non-True Forks</span>
            </div>

            <div class="col-xs-6 col-sm-3 placeholder">
              <canvas id="myChart4" width="250" height="250"></canvas>
				<script src="piechart4.js"></script>
              <h4>Issues</h4>
              <span class="text-muted">Issues vs Non-Issues</span>
            </div>
          </div>

          
          <h2 class="sub-header">Andrew's Repository</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Repo Name</th>
                  <th>Size</th>
                  <th>ID</th>
                  <th>Forks</th>
                </tr>
              </thead>
              <tbody>
                
              	<? include 'project1.php';?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
