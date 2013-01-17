<?php
    if ( $_POST['id'] == 8 )
    {
        sleep(5);
    } elseif ( $_POST['id'] == 9 )
    {
        header('HTTP/1.1 404 not found');
    }
?>