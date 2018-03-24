Little CSV Helper
=================
Little CSV Helper

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ignatenkovnikita/little-csv-helper "*"
```

or add

```
"ignatenkovnikita/little-csv-helper": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Create class DbImporter or other class extends AbstractImporter and implements ImportInterface:
```php
<?php
class DbImporter extends AbstractImporter implements ImportInterface
{
    public function import($data, $params){
        // your logic hear
    }
}
?>
```

And example how use class:
```php
$importer = new CsvImporter();
$importer->setData(new CsvReader([
    'filename' => $fileName,
        'fgetcsvOptions' => [
    //  'delimiter' => '\n'
    ],
    'startFromLine' => 1
    ]));
$importerClass = new DbImporter();
$r = $importer->import($importerClass, ['type' => $type]);
echo $r
```