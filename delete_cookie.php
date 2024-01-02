<?php
if (isset($_COOKIE['backgroundColor'])) {
    setcookie('backgroundColor');
    unset($_COOKIE['backgroundColor']);
}

header('Location: index.phtml');
exit();
?>
