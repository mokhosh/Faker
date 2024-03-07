<?php

namespace Faker\Provider\fa_IR;

use Faker\Calculator\Luhn;

class Payment extends \Faker\Provider\Payment
{
    protected static $cardVendors = [
        'Melli', 'Mellat', 'Sepah', 'Saderat', 'Keshavarzi',
        'Maskan', 'Parsian', 'Saman', 'Sina', 'Shahr', 'Tejarat',
    ];

    protected static $cardParams = [
        'Melli' => [
            '603799##########',
        ],
        'Mellat' => [
            '610433##########',
        ],
        'Sepah' => [
            '589210##########',
        ],
        'Saderat' => [
            '627648##########',
            '207177##########',
        ],
        'Keshavarzi' => [
            '603770##########',
            '639217##########',
        ],
        'Maskan' => [
            '628023##########',
        ],
        'Parsian' => [
            '622108##########',
            '639194##########',
            '627884##########',
        ],
        'Saman' => [
            '621986##########',
        ],
        'Sina' => [
            '639346##########',
        ],
        'Shahr' => [
            '502806##########',
            '504806##########',
        ],
        'Tejarat' => [
            '627353##########',
        ],
    ];

    /**
     * Returns the String of an Iranian card number.
     *
     * @param string $type      Supporting any of 'Melli', 'Mellat', 'Sepah', 'Saderat', 'Keshavarzi',
     *                                            'Maskan', 'Parsian', 'Saman', 'Sina', 'Shahr' and 'Tejarat',
     * @param bool   $formatted Set to true if the output string should contain one separator every 4 digits
     * @param string $separator Separator string for formatting card number. Defaults to dash (-).
     *
     * @return string
     *
     * @example '6104337526776537'
     */
    public static function debitCardNumber($type = null, $formatted = false, $separator = '-')
    {
        return static::creditCardNumber($type, $formatted, $separator);
    }
}
