<?php

function cekInfo()
{
    $CI = get_instance();
    return $CI->Model->getGeneral("info", array("id" => 1));
}

function items($where = array(), $limit = "")
{
    $CI = get_instance();
    return $CI->Model->getAllGeneral("items", $where, $limit);
}
function control($value)
{
    if ($value == "" || $value == " " || $value == "0") return 0;
    else return 1;
}
