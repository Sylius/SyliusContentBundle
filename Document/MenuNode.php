<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\ContentBundle\Document;

use Symfony\Cmf\Bundle\MenuBundle\Doctrine\Phpcr\MenuNode as BaseMenuNode;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * @author Magdalena Banasiak <magdalena.banasiak@lakion.com>
 */
class MenuNode extends BaseMenuNode implements ResourceInterface
{
}
