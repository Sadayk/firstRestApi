<?php
//POST - add new user
function route($method, $urlData, $formData,$USER)
{
    if ($method === 'POST') {
        $newUser=new CUser;
        $newUserId=$newUser->Add($formData);
        if ((int)$newUserId > 0) {
            echo 'Пользователь успешно добавлен. Его ID='.$newUserId;
        } else {
            echo 'Не удалось добавить пользователя. Причина — '.$newUser->LAST_ERROR;
        }
        return;
    }else{
        echo "Не POST запрос";
    }
}