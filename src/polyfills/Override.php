<?php

declare(strict_types=1);

if (!class_exists('Override')) {
    #[Attribute(Attribute::TARGET_METHOD)]
    #[\AllowDynamicProperties]
    final class Override {}
}
