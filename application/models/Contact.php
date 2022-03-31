<?php

class Contact extends CI_Model{
    
    function saverecords($data)
    {
        $this->db->insert('contacts', $data);
        return true;
    }

    function display_contact()
    {
        $query = $this->db->get("contacts");
        return $query->result();
    }

    function display_contact_id($id)
    {
        $query = $this->db->query("select * from contacts where id = ".$id."");
        return $query->result();
    }

    function update_contact($name, $phone_num, $id)
    {
        $query = $this->db->query("update contacts SET name = '".$name."', phone_no = '".$phone_num."' where id = ".$id."");
        return true;
    }

    function delete_contact($id){
        $this->db->where("id", $id);
        $this->db->delete("contacts");
        return true;
    }
}
?>