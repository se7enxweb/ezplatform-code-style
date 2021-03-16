# Ibexa Code Style

This package contains Ibexa Coding Standards which are aimed to include plugins  
for code style tools, plugins for CI, IDE settings, Git hooks, GitHub templates related  
to contributions, etc.

## Usage

### Third party packages

Create a `.php_cs` file in your project root directory with the following content:

```php
<?php

$config = new EzSystems\EzPlatformCodeStyle\PhpCsFixer\Config();
$config->setFinder(
    PhpCsFixer\Finder::create()
        ->in(__DIR__ . '/src')
        ->in(__DIR__ . '/tests')
        ->files()->name('*.php')
);

return $config;
```

### Ibexa packages

Create a `.php_cs` file in your project root directory with the following content:

```php
<?php

return EzSystems\EzPlatformCodeStyle\PhpCsFixer\EzPlatformInternalConfigFactory::build()
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/src')
            ->in(__DIR__ . '/tests')
            ->files()->name('*.php')
    )
;
```

## FAQ

See [FAQ](doc/FAQ.md) for common questions about contributing to Ibexa-related packages.

## COPYRIGHT

Copyright (C) 1999-2021 Ibexa AS (formerly eZ Systems AS). All rights reserved.

## LICENSE

This source code is available separately under the following licenses:

A - Ibexa Business Use License Agreement (Ibexa BUL),
version 2.3 or later versions (as license terms may be updated from time to time)
Ibexa BUL is granted by having a valid Ibexa DXP (formerly eZ Platform Enterprise) subscription,
as described at: https://www.ibexa.co/product
For the full Ibexa BUL license text, please see:
- LICENSE-bul file placed in the root of this source code, or
- https://www.ibexa.co/software-information/licenses-and-agreements (latest version applies)

AND

B - GNU General Public License, version 2
Grants an copyleft open source license with ABSOLUTELY NO WARRANTY. For the full GPL license text, please see:
- LICENSE file placed in the root of this source code, or
- https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
