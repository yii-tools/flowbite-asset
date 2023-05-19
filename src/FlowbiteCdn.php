<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yiisoft\Assets\AssetBundle;

final class FlowbiteCdn extends AssetBundle
{
    public bool $cdn = true;
    public array $css = ['https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css'];
    public array $js = ['https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js'];
    public array $depends = [TailwindCdn::class];
}
