<?php
class ModelAccountCustomer extends Model{
    public function getCustomer($data){
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer` WHERE
                lastname = '". $this->db->escape($data['name']) ."' AND
                email = '". $this->db->escape($data['email']) ."'");
                 // AND image = '". $this->db->escape($data['image']). "'");
        return $query->row;
    }

    public function getCustomerById($customerId){
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer` WHERE customer_id =". (int)$customerId);
        return $query->row;
    }

    public function insertOrUpdate($data){
        $customer = $this->getCustomer($data);
        if(isset($customer['customer_id'])){
            $customerId = (int)$customer['customer_id'];
            $this->db->query("UPDATE `". DB_PREFIX ."customer` SET
                    name = '". $this->db->escape($data['name']) ."'
                    image = '". $this->db->escape($data['image']) ."' WHERE customer_id = ". (int)$customerId);
        }else{
            // insert new customer
            $this->db->query("INSERT INTO `" . DB_PREFIX . "customer` SET
                    lastname = '". $this->db->escape($data['name']) . "' ,
                    email = '". $this->db->escape($data['email']) ."' ,
                    customer_group_id = 1,
                    store_id = 1,
                    firstname = '',
                    telephone = '',
                    fax = '',
                    password = '',
                    salt = '',
                    newsletter = '',
                    address_id = 1,
                    custom_field = '',
                    ip = '',
                    status = 1,
                    approved = 1,
                    safe = 1,
                    token = '',
                    image = '". $this->db->escape($data['image']) ."',
                    date_added = NOW()");
            $customerId = $this->db->getLastId();
        }
        return $customerId;
    }
}
?>