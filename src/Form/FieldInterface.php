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