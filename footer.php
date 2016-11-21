
    <footer>
        <div class="center-wrapper clearfix">
            <nav class="footer-menu-wrapper">
				<ul class="footer-menu">
					<li runat="server" class="footer-menu-item">
						<span class="icon icon-forward"></span>
                                                <a href="/index.php">
							ΑΡΧΙΚΗ
						</a>
					</li>
					<li runat="server" class="footer-menu-item">
						<span class="icon icon-forward"></span>
						<a href="/company.php">
							ΕΤΑΙΡΕΙΑ
						</a>
					</li>
					<li runat="server" class="footer-menu-item">
						<span class="icon icon-forward"></span>
						<a href="/brands.php">
							ΜΑΡΚΕΣ
						</a>
					</li>
					<li runat="server" class="footer-menu-item">
						<span class="icon icon-forward"></span>
						<a href="/contact.php">
							ΕΠΙΚΟΙΝΩΝΙΑ
						</a>
					</li>
                </ul>
			</nav>
            <div class="contact-wrapper">
                <div class="info-wrapper">
                    <a href="/contact.php" class="title">ΕΠΙΚΟΙΝΩΝΙΑ</a>
                    <span class="address">Διγενή Ακρίτα 45, 19200 Ελευσίνα</span>
                    <span class="phone">Τηλ.: 211 40 30 889</span>
                    <span class="mobile">Κιν.: 693 68 50 779</span>
                    <a class="email" href="mailto:gfr.parts@gmail.com">gfr.parts@gmail.com</a>
                </div>
                <div class="map-wrapper">
                    <div id="map" style="width: 100%; height: 150px"></div>
                </div>
            </div>
            <div class="newsletter-wrapper">
                <div class="newsletter-text-wrapper">
                    <span class="icon icon-envelope-o"></span>
                    <span class="newsletter-text">Γραφτείτε στο newsletter και λάβετε τα νέα μας στο email σας.</span>
                </div>
                <form action="" method="Post" class="newsletter_form clearfix">
                    <input class="nl_inp" type="text" placeholder="Email..." name="e-mail" />
                    <!--<span class="input input-hoshi">
					<input class="input__field input__field-hoshi" id="input-4" type="text">
					<label class="input__label input__label-hoshi input__label-hoshi-color-1" for="input-4">
						<span class="input__label-content input__label-content-hoshi">Name</span>
					</label>
				</span> -->
                    <button class="nl_btn">ΕΓΓΡΑΦΗ</button>
                    <span class="message empty_error">Συμπληρώστε το email σας</span>
                    <span class="message invalid_error">Συμπληρώστε ένα έγγυρο email</span>
                    <span class="message duplicate_error">Έχετε ήδη γραφτεί στο newsletter</span>
                    <span class="message newsletter_success">Γραφτήκατε επιτυχώς στο newsletter</span>
                    <span class="message generic_error">Παρουσιάστηκε κάποιο σφάλμα. Παρακαλώ προσπαθήστε ξανά αργότερα.</span>
                </form>
            </div>
        </div>
    </footer>

    <div ID="overlay" class="overlay overlay-slidedown
<?php if(!isset($_COOKIE['overlay'])) {
    echo "open";
}?>
        " runat="server" onscroll="toggleOverlay()">
        <button class="overlay-close icon-cross2" type="button"></button>
        <div class="wrapper">
            <img class="logo" src="/images/logo-long.png" />
            <div class="info-wrapper">
                <div class="email-wrapper">
                    <span class="icon icon-envelope-o"></span>
                    <a class="email label" href="mailto:gfr.parts@gmail.com">gfr.parts@gmail.com</a>
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
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyA4EX1ua5aAy4IrUeGT1TJKuEfw82sp2wM"></script>
    <script src="/scripts/crawler.js" type="text/javascript"></script>
    <script src="/scripts/script.js?v=17" type="text/javascript"></script>
</body>
</html>