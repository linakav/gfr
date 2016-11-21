<?php include 'header.php'; ?>


    <div class="center-wrapper">
        <div class="contact-page-wrapper clearfix">
            <div class="contact-info">
                <span class="title">ΣΤΟΙΧΕΙΑ ΕΠΙΚΟΙΝΩΝΙΑΣ</span>
                <span class="address">Διγενή Ακρίτα 45, 19200 Ελευσίνα</span>
                <span class="phone">Τηλ.: 211 40 30 889</span>
                <span class="mobile">Κιν.: 693 68 50 779</span>
                <a class="email" href="mailto:gfr.parts@gmail.com">gfr.parts@gmail.com</a>
            </div>

            <div class="contact-form-wrapper">
                <h2 class="title">ΦΟΡΜΑ ΕΠΙΚΟΙΝΩΝΙΑΣ</h2>
                <div class="form_description_wrapper">
                    <div class="loading"></div>
                    <span class="description">Συμπληρώστε το μήνυμά σας στα παρακάτω πεδία και θα επικοινωνήσουμε μαζί σας το συντομότερο δυνατό.</span>
                    <div class="message_wrapper">
                        <span class="message generic_error">Παρουσιάστηκε κάποιο σφάλμα. Παρακαλώ προσπαθήστε ξανά αργότερα.</span>
                    </div>
                    <form action="#" method="post" class="form clearfix">
                        <div class="row_wrapper input input-hoshi">
                            <div class="input_wrapper required">
                                <input type="text" name="firstName" class="input first_name input__field input__field-hoshi" />
                                <label class="label input__label input__label-hoshi input__label-hoshi-color-1">
                                    <span class="input__label-content input__label-content-hoshi">Όνομα</span>
                                </label>
                                <span class="message empty_error">Συμπληρώστε το όνομά σας</span>
                            </div>
                        </div>
                        <div class="row_wrapper2 input input-hoshi">
                            <div class="input_wrapper required">
                                <input type="text" name="lastName" class="input last_name input__field input__field-hoshi" />
                                <label class="label input__label input__label-hoshi input__label-hoshi-color-1">
                                    <span class="input__label-content input__label-content-hoshi">Επώνυμο</span>
                                </label>
                                <span class="message empty_error">Συμπληρώστε το επώνυμό σας</span>
                            </div>
                        </div>
                        <div class="row_wrapper input input-hoshi">
                            <div class="input_wrapper required email_wrapper">
                                <input type="text" name="email" class="input email input__field input__field-hoshi" />
                                <label class="label input__label input__label-hoshi input__label-hoshi-color-1">
                                    <span class="input__label-content input__label-content-hoshi">Email</span>
                                </label>
                                <span class="message empty_error">Συμπληρώστε το email σας</span>
                                <span class="message invalid_error">Συμπληρώστε ένα έγγυρο email</span>
                            </div>
                        </div>
                        <div class="row_wrapper2 input input-hoshi">
                            <div class="input_wrapper required phone_wrapper">
                                <input type="text" name="phone" class="input phone input__field input__field-hoshi" />
                                <label class="label input__label input__label-hoshi input__label-hoshi-color-1">
                                    <span class="input__label-content input__label-content-hoshi">Τηλέφωνο</span>
                                </label>
                                <span class="message empty_error">Συμπληρώστε το τηλέφωνό σας</span>
                            </div>
                        </div>
                        <div class="row_wrapper input input-hoshi text-area">
                            <div class="input_wrapper required message_wrapper">
                                <textarea name="message" class="input message-area input__field input__field-hoshi"></textarea>
                                <label class="label input__label input__label-hoshi input__label-hoshi-color-1">
                                    <span class="input__label-content input__label-content-hoshi">Μήνυμα</span>
                                </label>
                                <span class="message empty_error">Συμπληρώστε το μήνυμά σας</span>
                            </div>
                        </div>
                        <div class="row_wrapper2 lastrow_wrapper">
                            <span class="footnote"><em>* Όλα τα πεδία είναι υποχρεωτικά.</em></span>
                            <button class="submit_btn">ΑΠΟΣΤΟΛΗ</button>
                        </div>
                    </form>
                </div>
                <div class="success_wrapper" style="display: none;">
                    <span class="icon-tick-outline"></span>
                    <span class="success_message">Το μήνυμά σας στάλθηκε με επιτυχία.</span>
                </div>
            </div>

            <div class="map-wrapper">
                <span class="title">ΧΑΡΤΗΣ</span>
                <div id="map2" style="width: 100%; height: 500px"></div>
            </div>
        </div>
    </div>


<?php include 'footer.php';  ?>