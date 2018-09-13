<?php
$data = json_encode(array('err'=>'跨域调用','code'=>'你错了'));
echo $_GET['jsonpCallback'].'('.$data.')';