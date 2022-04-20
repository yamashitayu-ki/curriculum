<?php
    $testFile = "test.txt";
    $contents = "こんにちは！";
    
    if (is_writable($testFile)) {
        // is_writable()：書き込み可能かどうか調べる→可能ならtrueを返す
        // 書き込み可能なときの処理
        // fopen()：対象のファイルを開く
        $fp = fopen($testFile, "a");
        // ※第2引数→w:完全上書き、a:追記モード、r:読み込み
        // fwrite()：対象のファイルに書き込む
        fwrite($fp, $contents);
        // fclose()：ファイルを閉じる→無駄なメモリを消費しないため
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!";
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }



    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        // is_readable()：読み込み可能かどうか調べる→可能ならtrueを返す
        // 読み込み可能なときの処理
        // fopen()：対象のファイルを開く
        $fp = fopen($test_file, "r");
        // ※第2引数→r:読み込み
        // fgets()：開いたファイルから1行ずつ読み込む
        while ($line = fgets($fp)) {
            // 改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        // fclose()：ファイルを閉じる
        fclose($fp);
    } else {
        // 読み込み不可のときの処理
        echo "not readable!";
        exit;
    }

?>