<?php

require_once('View.php');

class MagView extends View {

    public function fetch() {
        if($this->page) {
            $this->design->assign('meta_title', $this->page->meta_title);
            $this->design->assign('meta_keywords', $this->page->meta_keywords);
            $this->design->assign('meta_description', $this->page->meta_description);
        }

        $body = $this->design->fetch('mag.tpl');
        return $body;
    }

}
