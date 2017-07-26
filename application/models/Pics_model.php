<?php
//application/models/Pics_model.php
class Pics_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
 
    public function get_pics($tags = FALSE)
    {
        /*
        //get tags from db
        if ($tags === FALSE)
        {
            $query = $this->db->get('ci_tags');
            return $query->result_array();
        }
        */
        //$tags = $this->db->get_where('ci_tags', array('tag' => $tags));
        //return $query->row_array();
        
        
        //move aPI key to custom_config.php
        //$this->config->set_item('$api_key', 'api_key');
        
        $api_key = 'f4acfc86c234949c5e729be75eaed321';
        //$tags = 'bears,polar';

        $perPage = 4;
        $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
        $url.= '&api_key=' . $api_key;
        $url.= '&tags=' . $tags;
        $url.= '&per_page=' . $perPage;
        $url.= '&format=json';
        $url.= '&nojsoncallback=1';
        $response = json_decode(file_get_contents($url));
        $pics = $response->photos->photo;
        
        return $pics;
        
        
    }//end of get_pics
        
}//end of class