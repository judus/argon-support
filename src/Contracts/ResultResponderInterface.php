<?php

declare(strict_types=1);

namespace Maduser\Argon\Support\Contracts;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface ResultResponderInterface
{
    public function respond(mixed $result, ServerRequestInterface $request): ResponseInterface;
}
