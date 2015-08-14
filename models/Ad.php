<?php
require_once 'basemodel.php';
class Ad extends baseModel
	{
		protected static $table = 'ad_list';
		protected static $id    = 'id';
		public static function allByUser($user_id)
		{
			parent::dbConnect();
			$query = "SELECT * FROM " . self::$table . " WHERE user_id = :user_id";
			$stmt = parent::$dbc->prepare($query);
			$stmt->bindValue(':user_id', (int)$user_id, PDO::PARAM_INT);
			$stmt->execute();
			$ads = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $ads;
		}
		public static function lastEntry($user_id)
		{
			parent::dbCOnnect();
			$query = "SELECT * FROM ad_list WHERE user_id = $user_id ORDER BY id DESC LIMIT 1;";
			$results = parent::$dbc->query($query)->fetch(PDO::FETCH_ASSOC);
			$ad_id = (int)$results['id'];
			return $ad_id;
		}
	}
 ?>
