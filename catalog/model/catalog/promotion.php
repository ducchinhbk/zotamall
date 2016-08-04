<?php
class ModelCatalogPromotion extends Model {
	public function addPromotion($data) {
		$this->db->query("INSERT INTO promotion SET name = '" .  $this->db->escape($data['name']) . "', category_id = '" .  $this->db->escape($data['category_id']) . "', start_date = '" .  $this->db->escape($data['start_date']) . "', start_hour = '" .  $this->db->escape($data['start_hour']) . "', end_date = '" .  $this->db->escape($data['end_date']) . "', end_hour = '" .  $this->db->escape($data['end_hour']) . "', short_description = '" .  $this->db->escape($data['short_description']) . "', description = '" .  $this->db->escape($data['description']) . "', customer_id = '" .  (int)$this->customer->getId() . "', shop_id = '" .  (int)$this->db->escape($data['shop_id']) . "', approved = 'Not approved', status='Active', date_modified = NOW(), date_added = NOW()");

		$promotion_id = $this->db->getLastId();
        $data['keyword'] = $data['url'] ."-". (int)$promotion_id ;
        
		if (isset($data['image'])) {
			$this->db->query("UPDATE promotion SET image = '" . $this->db->escape($data['image']) . "', link = '" .  $this->db->escape($data['keyword']) . "' WHERE promotion_id = '" . (int)$promotion_id . "'");
		}
        
		if (isset($data['keyword'])) {
			$this->db->query("INSERT INTO url_alias SET query = 'promotion_id=" . (int)$promotion_id . "', keyword = '" . $this->db->escape($data['keyword']) ."'");
		}

		$this->cache->delete('promotion');

		return $promotion_id;
	}

	public function editPromotion($promotion_id, $data) {
	   if((int)$this->customer->getId() != 0){
    		$this->db->query("UPDATE promotion SET name = '" .  $this->db->escape($data['name']) . "', category_id = '" .  $this->db->escape($data['category_id']) . "', start_date = '" .  $this->db->escape($data['start_date']) . "', start_hour = '" .  $this->db->escape($data['start_hour']) . "', end_date = '" .  $this->db->escape($data['end_date']) . "', end_hour = '" .  $this->db->escape($data['end_hour']) . "', short_description = '" .  $this->db->escape($data['short_description']) . "', description = '" .  $this->db->escape($data['description']) . "', customer_id = '" .  (int)$this->customer->getId() . "', shop_id = '" .  (int)$this->db->escape($data['shop_id']) . "',approved = 'Not approved', status='Active', date_modified = NOW() WHERE promotion_id = '" . (int)$promotion_id . "' ");
            
            $data['keyword'] = $data['url'] ."-". (int)$promotion_id ;
    		if (isset($data['image'])) {
    			$this->db->query("UPDATE promotion SET image = '" . $this->db->escape($data['image']) . "', link = '" .  $this->db->escape($data['keyword']) . "' WHERE promotion_id = '" . (int)$promotion_id . "'");
    		}
    
    		$this->db->query("DELETE FROM url_alias WHERE query = 'promotion_id=" . (int)$promotion_id . "'");
            
    		if ($data['keyword']) {
    			$this->db->query("INSERT INTO url_alias SET query = 'promotion_id=" . (int)$promotion_id . "', keyword = '" . $this->db->escape($data['keyword']) . "'");
    		}
    
    		$this->cache->delete('promotion');
        }
	}

	public function deletePromotion($promotion_id) {
	   if((int)$this->customer->getId() != 0){
	       
    		$this->db->query("DELETE FROM promotion WHERE promotion_id = '" . (int)$promotion_id . "'");
    		$this->db->query("DELETE FROM url_alias WHERE query = 'promotion_id=" . (int)$promotion_id . "'");
    
    		$this->cache->delete('promotion');
        }
	}
    
    public function getPromotion($promotion_id) {
		$query = $this->db->query("SELECT * FROM promotion  WHERE promotion_id = '" . (int)$promotion_id . "' ");

		return $query->row;
	}

	public function getPromotions($data = array()) {
		$sql = "SELECT p.promotion_id, p.name, p.start_date, p.end_date, p.image, p.link, s.name AS shop_name, (SELECT z.name FROM zone z WHERE z.zone_id = s.city_id) AS city 
                FROM promotion p LEFT JOIN shop s ON p.shop_id = s.shop_id
                WHERE  p.status = 'Active' AND p.approved = 'Approved'";

		/*if (!empty($data['filter_name'])) {
			$sql .= " AND cd2.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sql .= " GROUP BY cp.category_id";

		$sort_data = array(
			'name',
			'sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY sort_order";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
        */
		$query = $this->db->query($sql);

		return $query->rows;
	}
    
    public function getTotalPromotions() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM promtion p WHERE  p.featured = 'Featured' AND p.status = 'Active' AND p.approved = 'Approved'");

		return $query->row['total'];
	}
    
    public function getFeaturedPromotions($start = 0, $limit = 12) {
		$sql = "SELECT p.promotion_id, p.name, p.start_date, p.end_date, p.image, p.link, s.name AS shop_name, (SELECT z.name FROM zone z WHERE z.zone_id = s.city_id) AS city 
                FROM promotion p LEFT JOIN shop s ON p.shop_id = s.shop_id
                WHERE  p.featured = 'Featured' AND p.status = 'Active' AND p.approved = 'Approved' 
                ORDER BY p.promotion_id DESC
                LIMIT " . (int)$start . "," . (int)$limit. " ";


		$query = $this->db->query($sql);

		return $query->rows;
	}
    
    public function getPromotionByCustomerId($customer_id) {
		$query = $this->db->query("SELECT *  FROM shop  WHERE customer_id = '" . (int)$customer_id . "' ");

		return $query->rows;
	}
    
    public function getPromotionsByShopId($shop_id) {
		$query = $this->db->query("SELECT *  FROM promotion  WHERE shop_id = '" . (int)$shop_id . "' ");

		return $query->rows;
	}
    
		
}
