<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'dr.dk',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-04-18',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'da',
  'max_day' => '8',
  'episodeOption' => '1',
  'url1' => 'https://www.dr-massive.com/api/schedules?channels=##channel##&date=##urldate1##&device=web_browser&duration=24&ff=idp%2Cldp%2Crpt&geoLocation=abroad&hour=0&isDeviceAbroad=true&lang=da&segments=drtv%2Coptedin&sub=Anonymous',
  'requestOption1' => '1',
  'accept_header1' => 'application/json',
  'origin_header1' => 'https://www.dr.dk',
  'urldate_format1' => 'Y-m-d',
  'show' => '({"id".*?"live":(?:false|true)\\})',
  'start' => '"startDate":"(.*?)Z',
  'start_format' => 'Y-m-d\\TH#i#s',
  'stop' => '"endDate":"(.*?)Z',
  'stop_format' => 'Y-m-d\\TH#i#s',
  'title' => '"title":"(.*?)","',
  'desc' => '"description":"(.*?)","||#replace#^(\\.)$||',
  'category' => '"(live)":true|#|"type":"(.*?)"|#|word',
  'showicon' => '"wallpaper":"(.*?)"||#replace#(\')##(Width=1920&Height=1080)||%27##Width=854&Height=480',
  'season' => '"seasonNumber":(\\d+)',
  'episode' => '"episodeNumber":(\\d+)',
  'channel_logo' => '||#add#https://static.dr-massive.com/shain/v1/dataservice/ResizeImage/$value?Format=%27png%27&Quality=75&EntityType=%27Item%27&EntityId=%27##channel##%27&Width=100&Height=100&ImageId=%272344192.png%27&ResizeAction=%27fill%27&HorizontalAlignment=%27center%27&VerticalAlignment=%27top%27',
  'rating' => '"classificationRating":"(.*?)"',
  'ccurl1' => 'https://www.dr-massive.com/api/channels/195869?channel_group=all&device=web_browser&ff=idp%2Cldp%2Crpt&geoLocation=abroad&isDeviceAbroad=true&lang=da&page=##subpage1##&segments=drtv%2Coptedin&sub=Anonymous',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'application/json',
  'cccontent_type1' => 'application/json;charset=UTF-8',
  'ccorigin_header1' => 'https://www.dr.dk',
  'ccsubpage_format1' => '1|2|3|4|5|6|7|8',
  'ccchannel_block' => '{"images":.*?"path":"',
  'ccchannel_id' => '"id":"(\\d+)',
  'ccchannel_name' => '"title":"(.*?)",',
);
?>