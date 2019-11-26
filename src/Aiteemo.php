<?php

namespace Aiteemo;
class Aiteemo
{
    public function say()
    {
        $common = new Common();
        echo $common->laba() . " say: hello aiteemo";
    }
}