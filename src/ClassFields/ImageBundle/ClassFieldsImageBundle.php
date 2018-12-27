<?php

namespace ClassFields\ImageBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class ClassFieldsImageBundle extends AbstractPimcoreBundle
{
    public function getJsPaths()
    {
        return [
            '/bundles/classfieldsimage/js/pimcore/startup.js'
        ];
    }
}
