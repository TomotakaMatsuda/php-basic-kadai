<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>

 <body>
     <p>
        <?php
        //配列を昇順、降順に並び替えて表示する関数
            function sort_2way ($array, $order) {
                //$orderがTRUEならば昇順、FALSEならば降順
                if($order) {
                    echo '昇順にソートします。<br>';
                    sort($array);
                } else {
                    echo '降順にソートします。<br>';
                    rsort($array);
                }
                //並び変えた配列を縦に並べて表示
                foreach ($array as $array) {
                    echo "{$array}<br>";
                }
            }
            //ソートする配列を宣言
            $nums = [15, 4, 18, 23, 10 ];
            sort_2way ($nums, TRUE);
            sort_2way ($nums, FALSE);
        ?>
     </p>
 </body>
 
 </html>
