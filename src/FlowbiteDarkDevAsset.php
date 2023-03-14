<?php

declare(strict_types=1);

namespace Yii\Flowbite\Asset;

use Yii\Tailwind\Asset\TailwindDarkDevAsset;
use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class FlowbiteDarkDevAsset extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@npm/flowbite';
    public array $css = ['dist/flowbite.css'];
    public array $js = ['dist/flowbite.js'];
    public array $depends = [TailwindDarkDevAsset::class];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only('**dist/flowbite.css', '**dist/flowbite.js', '**dist/flowbite.js.map'),
        ];
    }
}
