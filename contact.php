<?php require_once ("includes/header.php"); ?>

  <div id="container" data-role="page" >
    
    
    <header>
      
      <div class="upperMenu">
        <?php include("includes/inner-menu.php"); ?>
      </div>

      <div id="header">
        <a href="index.php" class="homeButton" data-direction="reverse"></a>
        <a href="#" class="menuButton"></a>
        <h1> Contact</h1>
        <h2> Company Name, Service Sector</h2>
        <!--<a href="page1.php" class="nextButton">&raquo;</a>-->
        <!--
        <a href="index.php">
          <div class="iButtonBody">
            <div>
              <span></span>
            </div>
            <p>Back</p>
          </div>
        </a>
        -->
        
      </div>
    </header>
    <!--
    <div id="main" role="main">
    </div>
    -->
    
    <div id="pageContact" class="page">
        <div class="content">
            <div class="groupBox innerContent">
                
              <div id="banner" class="flexslider">
                <ul class="slides">
                  <li>
                    <img src="img/contact.jpg" />
                  </li>
                </ul>
              </div>
              
            </div>
        </div>

        <div class="content">
          
          
            <div id="pivotTabs" class="pivotTabs">
              <div id="scroller">
                <ul id="thelist">
                  <li> <a href="#" data-value="#contactTab"> contact us</a> </li>
                  <li> <a href="#" data-value="#socialTab"> getting social</a> </li>
                  <li> <a href="#" data-value="#mapTab"> view our location</a> </li>
                  <li> <a href="#" class="goToFirst">&laquo;</a> </li>
                </ul>
              </div>
            </div>
        
            
            <div id="contactTab" class="pivotTab" >

              <h5 class="sectionTitle"> My Address</h5>              
              <div class="groupBox ">
                <ul>
                  <li>
                    <p class="value">
                      51st street, 5th Avenue <br/>
                      New York<br/>
                      The States<br/>
                    </p>
                  </li>
                </ul>
              </div>
              
              <h5 class="sectionTitle"> We would love to listen from you.</h5>
              
              
              
               <div class="ui-widget successMessage">
                  <div class="ui-state-highlight ui-corner-all">
                    <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
                    <strong>Success!</strong> Your mail has been sent.</p>
                  </div>
                </div>
               
              
              <form action="send-email.php" method="POST" data-enhance="false" >
                <div class="groupBox">
                  
                  <ul>
                    <li>
                        <input type="text" placeholder="Name" required name="contactName" id="contactName">
                    </li>
                    <li>
                        <input type="email" placeholder="Email" required name="contactEmail" id="contactEmail">
                    </li>
                    <li>
                        <input type="tel" placeholder="Phone" name="contactPhone" id="contactPhone">
                    </li>
                    <li>
                        <textarea placeholder="Message" required name="contactMessage" id="contactMessage"></textarea>
                    </li>
                  </ul>
                  
                  <input type="submit" class="button buttonStrong right" value="Send" name="buttonSubmit" value="submit">
                  <div class="clearfix"></div>
                  
                </div>
                <!-- end group box -->
              </form>
            </div>
            <!--end tab-->
                    
                    
                    
                    
            
            <div id="mapTab" class="pivotTab" >
                <h5 class="sectionTitle"> Find me here! </h5>
                <div id="map" class="map groupBox innerContent" data-location="Champs Elysees Paris">
                </div>  
            </div>
            <!--end tab-->
            
            
            
            
            <div id="socialTab" class="pivotTab">
              <h5 class="sectionTitle"> We're active now in the social society.</h5>
              <div class="innerContent">
                <ul class="left">
                  <li>
                    <a target="_blank" href="http://twitter.com">
                      <img src="img/social/twitter.png" alt="twitter">
                      <span> Follow us on Twitter </span>
                    </a>
                  </li>
                  
                  <li>
                    <a target="_blank" href="http://facebook.com">
                      <img src="img/social/facebook.png" alt="facebook">
                      <span> Like us on Facebook </span>
                    </a>
                  </li>
                  
                  <li>
                    <a target="_blank" href="http://linkedin.com">
                      <img src="img/social/linkedin.png" alt="linkedin">
                      <span> Follow us on Linkedin </span>
                    </a>
                  </li>
                  
                  <li>
                    <a target="_blank" href="http://youtube.com">
                      <img src="img/social/youtube.png" alt="youtube">
                      <span> Subscribe us on Youtube </span>
                    </a>
                  </li>
                </ul>
              </ul>
              
              <ul id="second" class="left">                  
                  <li>
                    <a target="_blank" href="http://vimeo.com">
                      <img src="img/social/vimeo.png" alt="vimeo">
                      <span> Subscribe us on Vimeo</span>
                    </a>
                  </li>
                  
                  <li>
                    <a target="_blank" href="http://skype.com">
                      <img src="img/social/skype.png" alt="skype">
                      <span> Reach us on Skype</span>
                    </a>
                  </li>
                  
                  <li>
                    <a target="_blank" href="http://blogger.com">
                      <img src="img/social/blogger.png" alt="blogger">
                      <span> Read us on Blogger </span>
                    </a>
                  </li>
                  
                  <li>
                    <a target="_blank" href="http://flickr.com">
                      <img src="img/social/flickr2.png" alt="flickr">
                      <span> Follow us on Flickr </span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!--end tab-->
                    
        </div>
        <!-- end  content -->
        
        
        
    </div>
    <div class="clearfix"></div>

    


<?php require_once ("includes/footer.php");