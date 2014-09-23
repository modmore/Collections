<?php
namespace collections\events;

class OnManagerPageInit extends CollectionsPlugin {

    public function run(){
        $cssFile = $this->collections->getOption('assetsUrl') . 'css/mgr.css';
        $this->modx->regClientCSS($cssFile);
    }
}