<?php

namespace Deep\US2\Plugin;

use Magento\Theme\Block\Html\Breadcrumbs;

class BreadcrumbPlugin{
    function beforeAddCrumb(Breadcrumbs $subject , $crumbName, $crumbInfo){

        $crumbInfo['label'] = "Humingbird " . $crumbInfo['label'];
        return [$crumbName,$crumbInfo];

    }
}