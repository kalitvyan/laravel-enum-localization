<?php

use Kalitvyan\Enums\Console\Commands\LocalizedEnumMakeCommand;

use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\assertTrue;

it('can run the command successfully', function () {
    $this
        ->artisan(LocalizedEnumMakeCommand::class, ['name' => 'Test'])
        ->assertSuccessful();
});

it('create the enum object when called', function (string $enum) {
    $this->artisan(
        LocalizedEnumMakeCommand::class,
        ['name' => $enum],
    )->assertSuccessful();

    assertTrue(
        File::exists(
            path: app_path("Enums/$enum.php"),
        ),
    );
})->with([
    'Status',
    'Type',
    'Color'
]);
