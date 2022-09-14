<?php

namespace App;

class ListParser{
    public function parse(string $list): array
    {
        return preg_split("| ?[, ] ?|", $list);
    }
}
