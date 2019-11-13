<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformCodeStyle\PhpCsFixer;

use PhpCsFixer\ConfigInterface;

/**
 * Factory for Config instance that should be used for all internal eZ Systems packages.
 *
 * @internal
 */
class EzPlatformInternalConfigFactory
{
    public const EZPLATFORM_PHP_HEADER = <<<'EOF'
@copyright Copyright (C) eZ Systems AS. All rights reserved.
@license For full copyright and license information view LICENSE file distributed with this source code.
EOF;

    public static function build(): ConfigInterface
    {
        $config = Config::create();

        $specificRules = [
            'header_comment' => [
                'commentType' => 'PHPDoc',
                'header' => static::EZPLATFORM_PHP_HEADER,
                'location' => 'after_open',
                'separate' => 'top',
            ],
        ];
        $config->setRules(array_merge($config->getRules(), $specificRules));

        return $config;
    }
}
