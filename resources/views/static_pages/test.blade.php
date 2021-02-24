<?php
use Illuminate\Http\Request;

$foo = new ReflectionClass('Request');
echo $foo->getFileName();