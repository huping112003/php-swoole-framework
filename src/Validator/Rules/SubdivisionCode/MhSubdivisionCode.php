<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Kerisy\Validator\Rules\SubdivisionCode;

use Kerisy\Validator\Rules\AbstractSearcher;

/**
 * Validator for Marshall Islands subdivision code.
 *
 * ISO 3166-1 alpha-2: MH
 *
 * @link http://www.geonames.org/MH/administrative-division-marshall-islands.html
 */
class MhSubdivisionCode extends AbstractSearcher
{
    public $haystack = [
        'ALK', // Ailuk
        'ALL', // Ailinglaplap
        'ARN', // Arno
        'AUR', // Aur
        'EBO', // Ebon
        'ENI', // Enewetak
        'JAB', // Jabat
        'JAL', // Jaluit
        'KIL', // Kili
        'KWA', // Kwajalein
        'L', // Ralik chain
        'LAE', // Lae
        'LIB', // Lib
        'LIK', // Likiep
        'MAJ', // Majuro
        'MAL', // Maloelap
        'MEJ', // Mejit
        'MIL', // Mili
        'NMK', // Namorik
        'NMU', // Namu
        'RON', // Rongelap
        'T', // Ratak chain
        'UJA', // Ujae
        'UTI', // Utirik
        'WTH', // Wotho
        'WTJ', // Wotje
    ];

    public $compareIdentical = true;
}
