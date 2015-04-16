<?php
class ModelProductProductDn extends Model{
    public function getProducts($page, $limit, $type){
        $start = ($page - 1) * $limit;
        $query = $this->db->query("SELECT * FROM `". DB_PREFIX . "product` WHERE
            type = '". $this->db->escape($type) . "',
            stock > 0,
            status = 1,
            isPromotionProduct = 0,
            ORDER BY price ASC LIMIT ". (int)$start. "," . (int)$limit);
        return $query->rows;
    }

    public function getProductById($product_id){
        $query = $this->db->query("SELECT * FROM `". DB_PREFIX . "product` WHERE product_id = ". (int)$product_id);
        return $query->row;
    }

    public function getTotal($type){
        $query = $this->db->query("SELECT COUNT(*) FROM `". DB_PREFIX . "product` WHERE isPromotionProduct = 0, type= '". $this->db->escapse($type) ."'");
        return $query->row['COUNT(*)'];
    }

    public function getPromotionProduct($type){
        $query = $this->db->query("SELECT COUNT(*) FROM `". DB_PREFIX . "product` WHERE isPromotionProduct = 1, type= '". $this->db->escapse($type) ."'");
        return $query->row['COUNT(*)'];
    }
}
?>