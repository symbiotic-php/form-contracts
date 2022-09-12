<?php

declare(strict_types=1);

namespace Symbiotic\Form;


interface GroupInterface extends FieldInterface
{

    /**
     * @param FieldInterface $item
     *
     * @return static
     */
    public function add(FieldInterface $item): static;

    /**
     * @param array $data
     *
     * @return $this
     */
    public function setValues(array $data): static;


    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return bool
     */
    public function isCollapsed(): bool;


    /**
     * @return FieldInterface[]
     */
    public function getFields(): array;

    /**
     * Collapsed fields
     * @return FieldInterface[]
     */
    public function getFieldsArray(): array;
}