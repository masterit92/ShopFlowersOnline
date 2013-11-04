<?php include("inc/meta.php"); ?>
   
    <title>Login</title>
  </head>
  <body>
    <div class="container loginwindow">

          <h1>Login To Admin Center</h1>
          <form action="actionLogin.php" method="POST">          
            <div class="control-group">
              <label class="control-label" for="username">Username</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="username" name="username" placeholder="Enter Your Username...">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input type="password" class="input-xlarge" id="password" name="password" placeholder="Enter Your Password...">
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Login To Dashboard" />
          </form>    
    </div> <!-- /container -->


