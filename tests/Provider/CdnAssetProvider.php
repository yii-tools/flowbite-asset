<?php

declare(strict_types=1);

namespace Yii\Assets\Tests\Provider;

use Yii\Assets;

final class CdnAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public static function assetBundles(): array
    {
        return [
            ['Css', Assets\FlowbiteCdn::class],
            ['Js', Assets\FlowbiteCdn::class],
            ['Js', Assets\FlowbiteJsCdn::class],
        ];
    }
}
