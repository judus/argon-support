# Argon Support

[![PHP](https://img.shields.io/badge/php-8.2+-blue)](https://www.php.net/)
[![Build](https://github.com/judus/argon-support/actions/workflows/php.yml/badge.svg)](https://github.com/judus/argon-support/actions)
[![codecov](https://codecov.io/gh/judus/argon-support/branch/master/graph/badge.svg)](https://codecov.io/gh/judus/argon-support)
[![Psalm Level](https://shepherd.dev/github/judus/argon-support/coverage.svg)](https://shepherd.dev/github/judus/argon-support)
[![Latest Version](https://img.shields.io/packagist/v/maduser/argon-support.svg)](https://packagist.org/packages/maduser/argon-support)
[![Downloads](https://img.shields.io/packagist/dt/maduser/argon-support.svg)](https://packagist.org/packages/maduser/argon-support)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

`maduser/argon-support` contains shared contracts and small helpers used across
the Argon runtime packages. It keeps cross-package interfaces in one place
without turning them into a general-purpose utility layer.

## Installation

```bash
composer require maduser/argon-support
```

## Contents

- `ErrorHandlerInterface` for runtime exception handling.
- `ResponseEmitterInterface` for HTTP response emission.
- `ResultResponderInterface` for converting handler results to PSR-7 responses.
- `HtmlableInterface` and `Html` for explicit HTML-safe response values.
- The `Override` polyfill used by packages that support PHP 8.2.

## Scope

This package should stay small. It is for shared contracts that several Argon
packages must agree on, not for application helpers or framework conveniences.

## Quality Gate

```bash
composer check
```
