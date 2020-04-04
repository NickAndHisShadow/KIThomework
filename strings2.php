<?php
$code1 = "('house') : ('mouse')";
function analyze($str) {
    $iserror = (substr_count($str, "(") !== (substr_count($str, ")")));
    return (substr_count($str, "'") % 2) + $iserror;
}
echo analyze($code1);