<?php
/*Page error*/
if (isset($errors)) {
    foreach ($errors as $error) {
        echo "<div id='error_ins'>";
        echo "• " . $error . "<br>";
        echo "</div>";
    }
}
?>