<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT');
header('Content-Type: application/json');
require_once '../../../../wp-load.php';
$records = get_field('projects', 6);
foreach ($records as $r) {
    $xy = explode(',',$r['project_xy']);
    $pList[] = [
        'name' => $r['project_name'],
        'logo' => $r['project_logo']['url'],
        'url' => $r['project_url'],
        'x' => @$xy[0],'y' => @$xy[1]
    ];
}
echo json_encode($pList);
