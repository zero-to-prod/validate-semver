# Zerotoprod\ValidateSemVer

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/validate-semver)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-semver/test.yml?label=tests)](https://github.com/zero-to-prod/validate-semver/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/validate-semver?color=blue)](https://packagist.org/packages/zero-to-prod/validate-semver/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/validate-semver.svg?color=purple)](https://packagist.org/packages/zero-to-prod/validate-semver/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/validate-semver?color=f28d1a)](https://packagist.org/packages/zero-to-prod/validate-semver)
[![License](https://img.shields.io/packagist/l/zero-to-prod/validate-semver?color=pink)](https://github.com/zero-to-prod/validate-semver/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/validate-semver.svg)](https://wakatime.com/badge/github/zero-to-prod/validate-semver)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/validate-semver?branch=main)](https://hitsofcode.com/github/zero-to-prod/validate-semver/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

Validates a SemVer string.

## Requirements

- PHP 7.1 or higher.

## Installation

Install `Zerotoprod\ValidateSemver` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/validate-semver
```

This will add the package to your project’s dependencies and create an autoloader entry for it.

## Usage

Returns true if the value is a valid SemVer string.

```php
Zerotoprod\ValidateSemVer\ValidateSemVer::isValid('1.0.0')
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/validate-semver/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.