<?php

/**
 * @package KantPHP
 * @author  Zhenqiang Zhang <zhenqiang.zhang@hotmail.com>
 * @copyright (c) KantPHP Studio, All rights reserved.
 * @license http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 */

namespace Kant\View;

/**
 * This asset bundle provides the [jquery javascript library](http://jquery.com/)
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class JqueryAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery/dist';
    public $js = [
        'jquery.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];

}
