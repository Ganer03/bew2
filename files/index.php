<?php
header('Content-Type: text/html; charset=UTF-8');
$comment = "";
if (isset($_POST["comment"])) {
 $comment = $_POST["comment"];
}
echo "Comment=$comment";
