<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Kerisy\Validator\Rules;

use Kerisy\Validator\Exceptions\ComponentException;
use Kerisy\Validator\Validatable;

class Key extends AbstractRelated
{
    public function __construct($reference, Validatable $referenceValidator = null, $mandatory = true)
    {
        if (!is_scalar($reference) || '' === $reference) {
            throw new ComponentException('Invalid array key name');
        }
        parent::__construct($reference, $referenceValidator, $mandatory);
    }

    public function getReferenceValue($input)
    {
        return $input[$this->reference];
    }

    public function hasReference($input)
    {
        return is_array($input) && array_key_exists($this->reference, $input);
    }
}
