<?php
if (empty($_SESSION['id'])) {
    header("Location: login");
}
?>


<main id="main_paiment">
    <div id="titre_paiment">
        <script src="https://www.paypal.com/sdk/js?client-id=test"></script>
        <script>
            paypal.Buttons().render('main');
        </script>
    </div>
</main>