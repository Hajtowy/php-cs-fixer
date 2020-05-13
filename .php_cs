<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('src')
    //->notPath('config/ExampleClass.php')
    //->notPath('example-file.php')
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        // 'strict_param' => true,
        'array_syntax' => ['syntax' => 'long'],
    ])
    ->setFinder($finder)
    ->setUsingCache(false)
;