<?php

$arr_response = [];
$arr_response['name'] = isset( $_POST['name'] ) ? $_POST['name']: '';
$arr_response['last_name'] = isset( $_POST['last_name'] ) ? $_POST['last_name']: '';
$arr_response['data'] = isset( $_POST['data'] ) ? $_POST['data']: '';
$arr_response['msg'] = 'Data sent';
echo json_encode( $arr_response );