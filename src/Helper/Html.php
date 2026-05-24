<?php

declare(strict_types=1);

namespace Maduser\Argon\Support\Helper;

use Maduser\Argon\Support\Contracts\HtmlableInterface;
use Override;
use Stringable;

final class Html implements HtmlableInterface, Stringable
{
    private ?string $rendered = null;

    private function __construct(
        private readonly string $template,
        private readonly array $context = [],
        private readonly bool $escape = true,
    ) {
    }

    public static function create(string $template, array $context = [], bool $escape = true): self
    {
        return new self($template, $context, $escape);
    }

    #[Override]
    public function toHtml(): string
    {
        if ($this->rendered !== null) {
            return $this->rendered;
        }

        $this->rendered = preg_replace_callback(
            '/{{\s*([\w.-]+)\s*}}/',
            [$this, 'replacePlaceholder'],
            $this->template
        ) ?? '';

        return $this->rendered;
    }

    #[Override]
    public function __toString(): string
    {
        return $this->toHtml();
    }

    /**
     * @param array<array-key, string> $matches
     */
    private function replacePlaceholder(array $matches): string
    {
        $key = $matches[1] ?? '';

        if ($key === '' || !array_key_exists($key, $this->context)) {
            return $matches[0] ?? '';
        }

        $value = (string) $this->context[$key];

        return $this->escape
            ? htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')
            : $value;
    }
}
