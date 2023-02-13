<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visits {

    protected $CI;

    // We'll use a constructor, as you can't directly call a function
    // from a property definition.
    public function __construct()
    {
            // Assign the CodeIgniter super-object
            $this->CI =& get_instance();
    }

    public function count_visit($url,$origin=NULL)
    {
        if($item=$this->CI->visits_model->get_visits($url,$origin)){
            $item->visits++;
            if($origin==NULL){
                $data=array('visits'=>$item->visits);
            }else{
                $data=array('visits'=>$item->visits,'origin'=>$origin);
            }
            $this->CI->visits_model->update_visits($item->id,$data);
        }else{
            $data=array(
                'url'=>$url,
                'visits'=>1,
                'origin'=>$origin
            ); 
            $this->CI->visits_model->insert_visits($data);
        }    
    }

}