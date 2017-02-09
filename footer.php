<?php

$lang = $_GET["lang"];
?>
    <footer>
        <div class="center-wrapper clearfix">
            <nav class="footer-menu-wrapper">
                <ul class="footer-menu">
                    <li runat="server" class="footer-menu-item">
                            <span class="icon icon-forward"></span>
                            <a href="/index.php<?php if ($lang == "en")
                            echo "?lang=en";
                        else {
                            echo "?lang=el";
                        } ?>"><?php if ($lang == "en")
                            echo "HOME";
                        else {
                            echo "ΑΡΧΙΚΗ";
                        } ?></a>
                    </li>
                    <li runat="server" class="footer-menu-item">
                            <span class="icon icon-forward"></span>
                            <a href="/company.php<?php if ($lang == "en")
                            echo "?lang=en";
                        else {
                            echo "?lang=el";
                        } ?>"><?php if ($lang == "en")
                            echo "COMPANY";
                        else {
                            echo "ΕΤΑΙΡΕΙΑ";
                        } ?></a>
                    </li>
                    <li runat="server" class="footer-menu-item">
                            <span class="icon icon-forward"></span>
                            <a href="/brands.php<?php if ($lang == "en")
                            echo "?lang=en";
                        else {
                            echo "?lang=el";
                        } ?>"><?php if ($lang == "en")
                            echo "BRANDS";
                        else {
                            echo "ΜΑΡΚΕΣ";
                        } ?></a>
                    </li>
                    <li runat="server" class="footer-menu-item">
                            <span class="icon icon-forward"></span>
                            <a href="/contact.php<?php if ($lang == "en")
                            echo "?lang=en";
                        else {
                            echo "?lang=el";
                        } ?>"><?php if ($lang == "en")
                            echo "CONTACT";
                        else {
                            echo "ΕΠΙΚΟΙΝΩΝΙΑ";
                        } ?></a>
                    </li>
                </ul>
            </nav>
            <div class="contact-wrapper">
                <div class="info-wrapper">
                    <a href="/contact.php<?php if ($lang == "en")
                            echo "?lang=en";
                        else {
                            echo "?lang=el";
                        } ?>" class="title"><?php if ($lang == "en")
                            echo "CONTACT";
                        else {
                            echo "ΕΠΙΚΟΙΝΩΝΙΑ";
                        } ?></a>
                    <span class="address"><?php if ($lang == "en")
                            echo "45 Digeni Akrita, 19200 Elefsina";
                        else {
                            echo "Διγενή Ακρίτα 45, 19200 Ελευσίνα";
                        } ?></span>
                    <span class="phone"><?php if ($lang == "en")
                            echo "Phone";
                        else {
                            echo "Τηλ.";
                        } ?>: 211 40 30 889</span>
                    <span class="mobile"><?php if ($lang == "en")
                            echo "Mobile";
                        else {
                            echo "Κιν.";
                        } ?>: 693 68 50 779</span>
                    <a class="email" href="mailto:info@gfr.gr">info@gfr.gr</a>
                </div>
                <div class="map-wrapper">
                    <div id="map" style="width: 100%; height: 150px"></div>
                </div>
            </div>
            <div class="newsletter-wrapper">
                <div class="newsletter-text-wrapper">
                    <span class="icon icon-envelope-o"></span>
                    <span class="newsletter-text"><?php if ($lang == "en")
                            echo "Subscribe to our newsletter to recieve news on your email.";
                        else {
                            echo "Γραφτείτε στο newsletter και λάβετε τα νέα μας στο email σας.";
                        } ?></span>
                </div>
                <form action="" method="Post" class="newsletter_form clearfix">
                    <input class="nl_inp" type="text" placeholder="Email..." name="e-mail" />
                    <!--<span class="input input-hoshi">
					<input class="input__field input__field-hoshi" id="input-4" type="text">
					<label class="input__label input__label-hoshi input__label-hoshi-color-1" for="input-4">
						<span class="input__label-content input__label-content-hoshi">Name</span>
					</label>
				</span> -->
                    <button class="nl_btn"><?php if ($lang == "en")
                            echo "SUBSCRIBE";
                        else {
                            echo "ΕΓΓΡΑΦΗ";
                        } ?></button>
                    <span class="message empty_error"><?php if ($lang == "en")
                            echo "Fill in your email";
                        else {
                            echo "Συμπληρώστε το email σας";
                        } ?></span>
                    <span class="message invalid_error"><?php if ($lang == "en")
                            echo "This email is invalid";
                        else {
                            echo "Συμπληρώστε ένα έγγυρο email";
                        } ?></span>
                    <span class="message duplicate_error"><?php if ($lang == "en")
                            echo "You have already subscribed";
                        else {
                            echo "Έχετε ήδη γραφτεί στο newsletter";
                        } ?></span>
                    <span class="message newsletter_success"><?php if ($lang == "en")
                            echo "You have subscribed successfully";
                        else {
                            echo "Γραφτήκατε επιτυχώς στο newsletter";
                        } ?></span>
                    <span class="message generic_error"><?php if ($lang == "en")
                            echo "Some error has occured. Please try again later";
                        else {
                            echo "Παρουσιάστηκε κάποιο σφάλμα. Παρακαλώ προσπαθήστε ξανά αργότερα.";
                        } ?></span>
                </form>
            </div>
        </div>
    </footer>

    <div ID="overlay" class="overlay overlay-slidedown
        <?php if(!isset($_COOKIE['overlay'])) {
            echo "open";
        }?>">
        <button class="overlay-close icon-cross2" type="button"></button>
        <div class="wrapper">
            <div class="inner-wrapper">
                <img class="logo" src="/images/logo-long.png" />
                <div class="info-wrapper">
                    <div class="email-wrapper">
                        <span class="icon icon-envelope-o"></span>
                        <a class="email label" href="mailto:info@gfr.gr">info@gfr.gr</a>
                    </div>
                    <div class="mobile-wrapper">
                        <span class="icon icon-mobile2"></span>
                        <span class="label">693 68 50 779</span>
                    </div>
                    <div class="phone-wrapper">
                        <span class="icon icon-phone"></span>
                        <span class="label">211 40 30 889</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function myMap() {
            var myLatLng = { lat: 38.0539707, lng: 23.535525 }
            var mapCanvas = document.getElementById("map");
            var mapOptions = {
                center: myLatLng,
                zoom: 15
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'gfr'
            })

            if (document.getElementById("map2")) {
                var myLatLng = { lat: 38.0539707, lng: 23.535525 }
                var mapCanvas2 = document.getElementById("map2");
                var mapOptions = {
                    center: myLatLng,
                    zoom: 15
                }
                var map2 = new google.maps.Map(mapCanvas2, mapOptions);
                var marker2 = new google.maps.Marker({
                    position: myLatLng,
                    map: map2,
                    title: 'gfr'
                })
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/owl-carousel/owl.carousel.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyA4EX1ua5aAy4IrUeGT1TJKuEfw82sp2wM&language=<?php echo $lang ?>"></script>
    <script src="/scripts/crawler.js" type="text/javascript"></script>
    <script src="/scripts/script.js?v=48" type="text/javascript"></script>
</body>
</html>