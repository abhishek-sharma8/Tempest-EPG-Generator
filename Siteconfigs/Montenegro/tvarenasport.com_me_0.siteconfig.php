<?php return array (
  'filename' => 'tvarenasport.com_me',
  'creator_name' => 'Kivanc',
  'creation_date' => '2021-11-29',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'sr',
  'max_day' => '7',
  'keepindexpage' => 'on',
  'url1' => 'https://www.tvarenasport.com/me/api/schedule?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'content_type1' => 'application/json',
  'referer_header1' => 'https://www.tvarenasport.com/me/tv-program',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'j-n-Y',
  'show' => '"items":\\[.*?(?:\\{)(.*?)(?:\\}).*?\\]||#include#"group":"##channel##"',
  'start' => '"start":"(.*?)Z"',
  'start_format' => 'Y-m-d\\TH:i:s',
  'stop' => '"end":"(.*?)Z"',
  'stop_format' => 'Y-m-d\\TH:i:s',
  'title' => '"title":"(.*?)","',
  'category' => '"sport":"(.*?)","|#|"league":"(.*?)","|#|"isLive":(true)||#replace#(true)||Live||#word#',
  'ccurl1' => 'https://www.tvarenasport.com/me/api/schedule?date=##urldate1##',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => '*/*',
  'cccontent_type1' => 'application/json',
  'ccreferer_header1' => 'https://www.tvarenasport.com/me/tv-program',
  'ccXMLHttpRequest1' => 'on',
  'ccurldate_format1' => 'j-n-Y',
  'ccchannel_block' => '"channels":\\{(.*?)\\}\\}$||#split#(\\},)',
  'ccchannel_id' => '(?:^|"channels":\\{)"(\\d+)',
  'ccchannel_name' => '\\{"name":"(.*?)",',
);
?>