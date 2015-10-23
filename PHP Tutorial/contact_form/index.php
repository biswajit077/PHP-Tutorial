<?php 
    session_start();
    require_once 'helpers/security.php';
    
    $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
    $fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>
<!DOCTYPE html>
<<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Contact form</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
    </head>
    <body>
        <div class="contact">
        <?php if(!empty($errors)):?>
            <div class="panel">
                <ul><li><?php echo implode('</li><li> ', $errors); ?></li></ul>
            </div>
            <?php endif;?>
            <form action="contact.php" method="post">
                <label for="name">Your Name *
                    <input type="text" name="name" id="name"  autocomplete="off" <?php echo isset($fields['name']) ? 'value="'.e($fields['name']).'"' : '';?>/>
                </label>
                <label for="email">Your Email address *
                    <input type="email" name="email" id="email"  autocomplete="off" <?php echo isset($fields['email']) ? 'value="'.e($fields['email']).'"' : '';?>/>
                </label>
                <label for="message">Your message *
                    <textarea name="message" id="message"  rows="8" cols=""><?php echo isset($fields['message']) ? e($fields['message']): '';?></textarea>
                </label>
                <input type="submit" value="Send" />
                <p class="muted">* means a required field</p>
            </form>
        </div>
    </body>
</html>
<?php 
    unset($_SESSION['errors']);
    unset($_SESSION['fields']);
?>
