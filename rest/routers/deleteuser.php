<?php
function route($method, $urlData, $formData,$USER)
{
    if (($method === 'DELETE') && (count($urlData)===1)) {
        $ID=$urlData[0];
        echo "��������� ID: ".$ID."<br>";
        if (CUser::Delete($ID)) {
            echo "������������ � ID=".$ID." ������� �����!";
        } else {
            echo "�� ������ ������������ � id.";
        }
        return;
    } else {
        echo "������ �������!";
        return;
    }
}