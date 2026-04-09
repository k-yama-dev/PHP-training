<?php
    header('Content-Type: application/json');

    $user = array(
        'id'=>1,
        'name'=>'Yayoi'
    );

    print(json_encode($user));
?>