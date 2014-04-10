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

}

function duyuru_deactivate()
{

}

?>