<?php
# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

     # 以下に回答を記載
//配列に”斉藤""を追加
array_push($names, "斉藤");
print_r($names);

echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

     # 以下に回答を記載
//$array1と$array2を結合
$result = array_merge($array1, $array2);
print_r($result);

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

     # 以下に回答を記載
//＄numbersの中に"3"がいくつあるかを出力
$counts = array_count_values($numbers);
echo $counts["3"] . "回" . PHP_EOL;

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

     # 以下に回答を記載
//$sportsの中の"null"(重複)の要素を削除して出力
$sports = array_diff($sports, [null]);
print_r($sports);

echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

     # 以下に回答を記載
// 配列が空 = true 1つ以上の要素 = false
$array1 = [];
var_export(empty($array1)) . PHP_EOL;
$array2 = [1, 5, 8, 10];
var_export(empty($array2)) . PHP_EOL;

echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

     # 以下に回答を記載
//$number2で$number1の配列に10をかけた数値を出力
$numbers2 = [];
foreach ($numbers1 as $number) {
  $number2[] = $number * 10;
}
print_r($number2);

echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

     # 以下に回答を記載
//文字列から数字に変換
$array = array_map('intval', $array);
# 以下は変更しないで下さい
var_dump($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

     # 以下に回答を記載
//文字を大文字にする
$programming_languages = array_map('ucfirst', $programming_languages);
$upper_case_programming_languages = array_map('strtoupper', $programming_languages,);
  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

     # 以下に回答を記載
//配列内に会員NO.を付け加える
$names1 = [];
foreach($names as $key => $name){
    $name1 = "会員No.".($key + 1)." ".$name;
    array_push($names1,$name1);
}
print_r($names1);
echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼","高級なうに"];

     # 以下に回答を記載
//うにならば好物です　それ以外はまぁまぁ好きですと出力
foreach ($foods as $food) {
  if (strpos($food, "うに") !== false) {
    echo "好物です" . PHP_EOL;
  }else {
    echo "まぁまぁ好きです" . PHP_EOL;
  }
}
echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

# 以下に回答を記載
//配列をフラットにする
$new_sports = [];
foreach ($sports as $sport) {
  //is_arrayは、$valueが配列の時にtrueを返す
  if (is_array($sport)) {
    //配列の時
    foreach ($sport as $s) {
      $new_sports[] = $s;
    }
  } else {
    $new_sports[] = $sport;
  }
}
//重複を削除
$unique_sports = array_unique($new_sports);
//配列のキーの振り直し
$sports_values = array_values($unique_sports);

echo "ユーザーの趣味一覧" . PHP_EOL;
foreach ($new_sports  as $key => $s) {
  echo ("No." . ($key + 1) . $s) . PHP_EOL;
}

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

//   # 以下に回答を記載
//連想配列から"name"の値を出力
echo($data["user"]["name"]);

echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載
// $user_dataに$update_dataの内容を上書きして出力
print_r(array_replace($user_data, $update_data));
echo PHP_EOL;

 print("#####q14#####".PHP_EOL);
 $data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載
  //連想配列からキーを取り出す
  print_r(array_values($data));

 echo PHP_EOL;

 print("#####q15#####".PHP_EOL);
 $data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
 $data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

   # 以下に回答を記載
//data1 or data2の中にageがあればOK,無ければNG
 $keys = array_keys($data1);

 if (in_array("age", $keys)){
   echo ("OK");
 }else {
   echo ("NG");
 }
echo PHP_EOL;

 $keys = array_keys($data2);
 //print_r($keys);
 if (in_array("age", $keys)){
   echo ("OK");
 }else {
   echo ("NG");
 }

 echo PHP_EOL;

 print("#####q16#####".PHP_EOL);
 $users = [
   [ "name" => "satou", "age" => 22 ],
   [ "name" => "yamada", "age" => 12 ],
   [ "name" => "takahashi", "age" => 32 ],
   [ "name" => "nakamura", "age" => 41 ]
 ];

 # 以下に回答を記載
 //"私の名前は〜です。年齢は〜歳です。"と表示
 foreach ($users as $user) {
   echo "私の名前は" . $user["name"] . "です。年齢は" . $user["age"] . "歳です。" . PHP_EOL;
 }
 echo PHP_EOL;
//
print("#####q17#####".PHP_EOL);
class User
{
  // property
   public $name;
   public $age;
   public $sex;

   // constructor
   public function __construct($name, $age, $sex) {
     $this->name = $name;
     $this->age = $age;
     $this->sex = $sex;
   }
  public function info() {
    echo "名前:".$this->name .PHP_EOL;
    echo "年齢:".$this->age .PHP_EOL;
    echo "性別:".$this->sex .PHP_EOL;
  }
}
$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");
$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);
class Man
{
  // property
   public $name;
   public $age;

   // constructor
   public function __construct($name, $age) {
     $this->name = $name;
     $this->age = $age;
   }
  public function introduce() {
    if($this->age >= 15){
      echo "こんにちは、".$this->name."と申します。宜しくお願いいたします。". PHP_EOL;
    }else {
      echo "はいさいまいど〜、".$this->name."です！！！" . PHP_EOL;
    }
  }
}

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

   public $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

  public $name;
  public $age;
  // constructor
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
}

class Zoo
{
  public $name;
  public $fee;

  public function __construct($name, $fee) {
    $this->name = $name;
    $this->fee = $fee;
  }
  public function info_entry_fee($human) {
    if($human->age <= 3){
      echo $human->name."さんの入場料金は".$this->fee["infant"]."円です。". PHP_EOL;
    }elseif($human->age <= 12){
      echo $human->name."さんの入場料金は".$this->fee["children"]."円です。". PHP_EOL;
    }elseif($human->age <= 33){
      echo $human->name."さんの入場料金は".$this->fee["adult"]."円です。". PHP_EOL;
    }elseif($human->age <= 109){
    echo $human->name."さんの入場料金は".$this->fee["senior"]."円です。". PHP_EOL;
    }
  }
}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;

print("#####q21#####".PHP_EOL);

for($i =1; $i<=30; $i++){
  if($i %21 ==0){
    echo "FizzHoge" . PHP_EOL;
  }elseif($i %15 ==0) {
    echo "FizzBuzz". PHP_EOL;
  }elseif ($i %7 ==0) {
    echo "Hoge" . PHP_EOL;
  }elseif ($i %5 ==0) {
    echo "Buzz" . PHP_EOL;
  }elseif ($i %3 ==0){
    echo "Fizz" . PHP_EOL;
  }else{
    echo $i . PHP_EOL;
  }
}
?>
