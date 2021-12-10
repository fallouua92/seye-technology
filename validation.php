<?php
// This is a validation that I have created
function test_input($UA92record) {
    $UA92record = trim($UA92record);
    $UA92record= stripslashes($UA92record);
    $UA92record= htmlspecialchars($UA92record);
    return$UA92record;
  }

?>