<?php namespace plugins\maskedinput\controllers;

class Main extends \Controller
{
    public function provide()
    {
        $this->js('jquery.maskedinput');
    }

    public function bind()
    {
        $maskData = [];

        remap($maskData, $this->data, 'placeholder');

        $data = [
            'selector' => $this->data['selector'],
            'mask'     => $this->data['mask'],
            'maskData' => $maskData
        ];

        $this->js('jquery.maskedinput');
        $this->js(':', $data);
    }
}
