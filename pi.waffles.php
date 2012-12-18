<?php

class Plugin_Waffles extends Plugin
{
    public function index()
    {
        $width  = $this->fetch_param('width', 300);
        $height = $this->fetch_param('height', 300);
        $count  = $this->fetch_param('count', 1);

        $html = '';
        for ($i=1; $i <= $count; $i++) {
            $html .= "<img src='http://flickholdr.com/{$width}/{$height}/waffles' />";
        }

        return $html;
    }
}