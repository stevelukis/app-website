<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?= site_url('css/signup.css') ?>">

</head>

<body>

<?php echo validation_errors(); ?>

<?php echo form_open('change_password'); ?>
    <h1>Change Password</h1><br/>

    <span id="passwordMeter"></span>
    <input type="text" name="username" id="username" style="visibility: hidden">
    <input type="password" name="password" id="password" placeholder="Password" required/>

    <button type="submit" value="Sign Up" title="Submit form" class="icon-arrow-right"><span>Sign up</span></button>
</form>

<script>
	document.getElementById('username').value = localStorage.getItem('username');
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="<?= site_url('js/signup.js') ?>"></script>

</body>

</html>
