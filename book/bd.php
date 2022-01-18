<?php
    $db = mysqli_connect('localhost','bookworld','20052002Nastya');//("ваш MySQL сервер","логин к этому серверу","пароль к этому серверу")
    mysqli_select_db($db,'bookworld') //("имя базы, к которой подключаемся",$db)
?> 