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
            ['Css', Asset\FlowbiteDarkDevAsset::class],
            ['Css', Asset\FlowbiteDarkProdAsset::class],
            ['Css', Asset\FlowbiteDevAsset::class],
            ['Css', Asset\FlowbiteProdAsset::class],
            ['Js', Asset\FlowbiteDarkDevAsset::class],
            ['Js', Asset\FlowbiteDarkProdAsset::class],
            ['Js', Asset\FlowbiteDevAsset::class],
            ['Js', Asset\FlowbiteJsDevAsset::class],
            ['Js', Asset\FlowbiteJsProdAsset::class],
            ['Js', Asset\FlowbiteProdAsset::class],
        ];
    }
}
