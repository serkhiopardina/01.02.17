<?php
$login= $_POST['login'];
$pass= $_POST['pass'];
if($login==='admin' || $pass==='admin'){
    $message= "Всё верно ))";
    
}else{
    $message= "Голяк ((";
}
echo $message;