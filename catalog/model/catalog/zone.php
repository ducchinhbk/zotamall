<?php
class ModelCatalogZone extends Model {
	public function getZone($zone_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE zone_id = '" . (int)$zone_id . "' AND status = '1'");

		return $query->row;
	}

	public function getZonesByCountryId($country_id) {
		$zone_data = $this->cache->get('zone.' . (int)$country_id);

		if (!$zone_data) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE country_id = '" . (int)$country_id . "' AND status = '1' ORDER BY name");

			$zone_data = $query->rows;

			$this->cache->set('zone.' . (int)$country_id, $zone_data);
		}

		return $zone_data;
	}
    
    public function getZonesByParentId($parent_id) {
		$zone_data = $this->cache->get('zone.' . (int)$parent_id);

		if (!$zone_data) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE parent_id = '" . (int)$parent_id . "' AND status = '1' ORDER BY sort");

			$zone_data = $query->rows;

			$this->cache->set('zone.' . (int)$parent_id, $zone_data);
		}

		return $zone_data;
	}
}