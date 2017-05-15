<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <br>
    <div class="container">
    	<div class="row">
    		<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="login-panel panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">Sign In</h3>
		            </div>
		            <div class="panel-body">
		                <!-- <form role="form"> -->
		                <?php echo form_open('login/in', array('role'=>'form'));?>
		                    <fieldset>
		                        <div class="form-group">
		                            <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus="">
		                        </div>
		                        <div class="form-group">
		                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
		                        </div>
		                        <div class="checkbox">
		                            <label>
		                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
		                            </label>
		                        </div>
		                        <!-- <a href="javascript:;" class="btn btn-sm btn-success">Login</a> -->
		                        <button type="submit" name="login" class="btn btn-sm btn-success">Login</button>
		                    </fieldset>
		                </form>
		            </div>
		         </div>
			</div>
			<div class="col-md-4"></div>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>