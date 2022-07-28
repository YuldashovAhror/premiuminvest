<?php


foreach(App\Models\Words::orderBy('id')->get() as $word)
{
    $arr[$word->key] = $word->en;
}
return $arr;
