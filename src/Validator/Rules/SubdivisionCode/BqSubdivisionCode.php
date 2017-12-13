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
 * Validator for Bonaire subdivision code.
 *
 * ISO 3166-1 alpha-2: BQ
 *
 * @link http://www.geonames.org/BQ/administrative-division-bonaire.html
 */
class BqSubdivisionCode extends AbstractSearcher
{
    public $haystack = [
        'BO', // Bonaire
        'SA', // Saba
        'SE', // Sint Eustatius
    ];

    public $compareIdentical = true;
}