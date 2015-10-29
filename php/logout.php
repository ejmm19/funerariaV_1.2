<?php
session_start();
session_destroy();
echo '<div style="font-family:san-serif; font-size:24px; margin-top:20%; margin-left:40%;">Ha terminado la sesión Bye</div>';
echo '<script>
location.href = "../index.php";
</script>
';
?>
