<?php

declare(strict_types=1);

namespace Yii\Flowbite\Asset\Tests\Provider;

use Yii\Flowbite\Asset\FlowbiteCdnAsset;

final class CdnAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public static function assetBundles(): array
    {
        return [
            ['Css', FlowbiteCdnAsset::class],
        ];
    }
}
