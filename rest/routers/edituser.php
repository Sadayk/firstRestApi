<?php
function route($method, $urlData, $formData,$USER)
{
    if (($method === 'PATCH') && (count($urlData)===1)) {
        $ID=$urlData[0];
        //echo "��������� ID: ".$ID."<br>";
        var_dump($formData);
        $editUser=new CUser;
        if ($editUser->Update($ID,$formData)) {
            echo "������������ � ID=".$ID." ������� ��������������!";
        } else {
            echo '�� ������� ������������� ������������. ������� � '.$editUser->LAST_ERROR;
        }
        return;
    } else {
        echo "������ �������!";
        return;
    }
}