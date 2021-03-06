<?php

/*
 * This file is part of the Cekurte package.
 *
 * (c) João Paulo Cercal <jpcercal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cekurte\Resource\Query\Language\Expr;

use Cekurte\Resource\Query\Language\Contract\ExprInterface;
use Cekurte\Resource\Query\Language\Expr\LikeExpr;

/**
 * NotLikeExpr
 *
 * @author João Paulo Cercal <jpcercal@gmail.com>
 */
class NotLikeExpr extends LikeExpr implements ExprInterface
{
    /**
     * @inheritdoc
     */
    public function __construct($field, $value)
    {
        parent::__construct($field, $value);

        $this->expression = 'notLike';
        $this->operator   = 'notlike';
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Not like';
    }
}
