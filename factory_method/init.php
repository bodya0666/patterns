<?php

namespace App;

use App\Creator\ConcreteCreator;

include __DIR__ . '/vendor/autoload.php';


if ($_FILES)
{
    $test = new ConcreteCreator();

    var_dump($test->saveFile('image'));
}


?>

<form method="post" enctype="multipart/form-data">
    <input name="image" type="file">
    <input type="submit">
</form>
