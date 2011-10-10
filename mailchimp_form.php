<form action="<?php $_SERVER['PHPSELF']; ?>" method="POST" name="mc-subscribe-form">
    <?php include_once 'functions/subscribe.php'; ?>
    <label for="mc-email">Email Address</label>
    <input type="email" name="email" class="email" id="email" placeholder="Email Address" required>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
</form>