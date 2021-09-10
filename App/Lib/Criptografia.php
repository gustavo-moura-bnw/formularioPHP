<?php

namespace App\Lib;

cLass Criptografia
{
    const KEY = 'juju78"&*%$==';

    public static function criptografar($texto)
    {
        if(empty($texto)) {
            return '';
        }

        return base64_encode($texto . self::KEY);
    }
}