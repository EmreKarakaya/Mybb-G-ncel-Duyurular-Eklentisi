<?php

  /*
			@Eklenti Yapımcısı Emre Karakaya Duyuru Panel Kodlaması Xpserkan'a aittir.
  */

if(!defined("IN_MYBB"))
{
    die("<meta http-equiv=\"refresh\" content=\"0;URL=http://www.analizcik.com/\">");
}

function duyuru_info()
{
    return array(
        "name"          => "Mybb Güncel Duyurular",
        "description"   => "Bu Eklenti ile sitenize basit ve şık bir duyuru paneli ekleyebilirsiniz.",
        "website"       => "http://www.mybbrehberi.com",
        "author"        => "Emre Karakaya",
        "authorsite"    => "http://www.emrekarakaya.com.tr",
        "version"       => "1.0",
        "guid"          => "",
        "compatibility" => "14*,16*"
    );
}

function duyuru_activate()
{
global $db, $mybb;
 $ayar_group = array(
        'name'         => 'duyurupanel',
        'title'        => 'Mybb Güncel Duyurular',
        'description'  => 'Mybb Güncel Duyurular eklentisinin ayarları',
        'disporder'    => '1',
    );
    $db->insert_query('settinggroups', $ayar_group);
    $ayar_grup_id = $db->insert_id();
	
	   $ayar1 = array(
        'name'         => 'birgrubtitle',
        'title'        => 'Birinci Duyuru Grubunun Başlığı',
        'description'  => 'Birinci Duyuru Grubunuzun Başlığını Giriniz',
        'optionscode'  => 'text',
        'value'        => 'Güncel MyBB Dökümanları..',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
    $db->insert_query("settings", $ayar1);
		   $ayar2 = array(
        'name'         => 'birduyurutitle',
        'title'        => 'Birinci Duyurunun başlığı',
        'description'  => 'Birinci Duyurunuzun Başlığını Giriniz.',
        'optionscode'  => 'text',
        'value'        => 'MyBB Kurulumu - Videolu Anlatım Konusu',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
			   $ayar5 = array(
        'name'         => 'birduyuruurl',
        'title'        => 'Birinci Duyurunun Adresi',
        'description'  => 'Birinci Duyurunuzun Yönleneceği Url adresi giriniz.',
        'optionscode'  => 'text',
        'value'        => 'http://destek.mybb.com.tr/showthread.php?tid=2483',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
    $db->insert_query("settings", $ayar5);
			   $ayar3 = array(
        'name'         => 'ikiduyurutitle',
        'title'        => 'İkinci Duyurunun başlığı',
        'description'  => 'İkinci Duyurunuzun Başlığını Giriniz.',
        'optionscode'  => 'text',
        'value'        => 'Google Seo Kurulumu - Resimli Anlatım Konusu',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
    $db->insert_query("settings", $ayar3);
			   $ayar6 = array(
        'name'         => 'ikiduyuruurl',
        'title'        => 'İkinci Duyurunun Adresi',
        'description'  => 'İkinci Duyurunuzun Yönleneceği Url adresi giriniz.',
        'optionscode'  => 'text',
        'value'        => 'http://destek.mybb.com.tr/showthread.php?tid=10658',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
	    $db->insert_query("settings", $ayar6);
				   $ayar4 = array(
        'name'         => 'ucduyurutitle',
        'title'        => 'Üçüncü Duyurunun başlığı',
        'description'  => 'Üçüncü Duyurunuzun Başlığını Giriniz.',
        'optionscode'  => 'text',
        'value'        => 'MyBB Google Seo Eklentisi İndir',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
    $db->insert_query("settings", $ayar4);
			   $ayar7 = array(
        'name'         => 'ucduyuruurl',
        'title'        => 'Üçüncü Duyurunun Adresi',
        'description'  => 'Üçüncü Duyurunuzun Yönleneceği Url adresi giriniz.',
        'optionscode'  => 'text',
        'value'        => 'http://destek.mybb.com.tr/showthread.php?tid=10655',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
	    $db->insert_query("settings", $ayar7);
	   $ayar8 = array(
        'name'         => 'ikigrubtitle',
        'title'        => 'İkinci Duyuru Grubunun Başlığı',
        'description'  => 'İkinci Duyuru Grubunuzun Başlığını Giriniz',
        'optionscode'  => 'text',
        'value'        => 'Güncel + Orjinal MyBB Sürümleri..',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
	    $db->insert_query("settings", $ayar8);
		   $ayar9 = array(
        'name'         => 'dortduyurutitle',
        'title'        => 'Dördüncü Duyurunun başlığı',
        'description'  => 'Dördüncü Duyurunuzun Başlığını Giriniz.',
        'optionscode'  => 'text',
        'value'        => 'MyBB 1.6.12 Resmi Türkçe Sıfır Kurulum Paketi İndir',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
	$db->insert_query("settings", $ayar9);
			   $ayar10 = array(
        'name'         => 'dortduyuruurl',
        'title'        => 'Dördüncü Duyurunun Adresi',
        'description'  => 'Dördüncü Duyurunuzun Yönleneceği Url adresi giriniz.',
        'optionscode'  => 'text',
        'value'        => 'http://tr.mybbdepo.com/mybb-1-6-12-turkce-sifir-kurulum-paketi-konusu.html',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
    $db->insert_query("settings", $ayar10);
			   $ayar11 = array(
        'name'         => 'besduyurutitle',
        'title'        => 'Beşinci Duyurunun başlığı',
        'description'  => 'Beşinci Duyurunuzun Başlığını Giriniz.',
        'optionscode'  => 'text',
        'value'        => 'MyBB 1.6.12 Güvenlik Güncellemesi İndir',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
    $db->insert_query("settings", $ayar11);
			   $ayar12 = array(
        'name'         => 'besduyuruurl',
        'title'        => 'Beşinci Duyurunun Adresi',
        'description'  => 'Beşinci Duyurunuzun Yönleneceği Url adresi giriniz.',
        'optionscode'  => 'text',
        'value'        => 'http://tr.mybbdepo.com/mybb-1-6-12-guvenlik-guncelleme-paketi-konusu.html',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
	    $db->insert_query("settings", $ayar12);
				   $ayar13 = array(
        'name'         => 'altiduyurutitle',
        'title'        => 'Altıncı Duyurunun başlığı',
        'description'  => 'Altıncı Duyurunuzun Başlığını Giriniz.',
        'optionscode'  => 'text',
        'value'        => 'MyBB 1.6.10 Tema Güncellemesi - [Manuel]',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
    $db->insert_query("settings", $ayar13);
			   $ayar7 = array(
        'name'         => 'altiduyuruurl',
        'title'        => 'Altıncı Duyurunun Adresi',
        'description'  => 'Altıncı Duyurunuzun Yönleneceği Url adresi giriniz.',
        'optionscode'  => 'text',
        'value'        => 'http://destek.mybb.com.tr/showthread.php?tid=12308',
        'disporder'    => '1',
        'gid'          => intval( $ayar_grup_id )
    );
	}

function duyuru_deactivate()
{

}

?>