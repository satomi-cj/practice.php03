<?php
echo 'hello php!';
echo "\n";


//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($number){
  return $number * 2;
}
  
echo sum(5);
echo "\n";


//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function f($a , $b){
  return $a + $b;
}
echo f(1,2);
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function number_sum($arr){
  $total= 1;
  foreach($arr as $b) {
    $total *= $b;
  }
  return $total;
}

$arr = array(1, 3, 5, 7, 9,);
echo number_sum($arr);
echo "\n";

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
  //どうしたらいいかわからない・・・・
    if($a > $max_number){
      $max_number = $a;
    }
  }
  return $max_number;
}

$a = array(2, 8, 10, 4);

echo max_array($a);
echo "\n";

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

//strip_tags=文字列に含まれるHTMLタグやPHPタグを取り除くことができます。
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

//array_push=配列の末尾に要素を追加する。
$stack = array("いちご","りんご");
array_push($stack,"ぶどう");
print_r($stack);
echo "\n";

//array_merge=複数の配列をマージ（くっつける）する。
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
print_r($array);

//time, mktime=timeは現在のUNIXタイムスタンプを返す。mktimeは指定日時を UNIXのタイムスタンプとして取得します。UNIXタイムスタンプとはコンピューターのシステムシステム時刻の一種。
echo "現在のタイム：".time();
echo "\n";
$time = mktime(0, 0, 3, 19, 2020);
echo $time;
echo "\n";

//date=ローカルの日付/時刻を書式化する.
echo date( "Y/m/d" );