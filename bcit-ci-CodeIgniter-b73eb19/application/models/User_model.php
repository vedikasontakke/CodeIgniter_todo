<?php
// model is used to communicate with database 
class User_model extends CI_MODEL{

    function add($formArray){

        $this->db->insert('todo', $formArray); //INSERT INTO user(name,email) values (? , ?)
    }

    function all(){
       return $users = $this->db->get('todo')->result_array();  // SELECT * from users 
    }

    function getUser($userId){

        $this->db->where('id' , $userId);
        return $user = $this->db->get('todo')->row_array(); // select * from users where user_id= ? 
    }

    function updateUser($userId,$formArray){

        $this->db->where('id',$userId);
        $this->db->update('todo',$formArray); // update user SRT name = ? , email = ? where user_id = ? 
    }

    function deleteUser($userId){

        $this->db->where('id' , $userId);
        $this->db->delete('todo');  // DELETE FROM users where user_id = ? 
    }
}
?>