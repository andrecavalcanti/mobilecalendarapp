<?php require_once ("includes/header.php"); ?>

  <div id="container"  data-mini="true" data-role="page">
    
    <header>
      
      <div class="upperMenu">
        <?php include("includes/inner-menu.php"); ?>
      </div>
      
      <div id="header">
        <a href="index.php" class="homeButton" data-direction="reverse"></a>
        <a href="#" class="menuButton"></a>
        
        <h1> Elements &amp; Typography</h1>
        <h2> Company Name, Service Sector</h2>
        <!--<a href="about.php" class="nextButton">&raquo;</a>-->
        
      </div>
    </header>
    
    <div id="pageSample1" class="page">
        <div class="content">      
            
            

            <!-- Notifications-->
            <h5 class="sectionTitle"> Collapsible content</h5>
            
            <div class="innerContent">
                              
              <div  data-mini="true" data-role="collapsible">
                 <h3>I'm a header</h3>
                 <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
              </div>
                        
              <div  data-mini="true" data-role="collapsible" data-theme="a">
                 <h3>I'm a header themed "b"</h3>
                 <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
              </div>
              <div  data-mini="true" data-role="collapsible" data-theme="b">
                 <h3>I'm a header themed "b"</h3>
                 <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
              </div>
            </div>              
              
              
              
            
            
            <!-- Notifications-->
            <h5 class="sectionTitle"> Collapsible Sets</h5>
            
                                      
              <div class="innerContent">
                <div  data-mini="true" data-role="collapsible-set">
                
                        <div  data-mini="true" data-role="collapsible" data-collapsed="false">
                        <h3>Section 1</h3>
                        <p>I'm the collapsible set content for section 1.</p>
                        </div>
                        
                        <div  data-mini="true" data-role="collapsible">
                        <h3>Section 2</h3>
                        <p>I'm the collapsible set content for section 2.</p>
                        </div>
                        
                        <div  data-mini="true" data-role="collapsible">
                        <h3>Section 3</h3>
                        <p>I'm the collapsible set content for section 3.</p>
                        </div>    
                </div>
              </div>
                      
            
            
            
            <h5 class="sectionTitle"> 1 column</h5>
            <div class="groupBox innerContent">
                <div class="columnContainer column-1">
                    <p class="column">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                </div>
            </div>
            
            
            
            
            <h5 class="sectionTitle"> 2 column</h5>
            <div class="groupBox innerContent">
                <div class="columnContainer column-2">
                    <p class="column">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                    <p class="column">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            
            
            
            <h5 class="sectionTitle"> 3 column</h5>
            <div class="groupBox innerContent">
                <div class="columnContainer column-3">
                    <p class="column">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                    <p class="column">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                    <p class="column">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            
            
            
            
            
            
            <!--
            <h5 class="sectionTitle"> 4 column</h5>
            <div class="groupBox innerContent">
              <div class="ui-grid-c">
                <div class="ui-block-a"><p class="column">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    </p></div>
                <div class="ui-block-b"><p class="column">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    </p></div>
                <div class="ui-block-c"><p class="column">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    </p></div>
                <div class="ui-block-d"><p class="column">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    </p></div>
              </div>
            </div>
            -->
            
            
            
            
            
              
            
            
            <h5 class="sectionTitle">Buttons</h2>
            <div class="groupBox innerContent">
                <div id="buttons">
    
                  <button data-mini="true" class="ui-corner-all ui-button">Default</button>
                  <button data-mini="true" class="ui-corner-all ui-button" data-theme="a">Default A</button>
                  <button data-mini="true" class="ui-corner-all ui-button" data-theme="b">Default B</button>
                  
                  <button data-mini="true" data-inline="true" class="ui-corner-all ui-button">inline</button>
                  <button data-mini="true" data-inline="true" class="ui-corner-all ui-button" data-theme="a">Default A</button>
                  <button data-mini="true" data-inline="true" class="ui-corner-all ui-button" data-theme="b">Default B</button>
                  <br/> 
                  
                </div>
            </div>
            
            
            <h5 class="sectionTitle">Input slider</h2>
            <div class="groupBox innerContent">
              <input type="range" name="slider-1" data-mini="true" id="slider-1" value="60" min="0" max="100" />
            </div>
            
            
                            
            <h5 class="sectionTitle">Toggle switch</h2>
              <div class="groupBox innerContent">
                <label for="flip-1">Flip switch:</label>
                <select name="flip-1" id="flip-1"  data-mini="true" data-role="slider">
                        <option value="off">Off</option>
                        <option value="on">On</option>
                </select>
                
                                
                <style type="text/css">
                .containing-element .ui-slider-switch { width: 11em }
                </style>
                <div class="containing-element">
                        <label for="flip-min">Flip switch:</label>
                        <select name="flip-min" id="flip-min"  data-mini="true" data-role="slider" data-theme="a">
                                <option value="off">Off</option>
                                <option value="on">On</option>
                        </select>
                </div>
                
                <div class="containing-element">
                        <label for="flip-min2">Flip switch:</label>
                        <select name="flip-min2" id="flip-min2"  data-mini="true" data-role="slider" data-theme="e">
                                <option value="off">Off</option>
                                <option value="on">On</option>
                        </select>
                </div>

              </div>
            
                        
        </div>
        <!-- end  content -->
        
        
    </div>
    <!--end page-->
    
    
    <div class="clearfix"></div>

    


<?php require_once ("includes/footer.php");