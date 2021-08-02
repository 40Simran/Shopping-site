<?php
session_start();
session_destroy();
?>
<script>
alert("Admin Successfully logout");
window.location="index.php";
</script>