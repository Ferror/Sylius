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

namespace Sylius\Bundle\AttributeBundle\Form\Type\AttributeType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class DateAttributeType extends AbstractType
{
    public function getParent(): string
    {
        return DateType::class;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefaults([
                'label' => false,
                'widget' => 'single_text',
            ])
            ->setRequired('configuration')
            ->setDefined('locale_code')
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'sylius_attribute_type_date';
    }
}
