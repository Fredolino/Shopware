<?php

namespace Shopware\Themes\Fred;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Fred
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Fred
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
Fred
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'
Fred
SHOPWARE_EOD;

    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}