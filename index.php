<?php
error_reporting(0);
ob_start();

function __autoload($class_name) {
	require_once "lib/{$class_name}.class.php";
}

if (!$_POST) {
	$tpl = new tpl('index');
	echo $tpl;
} else {
	if (isset($_POST['key']) && is_array($_POST['key']) && isset($_POST['val']) && is_array($_POST['val'])) {

                $error = array();
                $testdatas = array_combine($_POST['key'], $_POST['val']);
		foreach ($testdatas as $key => $val) {
                    (preg_match('/^\d|<|>|\$|\^/', $key) || $key=='')?$error['keys'][]=$key:'';
                    (!preg_match('/^\d+$/', $val) || $val=='')?$error['vals'][]=$val:'';
		}

                if(count($error)!=0){
                    
                    array_unshift($error, 'err');
                    echo json_encode($error);
                    
                }else{
                    
                    $data = new data(array_combine($_POST['key'], $_POST['val']));
                    $json = array();
                    
                    foreach ($data as $key => $val) {
                        $json[$key] = $val;
                    }
                    
                    echo json_encode($json);    
                    
                }

	}
}