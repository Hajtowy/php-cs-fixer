<?php

class ExampleClass
{
    final public function test(string $value, array $zm = array())
    {
        switch ($value) {
            case '3a': echo 'bad'; break;
            case '3aa': echo 'bad2'; break;
        }
    }
}
