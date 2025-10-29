<?php

declare(strict_types=1);

namespace Maduser\Argon\Support\Contracts;

interface HtmlableInterface
{
    public function toHtml(): string;
}
