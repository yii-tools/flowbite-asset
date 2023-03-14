<?php

declare(strict_types=1);

namespace Yii\Flowbite\Asset;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class FlowbiteDevAsset extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@npm/flowbite';
    public array $css = ['dist/flowbite.css'];
    public array $js = ['dist/flowbite.js'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only('**dist/flowbite.css', '**dist/flowbite.js', '**dist/flowbite.js.map'),
        ];
    }
}
