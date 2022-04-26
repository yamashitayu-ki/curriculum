<link rel="stylesheet" href="css/style.css" />

<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$hidden_name = $_POST['hidden_name'];

$select_port = $_POST['port'];
$select_lang = $_POST['lang'];
$select_com = $_POST['com'];

$correct_port = $_POST['correct_port'];
$correct_lang = $_POST['correct_lang'];
$correct_com = $_POST['correct_com'];


	//ラジオボタンから値が送信されたか判定
	if( isset( $_POST["port"] )){
		//メッセージ表示
		echo "{$_POST["port"]}";
	}

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function Judgement($select, $correct)
{
  if ($select == $correct) {
    echo '正解！';
  } else {
    echo '残念・・・';
  }
}

?>

<p>
  <!--POST通信で送られてきた名前を表示-->
  <?php echo $hidden_name; ?>さんの結果は・・・？
</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Judgement($select_port, $correct_port); ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Judgement($select_lang, $correct_lang); ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Judgement($select_com, $correct_com); ?>