<?php
function route($method, $urlData, $formData,$USER)
{
    if (($method === 'PATCH') && (count($urlData)===1)) {
        $ID=$urlData[0];
        //echo "Выбранный ID: ".$ID."<br>";
        var_dump($formData);
        $editUser=new CUser;
        if ($editUser->Update($ID,$formData)) {
            echo "Пользователь с ID=".$ID." успешно отредактирован!";
        } else {
            echo 'Не удалось редактировать пользователя. Причина — '.$editUser->LAST_ERROR;
        }
        return;
    } else {
        echo "Ошибка запроса!";
        return;
    }
}