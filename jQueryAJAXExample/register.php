<?php

for ($i=0; $i < 10000000; $i++) { 
    # code...
}

if(isset($_POST['u']) && isset($_POST['p'])) {
    $arr = array('username' => $_POST['u'], 'password' => $_POST['p']);
    echo json_encode($arr);
}

// $arr = array('username' => $_POST['u'], 'password' => $_POST['p']);
    // echo json_encode($arr);

?>