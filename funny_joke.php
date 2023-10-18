<?php
// This PHP script sets a "flag" cookie with the value "true"

setcookie("flag", "true", time() + 3600); // Cookie expires in 1 hour

echo "Flag cookie set!";
?>
