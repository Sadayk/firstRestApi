<?php
function route($method, $urlData, $formData,$USER){
    //GET user info
    if (($method === 'GET')&&(count($urlData)!=0)) {
        $by = "id";
        $order = "asc";
        //echo "Выбранный ID: ".$urlData[0]."<br>";
        $rsUser = CUser::GetList($by, $order, array("ID"=>$urlData[0]));//$USER->GetID()
        if ($arUser = $rsUser->Fetch())
        {
//            echo json_encode(array(
//                'LOGIN'=>$arUser["LOGIN"],
//                'FIO'=>$arUser["LAST_NAME"]." ".$arUser["NAME"]
//            ));
            var_dump(array(
                'LOGIN'=>$arUser["LOGIN"],
                'FIO'=>$arUser["LAST_NAME"]." ".$arUser["NAME"]
            ));
//            echo "<pre>";
//            print_r($arUser);
//            echo "</pre>";
        }else{
            echo "Пользователь не найден.";
        }
        return;
    }
    else {
        if (($method === 'GET') && $USER->IsAuthorized()) {
            $by = "id";
            $order = "asc";
            $rsUser = CUser::GetList($by, $order, array("ID" => $USER->GetID()));//$USER->GetID()
            if ($arUser = $rsUser->Fetch())
            {
                var_dump(array(
                    'LOGIN' => $arUser["LOGIN"],
                    'FIO' => $arUser["LAST_NAME"] . " " . $arUser["NAME"]
                ));
            }
            return;
        } else {
            echo "Ошибочный запрос или не выполнен вход.";
            return;
        }
    }
}
