<?php
if (empty($_SESSION['id'])) {
    header("Location: login");
}
?>
<main>
    <script src="https://www.paypal.com/sdk/js?client-id=test"></script>
    <script>
        paypal.Buttons().render('body');
    </script>
</main>