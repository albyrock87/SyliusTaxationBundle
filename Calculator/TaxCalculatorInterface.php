<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\TaxationBundle\Calculator;

use Sylius\Bundle\TaxationBundle\Model\TaxRateInterface;

/**
 * Tax calculator interface.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@sylius.pl>
 */
interface TaxCalculatorInterface
{
    /**
     * Get the tax amount for given base amount and tax rate.
     *
     * @param float            $base
     * @param TaxRateInterface $rate
     *
     * @return mixed
     */
    public function calculate($base, TaxRateInterface $rate);
}