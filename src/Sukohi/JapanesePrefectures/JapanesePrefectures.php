<?php namespace Sukohi\JapanesePrefectures;

class JapanesePrefectures {
	
	public static $prefectures = array(
		'1' => '北海道', 
		'2' => '青森県', 
		'3' => '岩手県', 
		'4' => '宮城県', 
		'5' => '秋田県', 
		'6' => '山形県', 
		'7' => '福島県', 
		'8' => '茨城県', 
		'9' => '栃木県', 
		'10' => '群馬県', 
		'11' => '埼玉県', 
		'12' => '千葉県', 
		'13' => '東京都', 
		'14' => '神奈川県', 
		'15' => '新潟県', 
		'16' => '富山県', 
		'17' => '石川県', 
		'18' => '福井県', 
		'19' => '山梨県', 
		'20' => '長野県', 
		'21' => '岐阜県', 
		'22' => '静岡県', 
		'23' => '愛知県', 
		'24' => '三重県', 
		'25' => '滋賀県', 
		'26' => '京都府', 
		'27' => '大阪府', 
		'28' => '兵庫県', 
		'29' => '奈良県', 
		'30' => '和歌山県', 
		'31' => '鳥取県', 
		'32' => '島根県', 
		'33' => '岡山県', 
		'34' => '広島県', 
		'35' => '山口県', 
		'36' => '徳島県', 
		'37' => '香川県', 
		'38' => '愛媛県', 
		'39' => '高知県', 
		'40' => '福岡県', 
		'41' => '佐賀県', 
		'42' => '長崎県', 
		'43' => '熊本県', 
		'44' => '大分県', 
		'45' => '宮崎県', 
		'46' => '鹿児島県', 
		'47' => '沖縄県'
	);	
	
	public function prefectures() {

		return self::$prefectures;
		
	}
	
	public function prefectureName($id) {
		
		return self::$prefectures[$id];
		
	}
	
	public function prefectureId($name) {
		
		$id = array_search($name, self::$prefectures);
		
		if($id === false) {
			
			return -1;
			
		}
		
		return $id;
		
	}
	
	public static $regions = array(
			'1' => '北海道', 
			'2' => '東北', 
			'3' => '関東', 
			'4' => '中部', 
			'5' => '関西', 
			'6' => '中国', 
			'7' => '四国', 
			'8' => '九州'
	);

	public static $region_prefecture_ids = array(
		'1' => array(1),
		'2' => array(2, 3, 4, 5, 6, 7),
		'3' => array(8, 9, 10, 11, 12, 13, 14),
		'4' => array(15, 16, 17, 18, 19, 20, 21, 22, 23),
		'5' => array(24, 25, 26, 27, 28, 29, 30),
		'6' => array(31, 32, 33, 34, 35),
		'7' => array(36, 37, 38, 39),
		'8' => array(40, 41, 42, 43, 44, 45, 46, 47)
	);
	
	public function regions() {
	
		return self::$regions;
	
	}
	
	public function regionPrefectureIds() {
	
		return self::$region_prefecture_ids;
	
	}
	
	public function regionName($id) {
	
		return self::$regions[$id];
	
	}
	
	public function regionId($name) {
	
		$id = array_search($name, self::$regions);
		
		if($id === false) {
			
			return -1;
			
		}
		
		return $id;
	
	}
	
}
