<?php

declare(strict_types=1);

namespace Symbiotic\Form;

use Symbiotic\View\ViewFactory;


interface FieldInterface extends \JsonSerializable, \Stringable
{

    const TEXT = 'text';
    const HIDDEN = 'hidden';
    const PASSWORD = 'password';
    const FILE = 'file';
    const DATE = 'date';
    const EMAIL = 'email';
    const URL = 'url';
    const NUMBER = 'number';
    const SUBMIT = 'submit';

    const TEXTAREA = 'textarea';
    const SELECT = 'select';
    const RADIO = 'radio';
    const CHECKBOX = 'checkbox';

    const HTML = 'html';
    const BUTTON = 'button';

    const GROUP = 'group';


    /**
     * Field name attribute
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name): static;

    /**
     * Field name prefix
     *
     * @param string $prefix
     *
     * @return $this
     */
    public function setPrefix(string $prefix): static;


    /**
     * Returns only the name without the prefix
     *
     * @use getFullName() to get the full name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Return prefix and name
     *
     * @return string
     */
    public function getFullName(): string;

    /**
     * Returns prefix and name with dot syntax
     *
     * @return string
     */
    public function getDotName(): string;

    /**
     * @param string|null $template
     *
     * @return string
     * @throws \Symbiotic\Packages\ResourceExceptionInterface
     */
    public function render(string $template = null): string;

    /**
     * @param ViewFactory $viewFactory
     *
     * @return $this
     */
    public function setView(ViewFactory $viewFactory): static;

}