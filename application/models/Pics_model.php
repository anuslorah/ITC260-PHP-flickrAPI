<?php
//application/models/Pics_model.php
class Pics_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
 
    public function get_pics($tags = FALSE)
    {
        //get tags from db
        if ($tags === FALSE)
        {
            $query = $this->db->get('ci_tags');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('ci_tags', array('tags' => $tags));
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
    
    public function set_pics()
    {
        $this->load->helper('url');
        //$this->input->post('title') is the same as $_POST(title)
        $tags = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $tags,
            'text' => $this->input->post('text')
        );

        //return $this->db->insert('sm17_news', $data);
        
        if($this->db->insert('ci_tags', $data))
        {//data entered, show it
            //this is what we do to pass the id number to the view page
            //$this->db->inser_id();
            
            //the slug is used by the view page to load the current news item
            return $tags; 

        }else{//problem!
            return false;
        }
    }
        
}//end of class