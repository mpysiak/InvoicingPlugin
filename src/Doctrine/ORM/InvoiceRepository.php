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

namespace Sylius\InvoicingPlugin\Doctrine\ORM;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use Sylius\InvoicingPlugin\Entity\InvoiceInterface;

class InvoiceRepository extends EntityRepository implements InvoiceRepositoryInterface
{
    public function findOneByOrderNumber(string $orderNumber): ?InvoiceInterface
    {
        /** @var InvoiceInterface|null $invoice */
        $invoice = $this->findOneBy(['orderNumber' => $orderNumber]);

        return $invoice;
    }
}
