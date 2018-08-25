<?php
    /*  */
    $val = isset($_GET['val']) ? $_GET['val'] : '';
    echo hash('sha256', $val);
?>