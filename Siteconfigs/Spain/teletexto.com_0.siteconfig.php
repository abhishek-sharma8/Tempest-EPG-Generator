<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'teletexto.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-05-25',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Madrid',
  'culture' => 'es',
  'max_day' => '7',
  'episodeOption' => '1',
  'url1' => 'https://www.teletexto.com/teletexto.asp?programacion=##channel####urldate1##||#replace#(xxxxxx)##(2)$##(3)$##(4)$##(5)$##(6)$##(7)$##(1)$||##stopdate1####lunes##martes##miercoles##jueves##viernes##sabado##domingo',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.teletexto.com',
  'urldate_format1' => '#daylist#|&dia=manana|&dia=xxxxxx|&dia=xxxxxx|&dia=xxxxxx|&dia=xxxxxx|&dia=xxxxxx',
  'stopdate_format1' => '#weekdaynumber#7',
  'show' => '(<table class="parrilla">.*?<\\/table>)',
  'start' => '>(\\d{2}[\\.:]\\d{2})<',
  'start_format' => 'H#i',
  'title' => '<p><strong>(.*?)<\\/strong>|#|[| - |]\\d+"><strong>(.*?)<\\/strong>',
  'subtitle' => '<\\/p><p>(?!Episodio \\d+)(.*?)\\s-\\s',
  'desc' => '(?:(?:<\\/strong>|<\\/a>)<\\/p><p>|<p class="serie">.*?<\\/p><p>)(?!<a)(?:.*?\\s-\\s)?(.*?)<\\/p><\\/td>||#replace#(<\\/p><p>)||\\n',
  'category' => '<p class="serie">(.*?)<\\/p>||#split#(:|,)',
  'episode' => 'Episodio (\\d+)',
  'channel_logo' => '<img class="borde.*?src="(.*?)"||#replace#^(tv\\/)||tv/88x64/||#addstart#https://www.teletexto.com/',
  'pagekey1' => 'href="(.*?)"',
  'detail_url1' => 'https://www.teletexto.com/##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'detail_host_header1' => 'www.teletexto.com',
  'detail_title' => 'Título: <\\/strong>(.*?)(?:\\s\\(.*?\\))?<\\/p>',
  'detail_desc' => 'Argumento: <\\/strong>(.*?)<\\/p>',
  'detail_category' => 'Título: <\\/strong>.*?\\s\\((?!\\d)(.*?)\\)<\\/p>||#split#(,|\\)\\s\\()',
  'detail_production_date' => 'Datos: <\\/strong>.*?\\((\\d{4})\\)',
  'detail_actor' => 'Intérpretes: <\\/strong>(.*?)<\\/p>||#split#(,)',
  'detail_director' => 'Director: <\\/strong>(.*?)<\\/p>||#split#(,)',
  'detail_country' => 'Datos: <\\/strong>(.*?)\\(\\d{4}\\)||#split#(,)',
  'ccurl1' => 'https://www.teletexto.com/',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'www.teletexto.com',
  'ccchannel_block' => '<h2>Programación de Televisión<\\/h2>\\s*<ul>.*?(?:<li>)(.*?)(?:<\\/li>).*?<\\/ul>',
  'ccchannel_id' => '\\?programacion=(.*?)"',
  'ccchannel_name' => 'alt="(.*?)"',
);
?>