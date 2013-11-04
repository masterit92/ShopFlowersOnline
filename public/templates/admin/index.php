<?php
  if (isset($_SESSION['user_admin'])) {
    header('Location: ' . URL_BASE . 'admin/index');
  }
?>
<?php include("inc/meta.php"); ?> 
<?php include("inc/header.php"); ?>    
    <div class="container">
      <div class="row-fluid">
        <div class="span3"> <!-- Sidebar -->
          <div class="well">
            <?php include("inc/sidebar.php"); ?>         
          </div>
        </div> <!-- /Sidebar -->

        <div class="span9">
        <?php include_once TEMPLATE; ?>          
          <p></p>
        </div>

      </div>
      <div class="row-fluid">
        <div class="span12">
          <p>You are logged in as: </p>
        </div>
      </div>
    </div> <!-- /container -->