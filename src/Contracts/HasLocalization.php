<?php

namespace Kalitvyan\Enums\Contracts;

interface HasLocalization
{
    /**
     * @return array<?string>
     */
    public static function getCases(): array;

    /**
     * @return array<string>
     */
    public static function getSelectionArray(): array;

    /**
     * @return string
     */
    public static function getLangKey(): string;

    /**
     * @return array<string>|null
     */
    public static function getLangs(): ?array;

    /**
     * @return string
     */
    public function lang(): string;
}
