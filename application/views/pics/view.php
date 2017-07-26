<?php
//application/views/pics/view.php
$this->load->view($this->config->item('theme') . 'header'); 

echo '<h2>' . 'moo' . '</h2>';
//echo $tags['tag'];

echo '<table>';

for($row = 0; $row < 6; $row ++){
    echo "<tr>";
    $i = 0;
    
    foreach ($pics as $pic) 
    {
        
        echo '<td>';
        $size = 'm';
        $photo_url = 'http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
        echo  '</br>';
        echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
        echo $pic->title . '</br>';
        echo "</td>";
        
        $i++;
    }
}    
/*for ($row = 0; $row < 5; $row ++) {
    echo "<tr>";
    for ($col = 0; $col < 5; $col ++) {
        echo '<td>';
   
        foreach($pics as $pic)
        {
            $size = 'm';
            $photo_url = 'http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
            echo  '</br>';
            echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
            echo $pic->title . '</br>';
        }
        
        echo '</td>';
    }
    echo '</tr>';
}
*/
echo '</table>';


$this->load->view($this->config->item('theme') . 'footer'); 