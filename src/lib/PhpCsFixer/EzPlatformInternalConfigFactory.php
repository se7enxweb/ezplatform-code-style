<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformCodeStyle\PhpCsFixer;

use AdamWojs\PhpCsFixerPhpdocForceFQCN\Fixer\Phpdoc\ForceFQCNFixer;
use PhpCsFixer\ConfigInterface;

/**
 * Factory for Config instance that should be used for all internal Ibexa packages.
 *
 * @internal
 */
class EzPlatformInternalConfigFactory
{
    public const EZPLATFORM_PHP_HEADER = <<<'EOF'
@copyright Copyright (C) Ibexa AS. All rights reserved.
@license For full copyright and license information view LICENSE file distributed with this source code.
EOF;

    public static function build(): ConfigInterface
    {
        $config = new Config();
        $config->registerCustomFixers([
            new ForceFQCNFixer(),
        ]);

        $specificRules = [
            'header_comment' => [
                'commentType' => 'PHPDoc',
                'header' => static::EZPLATFORM_PHP_HEADER,
                'location' => 'after_open',
                'separate' => 'top',
            ],
            'AdamWojs/phpdoc_force_fqcn_fixer' => true,
        ];
        $config->setRules(array_merge($config->getRules(), $specificRules));

        return $config;
    }
}
