<?php

declare(strict_types=1);

namespace Yii\Flowbite\Asset\Tests\Provider;

use Yii\Flowbite\Asset;

final class CdnAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public static function assetBundles(): array
    {
        return [
            ['Css', Asset\FlowbiteCdnAsset::class],
            ['Js', Asset\FlowbiteCdnAsset::class],
            ['Js', Asset\FlowbiteJsCdnAsset::class],
        ];
    }
}
