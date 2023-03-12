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
    public function getTitle(): string;

    /**
     * @return bool
     */
    public function isCollapsed(): bool;


    /**
     * @return bool
     */
    public function isMulti() : bool;

    /**
     * @return FieldInterface[]
     */
    public function getFields(): iterable;

    /**
     * @return array
     */
    public function getSubGroups():?array;

    /**
     * Collapsed fields
     * @return FieldInterface[]
     */
    public function getFieldsArray(): array;

}