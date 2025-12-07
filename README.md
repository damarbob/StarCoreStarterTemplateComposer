# StarCore Starter Template (Composer)

A starter template module for the StarCore kernel, installable via Composer. You can use this project as a starting template for creating a new StarCore module.

## Installation

You can install this module via Composer:

```bash
composer require damarbob/starcore-starter-template-composer
```

Then, activate the module in your StarCore application's `.env` file:

```dotenv
Star.activeModules = 'StarterTemplateComposer'
```

> Activation is required for the module to register hooks.

## Usage

This module is designed to demonstrate how to create a StarCore module that can be distributed via Composer.

### Features

- **Auto-initialization**: The module automatically registers a hook on `Core.modules:init` which logs the kernel name and version to the StarCore logger.
- **Routes**: It exposes a sample route `/start-composer` which returns "Hello World Composer".

### Configuration

The module configuration is handled automatically by StarCore's module discovery system. Ensure that your StarCore application is configured to load modules from Composer dependencies.

## Requirements

- PHP ^8.1
- [damarbob/starcore](https://github.com/damarbob/starcore)

## License

This project is licensed under the MIT License.
