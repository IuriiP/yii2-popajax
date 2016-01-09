<?php namespace iuriip\yii2;

use Yii;
use yii\bootstrap\Modal;

class Popup extends Modal {

    public function run() {
        parent::run();

        $js = <<<JS
$(function(){
    $(".modal-button").click(function(){ 
        console.log($(this));
        var target = $(this).attr('modal-target');
        $(target)
            .modal("show")
            .find(".modal-body")
            .load( $(this).closest("[modal-href]").attr("modal-href") );
    });
});                
JS;
        $this->registerJs($js, View::POS_READY, 'yii2popup');
    }

}
