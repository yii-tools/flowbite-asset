<?php

declare(strict_types=1);

namespace Yii\Flowbite\Asset;

use Yiisoft\Assets\AssetBundle;
use Yii\Tailwind\Asset\TailwindCdnAsset;

final class FlowbiteCdnAsset extends AssetBundle
{
    public bool $cdn = true;
    public array $css = ['https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css'];
    public array $js = ['https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js'];
    public array $depends = [TailwindCdnAsset::class];
}
