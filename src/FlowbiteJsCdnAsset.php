<?php

declare(strict_types=1);

namespace Yii\Flowbite\Asset;

use Yiisoft\Assets\AssetBundle;

final class FlowbiteJsCdnAsset extends AssetBundle
{
    public bool $cdn = true;
    public array $js = ['https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js'];
}
