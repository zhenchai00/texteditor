<?php

namespace TextEditor;

$file = file_get_contents(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config.json');
echo json_encode($file);

?>