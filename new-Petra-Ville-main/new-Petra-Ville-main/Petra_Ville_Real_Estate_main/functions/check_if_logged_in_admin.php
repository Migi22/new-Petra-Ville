<?php
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../admin_portal.php");
    exit();
}
?>