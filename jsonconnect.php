<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');
 
    $db = new mysqli('localhost','root','','student');
    $db->set_charset('utf8');
    
    if($db->connect_error) {
 
        die('데이터베이스 연결 에러.\n 관리자에게 물어보세요.');
 
    }
    
    function pqi($data){
        global $db;
        return $db->real_escape_string($data);
    }
    
    function mq($sql)
    {
        global $db;
        return $db->query($sql);
    }
?>
