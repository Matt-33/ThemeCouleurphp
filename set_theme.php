<?php
if (isset($_POST['applyTheme'])) {
     $backgroundColor = $_POST['colorPicker'];
    setcookie('backgroundColor', $backgroundColor, time() + (365*24*3600));
    
} 
    header('Location: index.phtml');
    exit();
?>