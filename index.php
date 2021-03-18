<?php
 $text = "В город ворвалась зима. Еще вчера ветер гонял по улицам опавшие листья, моросил холодный дождь. Сегодня же с утра все белым-бело. За ночь снежная туча щедро поделилась снегом, который теперь искрился и переливался в лучах яркого утреннего солнца. Лицо прохожих, одетых в теплые шубы и пуховики, были по-детски радостными. Ребятишки же не скрывали свой восторг и громко радовались долгожданному снегу. Возле школ развернулись настоящие снежные баталии. Многие школьники, да и некоторые учителя оказались обстреляны снежками. У всех в этот день было радостное, приподнятое настроение. Зима вступила в свои владения, подарив людям ощущение сказки, волшебства.";
 $length_char = iconv_strlen($text);
 $words = explode(' ', $text);
 $word_count = count($words);
 $words_met = [];

 echo $text."<br>";
 echo "<br>Количество символов: ".$length_char;
 echo "<br>Количество слов: ".$word_count."<br><br>";

for ($i = 0; $i <= $word_count; $i++) {
    $sum = 0;
    for($j = 0; $j <= $word_count; $j++){
        if($words[$i] === $words[$j]){
            $sum++;
            $words_met[$words[$j]] = $sum;
        }
    }
}


function vardump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
vardump($words_met);
?>