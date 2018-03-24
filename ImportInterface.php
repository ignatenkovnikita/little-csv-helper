<?php

namespace ignatenkovnikita\csv;

/**
 * Interface ImportInterface
 * @package ignatenkovnikita\csv
 */
interface ImportInterface
{
    /**
     * @param $data
     * @param $params
     * @return mixed
     */
    public function import($data, $params);

    /**
     * @return mixed
     */
    public function getLog();
}