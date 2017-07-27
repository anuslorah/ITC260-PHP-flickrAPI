<?php
//application/views/pics/view.php

$this->load->view($this->config->item('theme') . 'header'); 

echo '<br />';
echo "<div.box style='width: 24%; '>";
echo "<div.box style='float: left; '>";
    foreach ($pics as $pic) 
    {
        $size = 'm';
        $photo_url = 'http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
        //echo  '</br>';
        echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
        echo $pic->title;
    }
echo '</div>';    

$this->load->view($this->config->item('theme') . 'footer'); 