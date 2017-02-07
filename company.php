<?php
include 'header.php';
$lang = $_GET["lang"];
?>

    <div class="center-wrapper">
        <div class="document-wrapper clearfix">
            <h1><?php if ($lang == "en")
                    echo "Our Company";
                else {
                    echo "Η Εταιρία μας";
                } ?></h1>
            <img src="/images/smallbanner4.jpg" alt="img01">
            
            <?php if ($lang == "en")
                    echo "<p>The company <strong>GEORGE MAVRIANOS CO LP</strong>, with the distinctive title <strong>GFR PARTS & SPARES</strong>, was founded in 2016 and deals in car parts of all types, both domestic and imported.</p>"
                . "Our company consists of specialized staff and is housed in Elefsina, with collaborating shops in Lykovrysi and Patisia, Attika.</p><p>"
                . "Our goal is serving our clients with effectiveness, speed, and products that combine the best quality with the best price.</p><p>"
                . "OUR PERSONAL CULTURE :"
                    . "<ul><li>Reliability & Honesty</li>"
                    . "<li>Respect & Appreciation</li>"
                    . "<li>Accountability</li>"
                    . "<li>ETHICAL TRADING</li>"
                    . "<li>Integrity</li>"
                    . "<li>Trust</li>"
                    . "<li>Consistency</li><ul></p>";
                else {
                    echo "<p>Η εταιρεία <strong>ΓΕΩΡΓΙΟΣ ΜΑΥΡΙΑΝΟΣ & ΣΙΑ ΕΕ</strong> , με διακριτικό τίτλο: <strong>GFR PARTS & SPARES</strong>, ιδρύθηκε το 2016 με κύριο αντικείμενο την εμπορία ανταλλακτικών αυτοκινήτου παντός τύπου, με χρήση της εγχώριας αγοράς και εισαγωγών.</p><p>
Η εταιρεία μας στελεχώνεται από εξειδικευμένο προσωπικό και στεγάζεται στην Ελευσίνα, με συνεργαζόμενα καταστήματα στην Λυκόβρυση και στα Πατήσια Αττικής.</p><p>
Στόχος μας η ποιοτική και γρήγορη εξυπηρέτηση των πελατών μας , με προϊόντα που συνδυάζουν την καλύτερη ποιότητα στην καλύτερη τιμή.</p><p>
Η ΠΡΟΣΩΠΙΚΗ ΜΑΣ ΚΟΥΛΤΟΥΡΑ :
            <ul><li>Αξιοπιστία & Ειλικρίνεια</li>
<li>Σεβασμός & Εκτίμηση</li>
<li>Υπευθυνότητα</li>
<li>ΕΜΠΟΡΙΟ ΜΕ ΗΘΟΣ</li>
<li>Ακεραιότητα</li>
<li>Εμπιστοσύνη</li>
<li>Συνέπεια</li><ul></p>";
                } ?>
            
        </div>
    </div>

<?php include 'footer.php';  ?>