<?php
include 'header.php'; 
$lang = $_GET["lang"];
?>

    <div class="center-wrapper">
        <div class="contact-page-wrapper clearfix">
            <div class="contact-info">
                <span class="title"><?php if ($lang == "en")
                            echo "CONTACT INFORMATION";
                        else {
                            echo "ΣΤΟΙΧΕΙΑ ΕΠΙΚΟΙΝΩΝΙΑΣ";
                        } ?></span>
                <span class="address"><?php if ($lang == "en")
                            echo "45 Digeni Akrita, 19200 Elefsina";
                        else {
                            echo "Διγενή Ακρίτα 45, 19200 Ελευσίνα";
                        } ?></span>
                <span class="phone"><?php if ($lang == "en")
                            echo "Phone";
                        else {
                            echo "Τηλ.";
                        } ?>.: 211 40 30 889</span>
                <span class="mobile"><?php if ($lang == "en")
                            echo "Mobile";
                        else {
                            echo "Κιν.";
                        } ?>: 693 68 50 779</span>
                <a class="email" href="mailto:info@gfr.gr">info@gfr.gr</a>
            </div>

            <div class="contact-form-wrapper">
                <h2 class="title"><?php if ($lang == "en")
                            echo "CONTACT FORM";
                        else {
                            echo "ΦΟΡΜΑ ΕΠΙΚΟΙΝΩΝΙΑΣ";
                        } ?></h2>
                <div class="form_description_wrapper">
                    <div class="loading"></div>
                    <span class="description"><?php if ($lang == "en")
                            echo "Fill in the fields below with your message, and we will contact you as soon as possible.";
                        else {
                            echo "Συμπληρώστε το μήνυμά σας στα παρακάτω πεδία και θα επικοινωνήσουμε μαζί σας το συντομότερο δυνατό.";
                        } ?></span>
                    <div class="message_wrapper">
                        <span class="message generic_error"><?php if ($lang == "en")
                            echo "Some error has occured. Please try again later";
                        else {
                            echo "Παρουσιάστηκε κάποιο σφάλμα. Παρακαλώ προσπαθήστε ξανά αργότερα.";
                        } ?></span>
                    </div>
                    <form action="#" method="post" class="form clearfix">
                        <div class="row_wrapper input input-hoshi">
                            <div class="input_wrapper required">
                                <input type="text" name="firstName" class="input first_name input__field input__field-hoshi" />
                                <label class="label input__label input__label-hoshi input__label-hoshi-color-1">
                                    <span class="input__label-content input__label-content-hoshi"><?php if ($lang == "en")
                            echo "Name";
                        else {
                            echo "Όνομα";
                        } ?></span>
                                </label>
                                <span class="message empty_error"><?php if ($lang == "en")
                            echo "Fill in your name";
                        else {
                            echo "Συμπληρώστε το όνομά σας";
                        } ?></span>
                            </div>
                        </div>
                        <div class="row_wrapper2 input input-hoshi">
                            <div class="input_wrapper required">
                                <input type="text" name="lastName" class="input last_name input__field input__field-hoshi" />
                                <label class="label input__label input__label-hoshi input__label-hoshi-color-1">
                                    <span class="input__label-content input__label-content-hoshi"><?php if ($lang == "en")
                            echo "Last Name";
                        else {
                            echo "Επώνυμο";
                        } ?></span>
                                </label>
                                <span class="message empty_error"><?php if ($lang == "en")
                            echo "Fill in your last name";
                        else {
                            echo "Συμπληρώστε το επώνυμό σας";
                        } ?></span>
                            </div>
                        </div>
                        <div class="row_wrapper input input-hoshi">
                            <div class="input_wrapper required email_wrapper">
                                <input type="text" name="email" class="input email input__field input__field-hoshi" />
                                <label class="label input__label input__label-hoshi input__label-hoshi-color-1">
                                    <span class="input__label-content input__label-content-hoshi">Email</span>
                                </label>
                                <span class="message empty_error"><?php if ($lang == "en")
                            echo "Fill in your email";
                        else {
                            echo "Συμπληρώστε το email σας";
                        } ?></span>
                                <span class="message invalid_error"><?php if ($lang == "en")
                            echo "Fill in a valid email";
                        else {
                            echo "Συμπληρώστε ένα έγγυρο email";
                        } ?></span>
                            </div>
                        </div>
                        <div class="row_wrapper2 input input-hoshi">
                            <div class="input_wrapper required phone_wrapper">
                                <input type="text" name="phone" class="input phone input__field input__field-hoshi" />
                                <label class="label input__label input__label-hoshi input__label-hoshi-color-1">
                                    <span class="input__label-content input__label-content-hoshi"><?php if ($lang == "en")
                            echo "Phone";
                        else {
                            echo "Τηλέφωνο";
                        } ?></span>
                                </label>
                                <span class="message empty_error"><?php if ($lang == "en")
                            echo "Fill in your phone number";
                        else {
                            echo "Συμπληρώστε το τηλέφωνό σας";
                        } ?></span>
                            </div>
                        </div>
                        <div class="row_wrapper input input-hoshi text-area">
                            <div class="input_wrapper required message_wrapper">
                                <textarea name="message" class="input message-area input__field input__field-hoshi"></textarea>
                                <label class="label input__label input__label-hoshi input__label-hoshi-color-1">
                                    <span class="input__label-content input__label-content-hoshi"><?php if ($lang == "en")
                            echo "Message";
                        else {
                            echo "Μήνυμα";
                        } ?></span>
                                </label>
                                <span class="message empty_error"><?php if ($lang == "en")
                            echo "Fill in your message";
                        else {
                            echo "Συμπληρώστε το μήνυμά σας";
                        } ?></span>
                            </div>
                        </div>
                        <div class="row_wrapper2 lastrow_wrapper">
                            <span class="footnote"><em><?php if ($lang == "en")
                            echo "* All fields are required.";
                        else {
                            echo "* Όλα τα πεδία είναι υποχρεωτικά.";
                        } ?></em></span>
                            <button class="submit_btn"><?php if ($lang == "en")
                            echo "SEND";
                        else {
                            echo "ΑΠΟΣΤΟΛΗ";
                        } ?></button>
                        </div>
                    </form>
                </div>
                <div class="success_wrapper" style="display: none;">
                    <span class="icon-tick-outline"></span>
                    <span class="success_message"><?php if ($lang == "en")
                            echo "Your message has been sent successfully";
                        else {
                            echo "Το μήνυμά σας στάλθηκε με επιτυχία.";
                        } ?></span>
                </div>
            </div>

            <div class="map-wrapper">
                <span class="title"><?php if ($lang == "en")
                            echo "MAP";
                        else {
                            echo "ΧΑΡΤΗΣ";
                        } ?></span>
                <div id="map2" style="width: 100%; height: 500px"></div>
            </div>
        </div>
    </div>


<?php include 'footer.php';  ?>