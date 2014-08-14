<?php require_once ("includes/header.php"); ?>

  <div id="container"  data-role="page" >
    <header>
      <div id="header">
        <h1> Company Name </h1>
        <h2> Service Sector </h2>
      </div>
    </header>
    <!--
    <div id="main" role="main">
    </div>
    -->
    
    <div id="pageHome" class="page">
        <div class="content">
            <div class="groupBox innerContent ">
                <?php include_once("includes/slider.php");?>
            </div>
        </div>
      
      <div class="separator"></div>
      
      <?php include("includes/menu.php"); ?>
      
    </div>
    <div class="clearfix"></div>
    
<?php require_once ("includes/footer.php");