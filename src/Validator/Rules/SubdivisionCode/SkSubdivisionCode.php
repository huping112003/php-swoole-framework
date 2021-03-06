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
 * Validator for Slovakia subdivision code.
 *
 * ISO 3166-1 alpha-2: SK
 *
 * @link http://www.geonames.org/SK/administrative-division-slovakia.html
 */
class SkSubdivisionCode extends AbstractSearcher
{
    public $haystack = [
        'BC', // Banskobystricky
        'BL', // Bratislavsky
        'KI', // Kosicky
        'NI', // Nitriansky
        'PV', // Presovsky
        'TA', // Trnavsky
        'TC', // Trenciansky
        'ZI', // Zilinsky
    ];

    public $compareIdentical = true;
}
