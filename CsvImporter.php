<?php

namespace ignatenkovnikita\csv;
/**
 * Class CsvImporter
 * @package ignatenkovnikita\csv
 */
class CsvImporter
{

    /**
     * @var
     */
    private $_data;

    /**
     * @param CsvReader $reader
     */
    public function setData(CsvReader $reader)
    {
        $this->_data = $reader->readFile();
    }

    /**
     * Will get CSV data
     * @return array
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * Will import csv file using strategy.
     * @param ImportInterface $strategy
     * @param $params
     * @return mixed
     */
    public function import(ImportInterface $strategy, $params)
    {
        return $strategy->import($this->_data, $params);
    }

}
