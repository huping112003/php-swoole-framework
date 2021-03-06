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
 * Validator for Vanuatu subdivision code.
 *
 * ISO 3166-1 alpha-2: VU
 *
 * @link http://www.geonames.org/VU/administrative-division-vanuatu.html
 */
class VuSubdivisionCode extends AbstractSearcher
{
    public $haystack = [
        'MAP', // Malampa
        'PAM', // Penama
        'SAM', // Sanma
        'SEE', // Shefa
        'TAE', // Tafea
        'TOB', // Torba
    ];

    public $compareIdentical = true;
}
