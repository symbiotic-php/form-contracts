<?php

declare(strict_types=1);

namespace Symbiotic\Form;

use Symbiotic\View\ViewFactory;


interface FormInterface
{

    const ENCTYPE_URL = 'application/x-www-form-urlencoded';

    const ENCTYPE_MULTIPART = 'multipart/form-data';

    /**
     * @return array
     *
     * @todo It will be necessary to make fields on the classes and give them a collection
     *
     */
    public function getFields(): array;

    /**
     * @param string $name
     *
     * @return FillableInterface|null
     */
    public function getField(string $name):?FillableInterface;

    /**
     * @return string
     */
    public function getAction(): string;

    /**
     * @return string
     */
    public function getMethod(): string;


    /**
     * @param string $type
     * @param array  $data
     *
     * @return FieldInterface
     */
    public function addField(string $type, array $data): FieldInterface;

    /**
     * @param array $data
     *
     * @return $this
     */
    public function setValues(array $data): static;
    /**
     * @param array $values
     *
     * @return FieldsValidator
     */
    public function getValidator(array $values): FieldsValidator;

    /**
     * @param string $action
     *
     * @return FormInterface
     */
    public function setAction(string $action): static;

    /**
     * @param string $method
     *
     * @return FormInterface
     */
    public function setMethod(string $method): static;

    /**
     * @param ViewFactory $viewFactory
     *
     * @return $this
     */
    public function setView(ViewFactory $viewFactory): static;
}