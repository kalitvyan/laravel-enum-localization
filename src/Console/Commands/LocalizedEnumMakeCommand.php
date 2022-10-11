<?php

namespace Kalitvyan\Enums\Console\Commands;

use Illuminate\Console\GeneratorCommand;

final class LocalizedEnumMakeCommand extends GeneratorCommand
{
    protected $signature = "make:enum {name : The Enum Name}";

    protected $description = "Create a new Enum";

    protected $type = 'Enum Object';

    protected function getStub(): string
    {
        return __DIR__ . "/../../../stubs/enum.stub";
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\\Enums";
    }
}
