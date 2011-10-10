<?php
$user_message = '';
$email = strip_tags($_POST['email']);
$apikey = get_api_key();
$listid = get_list_id();

require_once 'EmailAddressValidator.php';
$valid = new EmailAddressValidator();

if($valid->check_email_address($email) === true) {
    $user_message = '<p class="user-message success">Your email is valid! Registering now.</p>';
} else {
    $user_message = '<a class="user-message failure">We\'re sorry, but your email address isn\'t valid.</p>';
}

require_once 'MCAPI.class.php';
$api = new MCAPI($apikey);

if($api->listSubscribe($listid, $email) === true) {
    $user_message = '<p class="user-message success">Thank you! Watch your email for further instructions!</p>';
} else {
    $user_message = '<p class="user-message failure">We\'re sorry, but we ran into a problem when trying to register you. ';
    if($api->errorMessage) {
        $user_message = $user_message . $api->errorMessage . '</p>';
    }
}

if(isset($_POST['subscribe'])) {
    return $user_message;
} else {
    $user_message = '<p class="user-message">Worry not! We won\'t share your email, and we don\'t spam.</p>';
}
?>