<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Application Specific Constants
    |--------------------------------------------------------------------------
    |
    | These values relate back to various types in the system.
    |
    */

    'types' => [
        'brand'   => 1000,
        'rarity'  => 2000,
        'edition' => 3000,
        'role'    => 4000
    ],

    'brands' => [
        'pokemon' => 1001,
        'yugioh'  => 1002,
        'magic'   => 1003
    ],

    'rarities' => [
        "common"            => 2001,
        "uncommon"          => 2002,
        "rare"              => 2003,
        "rare_holo"         => 2004,
        "secret_rare"       => 2005,
        "ultra_rare"        => 2006,
        "super_rare"        => 2007,
        "short_print"       => 2008,
        "super_short_print" => 2009
    ],

    'editions' => [
        'unlimited'       => 3001,
        'first_edition'   => 3002,
        'limited_edition' => 3003,
        'shadowless' => 3004,
        'prerelease' => 3005
    ]

];
