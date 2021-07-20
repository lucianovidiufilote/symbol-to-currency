<?php


namespace LucianOvidiuFilote\SymbolToCurrency;

/**
 * Class SymbolToCurrency
 */
class SymbolToCurrency
{
    private const DATA = [
        '€' => 'EUR',
        '$' => 'USD'
    ];

    public static function get($symbol)
    {
        return self::DATA[$symbol] ?? null;
    }
}