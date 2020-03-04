<?php $ptitle='Programs'; include'modules/_head.php'; ?>
<?php include'modules/_header.php'; ?>
<?php include'modules/_nav.php'; ?>

     <div class="programs">
         <div class="programTitle">
           <h2>Programs</h2>
           <p>Our swimming lessons are specially designed to make learning fun through guided play for beginners from 18 months to 8 years old, including infant swim lessons, toddler swim lessons, and more.</p>
          </div>  
      
         <div class="accordion">
             <div class="accordion-section">
                 <a class="accordion-section-title" href="#accordion-1">Goldfish</a>
                 <div id="accordion-1" class="accordion-section-content">
                     <img src="images/goldfish-pngrepo-com.png" alt="Goldfish">
                     <h4>(Levels 1 through 3)</h4>
                     <p><strong>Ages:</strong> 2 - 4</p>
                     <p><strong>Number of Classes:</strong> 6 sessions of 30 minutes each</p>
                     <p><strong>Adult Participation:</strong> Might be required, depending on kid's skills.</p>
                     <p><strong>Topics:</strong> Some of the topics include: Gentle introduction to the water, basic swim and safety skills, and paddle swim independently. </p> 
                     <p><strong>Price:</strong> $140 for 6 sessions</p>
           
                     <!--add to cart button -->
                     <div class="payment">
                     <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                         <input type="hidden" name="cmd" value="_s-xclick">
                         <input type="hidden" name="hosted_button_id"    value="">
                 
                         <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                     </form>    
                     
                      <!--Pay Now button -->
                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                         <input type="hidden" name="cmd" value="_s-xclick">
                         <input type="hidden" name="hosted_button_id"   value="">
                         <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

                     </form>
                        </div>
                 </div>
             </div>
    
      
         <div class="accordion-section">
             <a class="accordion-section-title" href="#accordion-2">Manta Ray</a>
             <div id="accordion-2" class="accordion-section-content">     
                 <img src="images/manta-ray-mobile.png" alt="Manta Ray">
                 <h4>(Levels 4 and 5)</h4>
                 <p><strong>Minumun Age:</strong> 2 Years.</p>
                 <p><strong>Working on:</strong>Basic skills necessary for swimming,  back and front floating independently, and roll over for a breath independently.</p>
                 <p><strong>Need to level up:</strong> Student should be able to swim 10 feet independently.</p>
                 <p><strong>Price:</strong> $120 for 6 sessions</p>
          
                 <!--add to cart button -->
                 <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                     <input type="hidden" name="cmd" value="_s-xclick">
                     <input type="hidden" name="hosted_button_id" value="">
                     <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
 
                 </form>
                  <!--Pay Now button -->
                 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                     <input type="hidden" name="cmd" value="_s-xclick">
                     <input type="hidden" name="hosted_button_id" value="">
                     <input type="image"     src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

                </form>
             </div>
         </div> 

    <div class="accordion-section">
        <a class="accordion-section-title" href="#accordion-3">Dolphin</a>
        <div id="accordion-3" class="accordion-section-content"> 
            <img src="images/dolphin-mobile.png" alt="dolphin">
            <h4>(Levels 5 and 6)</h4>
            <p><strong>Ages: </strong> 6+</p>
            <p><strong>Number of Classes:</strong> 6 sessions of 40 minutes each</p>
            <p><strong>Adult Participation:</strong> Not required</p>
            <p><strong>Topics:</strong> Some of the topics   include: Back float and front float for 10 seconds independently, swimming 10 feet independently and basic backstroke swimming for 20 feet.</p> 
            <p><strong>Price:</strong> $120 for 6 sessions</p>
            
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

            </form>
            <!--Pay Now button -->
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="">
                <input type="image"     src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

            </form>
        </div>
    </div>
  </div>
     

    
   <?php include'modules/_footer.php'; ?>