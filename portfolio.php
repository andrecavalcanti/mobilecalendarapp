<?php require_once ("includes/header.php"); ?>

  <div id="container" data-role="page" >
    
    <header>
      
    <div class="upperMenu">
      <?php include("includes/inner-menu.php"); ?>
    </div>
    
      <div id="header">
        <a href="index.php" class="homeButton" data-direction="reverse"></a>
        <a href="#" class="menuButton"></a>
        <h1> Portfolio</h1>
        <h2> Our latest projects</h2>
        <!--<a href="blog.php" class="nextButton">&raquo;</a>-->
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
    
    <div id="pagePortfolio" class="page">
      
  
      <div class="content">
        
        <div class="tabsPortfolio" data-ajax="false">
          <div class="instruction"> tap to change </div>
          <ul>
            <li>
              <a href="#" data-value="grid"> grid </a>
            </li>
            
            <li class="second" >
              <a href="#" data-value="list"> list</a>
            </li>
          </ul>
          
        </div>
      </div>
        
      <div id="gridView" class="portfolioProjects" data-ajax="false">
        <ul>
          <li>
            <div class="groupBox innerContent">
              <a data-role="none" class="thumb" href="img/slides/1.jpg">
                <img src="img/slides/1.jpg" alt="Project X: iPhone App">
              </a>
              <div class="description">
                <div class="title">
                  Project Machine-x
                </div>
                <div class="about">
                  Government holding company
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          <li>
            <div class="groupBox innerContent">
              <a class="thumb" href="img/slides/3.jpg">
                <img src="img/slides/3.jpg" alt="PhotoTouch">
              </a>
              <div class="description">
                <div class="title">
                  Lite Solution
                </div>
                <div class="about">
                  Private Company
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          <li>
            <div class="groupBox innerContent">
              <a class="thumb" href="img/slides/2.jpg">
                <img src="img/slides/2.jpg" alt="Alas! Maps Application">
              </a>
              <div class="description">
                <div class="title">
                  Robust Metals
                </div>
                <div class="about">
                  Metal Inc.
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          <li>
            <div class="groupBox innerContent">
              <a class="thumb" href="img/slides/4.jpg">
                <img src="img/slides/4.jpg" alt="Project X">
              </a>
              <div class="description">
                <div class="title">
                  Reconstruction Plant
                </div>
                <div class="about">
                  Hyper Engine LLC.
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          <li>
            <div class="groupBox innerContent">
              <a class="thumb" href="img/slides/5.jpg">
                <img src="img/slides/5.jpg" alt="Project X">
              </a>
              <div class="description">
                <div class="title">
                  Project X
                </div>
                <div class="about">
                  NYPD
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          <li>
            <div class="groupBox innerContent">
              <a class="thumb" href="img/slides/6.jpg">
                <img src="img/slides/6.jpg" alt="Project X">
              </a>
              <div class="description">
                <div class="title">
                  Lara Brain
                </div>
                <div class="about">
                  Footballers
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          
          <li>
            <div class="groupBox innerContent">
              <a data-role="none" class="thumb" href="img/slides/1.jpg">
                <img src="img/slides/1.jpg" alt="Project X: iPhone App">
              </a>
              <div class="description">
                <div class="title">
                  Project Machine-x
                </div>
                <div class="about">
                  Government holding company
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          <li>
            <div class="groupBox innerContent">
              <a class="thumb" href="img/slides/3.jpg">
                <img src="img/slides/3.jpg" alt="PhotoTouch">
              </a>
              <div class="description">
                <div class="title">
                  Lite Solution
                </div>
                <div class="about">
                  Private Company
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          <li>
            <div class="groupBox innerContent">
              <a class="thumb" href="img/slides/2.jpg">
                <img src="img/slides/2.jpg" alt="Alas! Maps Application">
              </a>
              <div class="description">
                <div class="title">
                  Robust Metals
                </div>
                <div class="about">
                  Metal Inc.
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          <li>
            <div class="groupBox innerContent">
              <a class="thumb" href="img/slides/4.jpg">
                <img src="img/slides/4.jpg" alt="Project X">
              </a>
              <div class="description">
                <div class="title">
                  Reconstruction Plant
                </div>
                <div class="about">
                  Hyper Engine LLC.
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          <li>
            <div class="groupBox innerContent">
              <a class="thumb" href="img/slides/5.jpg">
                <img src="img/slides/5.jpg" alt="Project X">
              </a>
              <div class="description">
                <div class="title">
                  Project X
                </div>
                <div class="about">
                  NYPD
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          <li>
            <div class="groupBox innerContent">
              <a class="thumb" href="img/slides/6.jpg">
                <img src="img/slides/6.jpg" alt="Project X">
              </a>
              <div class="description">
                <div class="title">
                  Lara Brain
                </div>
                <div class="about">
                  Footballers
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          
          
        </ul>
      </div>

    </div>
    <div class="clearfix"></div>

    


<?php require_once ("includes/footer.php");