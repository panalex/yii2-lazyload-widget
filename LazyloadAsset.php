<?php
/**
 * @copyright Copyright &copy; 2017 panalex
 * @link https://github.com/panalex/yii2-lazyload-widget
 * @package yii2-widgets
 * @subpackage yii2-lazyload-widget
 * @version 0.1
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace panalex\lazyload;

use yii\web\AssetBundle;

/**
 * LazyLoad Asset
 *
 * @author: Andrea Verlicchi <andrea.verlicchi@gmail.com>
 * @see http://www.andreaverlicchi.eu/lazyload/
 * @since 8.0
 */
class LazyloadAsset extends AssetBundle
{
    public $sourcePath = '@bower/vanilla-lazyload';
    public $js = [
        'dist/lazyload.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}