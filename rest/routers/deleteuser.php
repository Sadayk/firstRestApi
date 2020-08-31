<?php
function route($method, $urlData, $formData,$USER)
{
    if (($method === 'DELETE') && (count($urlData)===1)) {
        $ID=$urlData[0];
        echo "Выбранный ID: ".$ID."<br>";
        if (CUser::Delete($ID)) {
            echo "Пользователь с ID=".$ID." успешно удалён!";
        } else {
            echo "Не найден пользователь с id.";
        }
        return;
    } else {
        echo "Ошибка запроса!";
        return;
    }
}