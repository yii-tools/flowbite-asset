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
            ['Css', Asset\FlowbiteDarkDevAsset::class],
            ['Js', Asset\FlowbiteDevAsset::class],
            ['Js', Asset\FlowbiteDarkDevAsset::class],
            ['Css', Asset\FlowbiteProdAsset::class],
            ['Css', Asset\FlowbiteDarkProdAsset::class],
            ['Js', Asset\FlowbiteProdAsset::class],
            ['Js', Asset\FlowbiteDarkProdAsset::class],
        ];
    }
}
