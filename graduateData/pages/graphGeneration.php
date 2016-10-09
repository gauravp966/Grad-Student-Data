<!DOCTYPE html>
<html>
  <head>
      <title>Graduate Outcome Data Processing</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <h4 class="h4">CSDMP</h4>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
              <a type="link" class="btn btn-primary" href="../index.html" role="button">Home</a>
              <a type="link" class="btn btn-primary" href="dataVerify.php" role="button">Data Editing</a>
              <a type="link" class="btn btn-primary" href="#" role="button">Dashboard</a>
              <a type="link" class="btn btn-primary" href="graphGeneration.php" role="button">Graph Generation</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav> <!-- /Nav -->
  		<div class="jumbotron">
      		<div class="container">
        		<h1>Welcome to CSDMP</h1>
        		<h3>Graph Generation</h3>
      		</div>
    	</div>
    	<div class="container-fluid">
    		<!--This is to hold all dropdown options-->
    		<div class="pull-left">
    			<!--Drop1-->
          <div class = "btn-group">
   					<button id="json-one" type = "button" class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">
      				School 
   					</button>
				  </div>
          <!--Drop2-->
				  <div class = "btn-group">
				    <button type = "button" class = "btn btn-primary dropdown-toggle" data-toggle = "dropdown">
				      Level   
				   </button>
				   
				  </div>
          <!--Drop3-->
          <div class = "btn-group">
            <button id="campus" type = "button" class = "btn btn-primary dropdown-toggle" data-toggle = "dropdown">
              Campus    
           </button>
          </div>
    		</div>
    		<!--This is to hold the graph generation-->
    		<div class="container pull-right">

          <div id="chart"></div>
    
          
    		</div>
    	</div>
      <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    	<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <script src="../javascripts/ddtest.js"></script>
 	</body>
  </html>