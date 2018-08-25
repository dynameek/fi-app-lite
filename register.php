<?php
    session_start();
    require_once('./web.php');
    require_once('./processes/register.process.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>FieldInsights</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            Asset::loadStyles(['general', 'forms', 'index-specific', 'colors', 'links']);
            Asset::loadScripts(['system.js','signup-handler.js']);
        ?>
    </head>
    <body>
        <div class="page-wrap">
            <div>
                <div class="site-icon">
                    <?php Asset::loadImage('fi-logo.png') ?>
                </div>
                <div class="form-wrapper">
                    <h3>Create Account</h3>
                    <form name="fi_reg" method="post" action="">
                        <?=Security::protectForm() ?>
                        <div id="form-message"><?=isset($msg) ? $msg :  ''?></div>
                        <input type="text" name="fi_name" placeholder="Full Name">
                        <input type="email" name="fi_email" placeholder="Email Address">
                        <input type="tel" name="fi_phone" placeholder="Phone Number (e.g +2348123456789)">
                        <input type="password" name="fi_passwd" placeholder="Password">
                        <input type="password" name="fi_cpasswd" placeholder="Comfirm Password">
                        <input type="button" name="fi-signup-sub" value="Register" class="bg-cool-blue no-border" id="reg-btn">
                    </form>
                </div>
                <div>Already have an account? <a href="./index.php">Sign In</a></div>
            </div>
        </div>
    </body>
</html>