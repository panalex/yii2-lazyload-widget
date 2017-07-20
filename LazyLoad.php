<?php

/**
 * @copyright Copyright &copy; panalex
 * @package yii2-widgets
 * @subpackage yii2-lazyload-widget
 * @version 0.1
 */

namespace panalex\lazyload;

use Yii;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Wrapper of [LazyLoad (vanilla-lazyload)](http://www.andreaverlicchi.eu/lazyload/) library.
 *
 * @author: Andrea Verlicchi <andrea.verlicchi@gmail.com>
 * @see http://www.andreaverlicchi.eu/lazyload/
 * @since 8.0
 */
class LazyLoad extends Widget
{
    /**
     * @var string $src the image src attribute
     */
    public $src;

    /**
     * @var array $options the HTML attributes for the img tag
     */
    public $options;

    /**
     * @var array $clientOptions options for the LazyLoad library
     * @see http://www.andreaverlicchi.eu/lazyload/
     */
    public $clientOptions = [];

    /**
     * @var string $cssClass the css class to be applied to each img tag
     */
    public $cssClass = '';

    /**
     * @inheritdoc
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();
        if(empty($this->src)) {
            throw new InvalidConfigException("You must set the 'src' property");
        }

        $this->options['data-original'] = $this->src;

        if(isset($this->options['class']) && !empty($this->options['class'])) {
            $this->options['class'] .= " $this->cssClass";
        } else {
            $this->options['class'] = $this->cssClass;
        }

        if(isset($this->options['src'])) {
            unset($this->options['src']);
        }

        $this->registerClientScript();

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::tag('img', '', $this->options);
    }

    /**
     * Registers the client script required for the plugin
     */
    public function registerClientScript()
    {
        /*$this->clientOptions = ArrayHelper::merge(
            $this->clientOptions,
            [
                
            ]
        );*/

        $clientOptions = Json::encode($this->clientOptions);
        $selector = 'img.'.$this->cssClass;

        LazyloadAsset::register($this->view);

        $this->view->registerJs("(function() {
            new LazyLoad($clientOptions);
        }());");

    }
}