# Zerotoprod\ValidateSemVer

![](./logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/validate-semver)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-semver/test.yml?label=tests)](https://github.com/zero-to-prod/validate-semver/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/validate-semver?color=blue)](https://packagist.org/packages/zero-to-prod/validate-semver/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/validate-semver.svg?color=purple)](https://packagist.org/packages/zero-to-prod/validate-semver/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/validate-semver?color=f28d1a)](https://packagist.org/packages/zero-to-prod/validate-semver)
[![License](https://img.shields.io/packagist/l/zero-to-prod/validate-semver?color=pink)](https://github.com/zero-to-prod/validate-semver/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/validate-semver.svg)](https://wakatime.com/badge/github/zero-to-prod/validate-semver)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod//validate-semver?branch=main)](https://hitsofcode.com/github/zero-to-prod//validate-semver/view?branch=main)

Validates a SemVer string.

## Installation

Install the package via Composer:

```bash
composer require zero-to-prod/validate-semver
```

## Usage

Returns true if the value is a valid SemVer string.

```php
Zerotoprod\ValidateSemVer\ValidateSemVer::isValid('1.0.0')
```