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
                    echo "";
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