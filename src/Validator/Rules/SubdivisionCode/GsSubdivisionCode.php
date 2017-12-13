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
 * Validator for South Georgia and the South Sandwich Islands subdivision code.
 *
 * ISO 3166-1 alpha-2: GS
 *
 * @link http://www.geonames.org/GS/administrative-division-south-georgia-and-the-south-sandwich-islands.html
 */
class GsSubdivisionCode extends AbstractSearcher
{
    public $haystack = [null, ''];

    public $compareIdentical = true;
}