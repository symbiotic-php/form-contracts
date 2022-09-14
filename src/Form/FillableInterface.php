<?php

declare(strict_types=1);

namespace Symbiotic\Form;


interface FillableInterface extends FieldInterface
{

    /**
     * @param string $name
     *
     * @return FillableInterface
     */
    public function setName(string $name): static;

    /**
     * @param string $label
     *
     * @return FillableInterface
     */
    public function setLabel(string $label): static;

    /**
     * @param string|array|null $value array for checkbox or multiselect
     *
     * @return mixed
     */
    public function setValue(string|array|null $value): static;


    /**
     * @param string|array|int $default array for checkbox or multiselect
     *
     * @return mixed
     */
    public function setDefault(string|array|int $default): static;

    /**
     * @param string $description
     *
     * @return FillableInterface
     */
    public function setDescription(string $description): static;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getDotName(): string;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @return string|array|null array for checkbox or multiselect, null if not filled
     */
    public function getValue(): array|string|null;

    /**
     * @return string|array|null array for checkbox or multiselect, null if not filled
     */
    public function getDefault(): array|string|null;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return string
     */
    public function getAttributesHtml(): string;

    /**
     * @return array
     */
    public function getValidators(): array;

    /**
     * @param string|array|null $value
     *
     * @return bool
     */
    public function validate(string|array|null $value): bool;

    /**
     * @return string|null
     */
    public function getError(): ?string;
}