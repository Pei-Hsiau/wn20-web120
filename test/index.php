<?php include "includes/header.php";?>
    
    <main role="main">
    <h2>Contact Us</h2>
       <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other!       
             *
             */
    
            include 'includes/contact_include.php'; #site keys & code here
        
            $toAddress = "Pearlhsiau21@gmail.com";  //place your/your client's email address here
            $toName = "Pearl Hsiau"; //place your client's name here
            $website = "Pearl Hsiau&#39;s web120 portal";  //place NAME of your client's website
     
            echo loadContact('multiple.php');#demonstrates a simple contact form
            //echo loadContact('multiple.php');#demonstrates multiple form elements
    
       ?>
         
         </main>
       <!--footer include starts here-->
    </section>
    <!-- END LEFT COL -->
    
    <!-- START RIGHT COL -->
    <aside>
     <h3>Basic Website Design Cycle</h3>
        
        
        <p>The 10 Best Wireframe Tools To Make Wireframes, Mockups &amp; Prototypes:</p>
        <div class="line">
        <a class="linko" href="https://thedigitalprojectmanager.com/wireframe-tools/" target="_top">
            The 10 Best Wireframe Tools To Make Wireframes, Mockups &amp; Prototypes</a>
        </div>
        <p>The Ultimate Website Design Questionnaire (with PDF Template):</p>
        <div class="line">
        <a class="linko" href="https://www.seoptimer.com/blog/website-design-questionnaire/" target="_top">
            The Ultimate Website Design Questionnaire (with PDF Template)</a>
        </div>
        <p>10 Things Every Web Designer Just Starting Out Should Know:</p>
        <div class="line">
        <a class="linko" href="https://www.webfx.com/blog/web-design/10-things-every-web-designer-just-starting-out-should-know/" target="_top">
            10 Things Every Web Designer Just Starting Out Should Know</a>
        </div>
    </aside>
    </div>
    <!-- END RIGHT COL -->
    
    
    <?php include "includes/footer.php";?>