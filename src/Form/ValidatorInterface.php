<?php

declare(strict_types=1);

namespace Symbiotic\Form;


interface ValidatorInterface
{

    /**
     * @return null|string
     */
    public function getError(): ?string;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function validate(mixed $value): bool;
}