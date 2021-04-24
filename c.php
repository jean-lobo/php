<?php

class Student {
    public $name;

    function __construct( $name ) {
        $name = $name;
    }
};

$tom = new Student('Tom');
echo $tom->name;

?>
