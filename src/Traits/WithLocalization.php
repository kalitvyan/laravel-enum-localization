<?php

namespace Kalitvyan\Enums\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Lang;

trait WithLocalization
{
    public static function getCases(): array
    {
        $mapped = [];

        foreach (self::cases() as $case) {
            $mapped[$case->name] = $case->value;
        }

        return $mapped;
    }

    public static function getSelectionArray(): array
    {
        $mapped = [];

        foreach (self::cases() as $case) {
            $mapped[$case->value] = $case->lang();
        }

        return $mapped;
    }

    public static function getLangKey(): string
    {
        $arr = explode('\\', substr(get_called_class(), 4));

        $arr = array_map(fn ($val) => Str::snake($val), $arr);

        return implode('.', $arr);
    }

    public static function getLangs(): ?array
    {
        return Lang::get(self::getLangKey());
    }

    public function lang(): string
    {
        return Lang::get(self::getLangKey() . '.' . $this->name);
    }
}
