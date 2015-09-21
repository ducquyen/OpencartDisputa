<?php
	class ModelModuleDisputa extends Model {
		public function save($url,$email,$productId,$productName) {
			$this->db->query("INSERT INTO `disputas` (`id`, `url`,`email`,`productId`, `productName`,`status`) VALUES (null, '$url', '$email', '$productId', '$productName','Pendente');");
		}
	}
?>

