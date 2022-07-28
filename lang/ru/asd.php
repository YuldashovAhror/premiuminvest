<?php


foreach(App\Models\Words::orderBy('id')->get() as $word)
{
    $arr[$word->key] = $word->ru;
}
return $arr;
