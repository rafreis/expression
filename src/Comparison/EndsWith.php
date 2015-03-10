<?php

/*
 * This file is part of the webmozart/expression package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Expression\Comparison;

use Webmozart\Expression\Logic\Literal;

/**
 * Checks that a value has a given suffix.
 *
 * @since  1.0
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class EndsWith extends Literal
{
    /**
     * @var string
     */
    private $acceptedSuffix;

    /**
     * Creates the expression.
     *
     * @param string $acceptedSuffix The accepted suffix.
     */
    public function __construct($acceptedSuffix)
    {
        $this->acceptedSuffix = $acceptedSuffix;
    }

    /**
     * Returns the accepted suffix.
     *
     * @return string The accepted suffix.
     */
    public function getAcceptedSuffix()
    {
        return $this->acceptedSuffix;
    }

    /**
     * {@inheritdoc}
     */
    public function evaluate($value)
    {
        return $this->acceptedSuffix === substr($value, -strlen($this->acceptedSuffix));
    }
}
