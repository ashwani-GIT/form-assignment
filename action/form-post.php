<?php
$root = $_SERVER['DOCUMENT_ROOT'];
if (!is_writable($root . 'data')) {
    file_put_contents($root . '/data/form.' . time() . ".json", json_encode([$_POST, $_FILES]));
    echo "Form Submitted Success";
} else {
    echo "Form Not Submitted";
}

exit;
