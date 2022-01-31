<?php


function getVariable($key)
{

    $variable = new \App\Models\Variable();

    return  $variable->val($key);

}
