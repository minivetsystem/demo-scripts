<?php
class JsTController extends CController
{
    protected function afterRender($view, &$output)
    {
        /**
         * @var $source JsTPhpMessageSource
         */
        $source = Yii::app()->getComponent('messages');

        $baseUrl = Yii::app()->assetManager->publish(__DIR__ . '/assets');
        Yii::app()->clientScript
            ->registerScript(md5('Yii.tJs'. time()), 'window.messages = ' . CJSON::encode($source->getMessages()), CClientScript::POS_HEAD)
            ->registerScriptFile($baseUrl . '/JsT.min.js', CClientScript::POS_HEAD);

        parent::afterRender($view, $output);
    }
}