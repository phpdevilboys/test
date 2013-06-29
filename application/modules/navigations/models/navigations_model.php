<?php
class Navigations_model extends DataMapper
{	
    public $table = "navigations";

    public $has_many = array(
        'navigation_items' => array(
            'class' => 'navigation_items_model',
            'other_field' => 'navigations',
            'join_self_as' => 'navigation',
            'join_other_as' => 'navigation_item',
            'model_path' => 'application/modules/navigations',
        ),
    );
    
   public function get_links($navigation_id){
	$this->db->select('*');
	$this->db->from('navigations');
	$this->db->join('navigation_items', 'navigations.id = navigation_items.navigation_id','left');
	$this->db->join('entries', 'entries.id = navigation_items.entry_id','left');
	$this->db->where('navigation_id',$navigation_id);
	$query = $this->db->get();
    return $query->result();
		
   } 
    
}
