<?php
//POST - add new user
function route($method, $urlData, $formData,$USER)
{
    if ($method === 'POST') {
        $newUser=new CUser;
        $newUserId=$newUser->Add($formData);
        if ((int)$newUserId > 0) {
            echo '������������ ������� ��������. ��� ID='.$newUserId;
        } else {
            echo '�� ������� �������� ������������. ������� � '.$newUser->LAST_ERROR;
        }
        return;
    }else{
        echo "�� POST ������";
    }
}