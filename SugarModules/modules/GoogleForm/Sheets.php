<?php
include "./modules/GoogleForm/response/FormData.php";
class Sheets
{
    public function getData($bean, $event, $arguments)
    {
        $sendRequest = new FormData();
        $sendRequest->getValueFromSheet($bean, $event, $arguments);
    }
}
