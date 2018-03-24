<?php
/**
 * Copyright (C) $user$, Inc - All Rights Reserved
 *
 *  <other text>
 * @file        AbstractImporter.php
 * @author      ignatenkovnikita
 * @date        $date$
 */

/**
 * Created by PhpStorm.
 * User: ignatenkovnikita
 * Web Site: http://IgnatenkovNikita.ru
 */

namespace ignatenkovnikita\csv;


class AbstractImporter
{

    public $log = [];

    public function getLog()
    {
        return implode(PHP_EOL, $this->log) . PHP_EOL;
    }


    public function addToLog($text)
    {
        $this->log[] = $text;
    }

}