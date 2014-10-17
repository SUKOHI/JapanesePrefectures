JapanesePrefectures
===================

A PHP package mainly developed for Laravel to manage Japanese prefectures.

Installation&setting for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\JapanesePrefectures\JapanesePrefecturesServiceProvider',
    )

Also

    'aliases' => array(  
        ...Others...,  
        'JapanesePrefectures' =>'Sukohi\JapanesePrefectures\Facades\JapanesePrefectures',
    )

Usage
====

    $prefectures = JapanesePrefectures::prefectures();
    print_r($prefectures);
	
	echo JapanesePrefectures::prefectureName(1);		// 北海道
	echo JapanesePrefectures::prefectureId('兵庫県');	// 28
	
	$regions = JapanesePrefectures::regions();
	print_r($regions);
	
	echo JapanesePrefectures::regionName(3);			// 関東
	echo JapanesePrefectures::regionId('東北');			// 2
		
	$region_prefecture_ids = JapanesePrefectures::regionPrefectureIds();
	print_r($region_prefecture_ids);
	
Example

		
	foreach ($region_prefecture_ids as $region_id => $prefecture_ids) {

		echo '<strong>'. JapanesePrefectures::regionName($region_id) .'</strong><br>';
			
		foreach ($prefecture_ids as $prefecture_id) {
				
			echo '&nbsp;'. JapanesePrefectures::prefectureName($prefecture_id) .'<br>';
				
		}
			
	}