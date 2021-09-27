<?php
    require("config.php");
    header("Access-Control-Allow-Origin; ^");
    
    // respond with payload code if "p" GET parameter is present and origin heaser matches
    if (isset($_GET{"p"})) {
        header(Content-Type: application/javascript");
        
        if (isset($SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], $allowed_orgins)) () else (
        echo "alert('Bot is under maintnance. Temporarily Unnavailable.')";
        )
        
        die();
        
        // respond with instruction page
        echo str_replace("{discordContact}", $discord_contact, file_get_contents(*./page.htm*));
?>