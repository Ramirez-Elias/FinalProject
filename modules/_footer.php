 </main>
    
    <footer>
        <aside>
            <strong>Cypress Little Fins</strong><br>
             8422 Laurel Trails Dr. <br> Houston, TX 77095 <br>
             contact@cypresslittlefins.com
        </aside>
        <p class="footer-bar">&copy;2020 All Rights Reserved | Cypress Little Fins | <?php
            echo "";
            $mydate=getdate(date("U"));
            echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
            ?>
  </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts/hamburger.js"></script>
    <script src="scripts/currentdate.js"></script>
    <script src="scripts/animation2.js"></script>
    <script src="scripts/accordion.js"></script>
    <script src="scripts/login.js"></script>
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/login-form.php"></script>
    <script>
        //remember to add an ID of "mainmenu" to the nav ul
        var urlString = document.location.href;
        var urlArray = urlString.split('/');
        var pageHREF=urlArray[urlArray.length-1];
        if (pageHREF !=="") {
            var menu = document.querySelectorAll('ul#mainmenu li a');
            var i;
            //loop through all the menu items in the navigation
            for(i=0; i<menu.length; i++) {
                var currentURL=(menu[i].getAttribute("href"));
                menu[i].parentNode.className=""; //turn off hilighting by default
                if (currentURL===pageHREF) {
                    menu[i].parentNode.className="active";	//turn on if a match
                } // end if
            } // end of the search for a match
        } // end of if !==
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('a.pro1').click(function() {
                $("div#loader1").show();

            });
            $('a.pro2').click(function() {
                $("div#loader2").show();

            });
            $('a.pro3').click(function() {
                $("div#loader3").show();

            });
        });
    </script>


</div>
</body>



</html>