<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'zita.be',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-10-03',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'nl',
  'max_day' => '7',
  'keepindexpage' => 'on',
  'url1' => 'https://www.zita.be/epg/##urldate1##.html',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'content_type1' => 'text/html; charset=UTF-8',
  'referer_header1' => 'https://www.zita.be/tv-gids',
  'urldate_format1' => 'Ymd',
  'show' => 'id="##channel##"><table>.*?(?:<tr data)(.*?)(?:<\\/tr>).*?<\\/table>',
  'start' => '-start="(\\d+)',
  'start_format' => 'unix',
  'stop' => '-end="(\\d+)',
  'stop_format' => 'unix',
  'title' => '<\\/td><td>(.*?)<\\/td>|>|<a href=".*?">(.*?)<\\/a>',
  'desc' => ' title="(.*?)">',
  'channel_logo' => 'id="##channel##"><table><thead><tr><th><img src="(.*?)"||#addstart#https://www.zita.be',
  'pagekey1' => '<a href="(.*?)"',
  'detail_url1' => 'https://www.zita.be##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'detail_content_type1' => 'text/html; charset=UTF-8',
  'detail_referer_header1' => 'https://www.zita.be/tv-gids',
  'detail_desc' => '<\\/p>\\s+<p>(.*?)<\\/p>',
  'ccurl1' => 'https://www.zita.be/epg/##urldate1##.html',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => '*/*',
  'cccontent_type1' => 'text/html; charset=UTF-8',
  'ccreferer_header1' => 'https://www.zita.be/tv-gids',
  'ccurldate_format1' => 'Ymd',
  'ccchannel_block' => '<div class="epgtable channel.*?<\\/tr>',
  'ccchannel_id' => 'id="(.*?)"',
  'ccchannel_name' => '<\\/th><th>(.*?)<\\/th>',
);
?>