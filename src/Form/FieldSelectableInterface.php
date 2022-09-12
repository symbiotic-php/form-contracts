<?php

declare(strict_types=1);

namespace Symbiotic\Form;


/**
 * Interface SelectableFieldInterface
 * @package Symbiotic\Form
 */
interface FieldSelectableInterface extends FillableInterface
{
    /**
     * @param array $variants
     *
     * @return static
     */
    public function variants(array $variants): static;

    /**
     * @return array|string[]
     */
    public function getVariants(): array;
}