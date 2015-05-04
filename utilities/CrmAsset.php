<?php
namespace app\utilities;
class CrmAsset extends \yii\web\AssetBundle
{
    /*public $sourcePath = '@app/assets/crm';
    public $js = [
        'crm.js',
    ];
    public $css = [
        'crm.css'
    ];*/


    /** OR  */


    public $basePath = '@webroot/ui';
    public $baseUrl = '@web/ui';
    public $js = [
        'js/crm.js',
    ];
    public $css = [
        'css/crm.css'
    ];
}