<?php 

namespace TextEditor;

$config = $_GET['config'];
$valid = $_GET['valid'];

// echo $config;
// die();

if (empty($config) && "false" == $valid) {
    echo json_encode(['status' => false, 'msg' => 'No values in the textarea']);

} elseif (isset($config) && "false" == $valid) {
    echo json_encode(['status' => false, 'msg' => 'Invalid JSON format']);

} elseif (isset($config) && "true" == $valid) {
    echo json_encode(['status' => true, 'msg' => 'Submitted successfully']);
    file_put_contents(dirname(__DIR__) . '/config.json', $config);
}


?>