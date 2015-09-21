<?php
	class ModelModuleDisputa extends Model {
		public function createTable() {
			$this->db->query("CREATE TABLE IF NOT EXISTS `disputas` (
							  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							  `url` varchar(255) DEFAULT NULL,
							  `email` varchar(255) DEFAULT NULL,
							  `productId` varchar(255) NOT NULL,
							  `productName` varchar(255) NOT NULL,
							  `status` varchar(255) DEFAULT NULL,
							  `datahora` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
							  PRIMARY KEY (`id`)
							) ");
		}

		public function getData() {
			$query = $this->db->query("select * from disputas");

			return $query->rows;
		}
	}
?>
