<?php

$arr = [];
foreach(App\Models\Words::orderBy('id')->get() as $word)
{
    $arr[$word->key] = $word->uz;
}
return $arr;
