<?php
namespace ignatenkovnikita\csv;


/**
 * Class CsvExporter
 * @package ignatenkovnikita\csv
 */
class CsvExporter
{

    /**
     * @var array
     */
    private $headers = [];
    /**
     * @var array
     */
    private $rows = [];
    /**
     * @var string
     */
    private $separator;

    /**
     * CsvExporter constructor.
     * @param $name
     * @param string $separator
     */
    function __construct($name, $separator = ';')
    {
        $this->separator = $separator;
    }

    /**
     * @param $items
     */
    public function setHeader($items)
    {
        $this->headers = $items;
    }

    /**
     * @param $items
     */
    public function addRow($items)
    {
        $this->rows[] = $items;
    }

    /**
     * @param string $descriptor
     */
    public function out($descriptor = 'php://output')
    {
        $handle = fopen($descriptor, 'w');
        fputcsv($handle, $this->headers, $this->separator);
        foreach ($this->rows as $row) {
            fputcsv($handle, $row, $this->separator);
        }
        fclose($handle);
    }

}
