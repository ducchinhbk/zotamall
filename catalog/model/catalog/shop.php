<?php
class ModelCatalogShop extends Model {
	public function addShop($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "shop SET name = '" .  $this->db->escape($data['name']) . "', category_id = '" .  $this->db->escape($data['category_id']) . "', working_time = '" .  $this->db->escape($data['working_time']) . "', short_description = '" .  $this->db->escape($data['short_description']) . "', description = '" .  $this->db->escape($data['description']) . "', telephone = '" .  $this->db->escape($data['telephone']) . "', email = '" .  $this->db->escape($data['email']) . "', address = '" .  $this->db->escape($data['address']) . "', city_id = '" . (int) $this->db->escape($data['city_id']) . "', district_id = '" . (int) $this->db->escape($data['district_id']) . "', customer_id = '" .  (int)$this->customer->getId() . "', approved = 'Not approved', status='Active', date_modified = NOW(), date_added = NOW()");

		$shop_id = $this->db->getLastId();

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "shop SET image = '" . $this->db->escape($data['image']) . "' WHERE shop_id = '" . (int)$shop_id . "'");
		}

        $data['keyword'] = $data['url'] ."-". (int)$shop_id ;
		if (isset($data['keyword'])) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "url_alias SET query = 'shop_id=" . (int)$shop_id . "', keyword = '" . $this->db->escape($data['keyword']) ."'");
		}

		$this->cache->delete('shop');

		return $shop_id;
	}

	public function editShop($shop_id, $data) {
	   if((int)$this->customer->getId() != 0){
    		$this->db->query("UPDATE " . DB_PREFIX . "shop SET name = '" .  $this->db->escape($data['name']) . "', category_id = '" .  $this->db->escape($data['category_id']) . "', working_time = '" .  $this->db->escape($data['working_time']) . "', short_description = '" .  $this->db->escape($data['short_description']) . "', description = '" .  $this->db->escape($data['description']) . "', telephone = '" .  $this->db->escape($data['telephone']) . "', email = '" .  $this->db->escape($data['email']) . "', address = '" .  $this->db->escape($data['address']) . "', city_id = '" . (int) $this->db->escape($data['city_id']) . "', district_id = '" . (int) $this->db->escape($data['district_id']) . "', date_modified = NOW() WHERE shop_id = '" . (int)$shop_id . "' ");
    
    		if (isset($data['image'])) {
    			$this->db->query("UPDATE " . DB_PREFIX . "shop SET image = '" . $this->db->escape($data['image']) . "' WHERE shop_id = '" . (int)$shop_id . "'");
    		}
    
    		$this->db->query("DELETE FROM " . DB_PREFIX . "url_alias WHERE query = 'shop_id=" . (int)$shop_id . "'");
            
            $data['keyword'] = $data['url'] ."-". (int)$shop_id ;
    		if ($data['keyword']) {
    			$this->db->query("INSERT INTO " . DB_PREFIX . "url_alias SET query = 'shop_id=" . (int)$shop_id . "', keyword = '" . $this->db->escape($data['keyword']) . "'");
    		}
    
    		$this->cache->delete('shop');
        }
	}

	public function deleteShop($shop_id) {
	   if((int)$this->customer->getId() != 0){
	       
    		$this->db->query("DELETE FROM " . DB_PREFIX . "shop WHERE shop_id = '" . (int)$shop_id . "'");
    		$this->db->query("DELETE FROM " . DB_PREFIX . "url_alias WHERE query = 'shop_id=" . (int)$shop_id . "'");
    
    		$this->cache->delete('shop');
        }
	}
    
    public function getShop($shop_id) {
		$query = $this->db->query("SELECT *, (SELECT c.name FROM zone c WHERE zone_id = s.city_id) AS city, (SELECT c.name FROM zone c WHERE zone_id = s.district_id) AS district FROM shop s WHERE s.shop_id = '" . (int)$shop_id . "' ");

		return $query->row;
	}

	public function getShops($data = array()) {
		$sql = "SELECT cp.category_id AS category_id, GROUP_CONCAT(cd1.name ORDER BY cp.level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') AS name, c1.parent_id, c1.sort_order FROM " . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX . "category c1 ON (cp.category_id = c1.category_id) LEFT JOIN " . DB_PREFIX . "category c2 ON (cp.path_id = c2.category_id) LEFT JOIN " . DB_PREFIX . "category_description cd1 ON (cp.path_id = cd1.category_id) LEFT JOIN " . DB_PREFIX . "category_description cd2 ON (cp.category_id = cd2.category_id) WHERE cd1.language_id = '" . (int)$this->config->get('config_language_id') . "' AND cd2.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
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

		$query = $this->db->query($sql);

		return $query->rows;
	}
    
    public function getTotalShops() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "category");

		return $query->row['total'];
	}
    
    public function getShopByCustomerId($customer_id) {
		$query = $this->db->query("SELECT *  FROM " . DB_PREFIX . "shop  WHERE customer_id = '" . (int)$customer_id . "' ");

		return $query->row;
	}
    
    
   
}
