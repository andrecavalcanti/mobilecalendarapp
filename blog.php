<?php require_once ("includes/header.php"); ?>

  <div id="container" data-role="page" >
    
    
    
    <header>
      <div class="upperMenu">
        <?php include("includes/inner-menu.php"); ?>
      </div>
            
      <div id="header">
        <a href="index.php" class="homeButton" data-direction="reverse"></a>
        <a href="#" class="menuButton"></a>
        <h1> Blog</h1>
        <h2> Company Name, Service Sector</h2>
        <!--<a href="contact.php" class="nextButton">&raquo;</a>-->
      </div>
    </header>
    
    <!--
    <div id="main" role="main">
    </div>
    -->
    
    <div id="pageBlog" class="page">
      
  
    <!-- if you want a header -->
    <!--
      <div class="content">
          <div class="groupBox innerContent">
            
            <div id="banner" class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/blog.jpg" />
                </li>
              </ul>
            </div>
              
          </div>
      </div>
      -->

      <div id="blogSearch" class="innerContent">
        <input type="search" class="searchField" placeholder="search blog">
      </div>
      <div id="blog" class="blogListing" >
        <ul>
          
          <li>
            <div class="groupBox innerContent">
              <div class="postDetails left">
                <a class="thumb" href="blog-detail.php">
                  <img src="img/slides/1.jpg" alt="Post 1">
                </a>
              </div>
              
              <div class="description">
                <div class="title">
                  <a href="blog-detail.php"> Company going public </a>
                </div>
                <div class="about">
                  This is the biggest day for our company as we will be going public.This is the biggest day for our company as we will be going public.This is the biggest day for our company as we will be going public.
                </div>
                <a href="blog-detail.php" class="website">  &raquo; </a>
              </div>
              <div class="clearfix"></div>
              
              <div class="tags left">
                <a class="category" href="#"> News </a>
                <a class="date" href="#"> 12 Aug 2012</a>
                <a class="writer" href="#"> Rolf Mandy</a>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            
          </li>
          
          
          
          
          <li>
            <div class="groupBox innerContent">
              <div class="postDetails left">
                <a class="thumb" href="blog-detail.php">
                  <img src="img/slides/4.jpg" alt="Post 1">
                </a>
              </div>
              
              <div class="description">
                <div class="title">
                  <a href="blog-detail.php"> Release preview postponed.</a>
                </div>
                <div class="about">
                  We have delayed the release of the new software..
                </div>
                <a href="blog-detail.php" class="website">  &raquo; </a>
              </div>
              <div class="clearfix"></div>
              
              
              <div class="tags left">
                <a class="category" href="#"> Press</a>
                <a class="date" href="#"> 10 Aug 2012</a>
                <a class="writer" href="#"> Mark D</a>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            
          </li>
          
          
          
          
          
          <li>
            <div class="groupBox innerContent">
              <div class="postDetails left">
                <a class="thumb" href="blog-detail.php">
                  <img src="img/slides/6.jpg" alt="Post 1">
                </a>
              </div>
              
              <div class="description">
                <div class="title">
                  <a href="blog-detail.php"> You guys rock</a>
                </div>
                <div class="about">
                  Thank you for visiting us on our grand opening! Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <a href="blog-detail.php" class="website">  &raquo; </a>
              </div>
              <div class="clearfix"></div>
              
              
              <div class="tags left">
                <a class="category" href="#"> News </a>
                <a class="date" href="#"> 5 Aug 2012</a>
                <a class="writer" href="#"> Neo</a>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            
          </li>


          
          
          <li>
            <div class="groupBox innerContent">
              <div class="postDetails left">
                <a class="thumb" href="blog-detail.php">
                  <img src="img/slides/6.jpg" alt="Post 1">
                </a>
              </div>
              
              <div class="description">
                <div class="title">
                  <a href="blog-detail.php"> We have rolled out </a>
                </div>
                <div class="about">
                  All of LA is invited to visit the inaugration of our highly awaited offices. All of LA is invited to visit the inaugration of our highly awaited offices. All of LA is invited to visit the inaugration of our highly awaited offices. 
                </div>
                <a href="blog-detail.php" class="website">  &raquo; </a>
              </div>
              <div class="clearfix"></div>
              
              
              <div class="tags left">
                <a class="category" href="#"> News </a>
                <a class="date" href="#"> 1 Aug 2012</a>
                <a class="writer" href="#"> Josh Jonah</a>
                <div class="clearfix"></div>
              </div>
              
              <div class="clearfix"></div>
            </div>
            
          </li>
          
          
        </ul>
      </div>

    </div>
    <div class="clearfix"></div>

    


<?php require_once ("includes/footer.php");