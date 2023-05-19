<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class FlowbiteProd extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@npm/flowbite';
    public array $css = ['dist/flowbite.min.css'];
    public array $js = ['dist/flowbite.min.js'];
    public array $depends = [TailwindProd::class];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only('**dist/flowbite.min.css', '**dist/flowbite.min.js'),
        ];
    }
}
