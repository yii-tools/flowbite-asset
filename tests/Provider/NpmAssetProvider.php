<?php

declare(strict_types=1);

namespace Yii\Flowbite\Asset\Tests\Provider;

use Yii\Flowbite\Asset;

final class NpmAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public static function assetBundles(): array
    {
        return [
            ['Css', Asset\FlowbiteDevAsset::class],
            ['Js', Asset\FlowbiteDevAsset::class],
            ['Css', Asset\FlowbiteMinAsset::class],
            ['Js', Asset\FlowbiteMinAsset::class],
        ];
    }
}
