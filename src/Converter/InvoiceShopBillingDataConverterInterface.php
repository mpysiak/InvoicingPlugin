<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\InvoicingPlugin\Converter;

use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\InvoicingPlugin\Entity\InvoiceShopBillingDataInterface;

interface InvoiceShopBillingDataConverterInterface
{
    public function convert(ChannelInterface $channel): InvoiceShopBillingDataInterface;
}
