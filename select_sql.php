<?php
/*
 * array must have array['total_count'] for pagination
 * array items must have 'id','text'
 * all items must be in array['items'][]
 */
$cnt = $_REQUEST['q'];
$array = array("total_count"=>$cnt);
$i = 0;
if($cnt > 0) {
    while ($i < $cnt) {
        $array["products"][] = array(
            "id" => $i * $cnt,
            "name" => "name_" . $i * $cnt,
            "text" => "Some descr of item"
        );
        $i++;
    };
    echo json_encode($array);
}