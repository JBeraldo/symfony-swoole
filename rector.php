<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/src',
    ])
    // uncomment to reach your current PHP version
    ->withPreparedSets(deadCode: true, codeQuality: true, codingStyle: true, typeDeclarations: true)
    ->withAttributesSets(symfony: true, doctrine: true)
    ->withPhpSets(true)
    ->withRules([
        AddVoidReturnTypeWhereNoReturnRector::class,
    ]);
