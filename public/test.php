<?php
echo "hello".'<br/>';
//// 一个用户匹配url的正则表达式
//$pattern = '/(https?|ftps?):\/\/(www)\.([^\.\/]+)\.(com|net|org)(\/[\w\-\.\/\?\%\&\=]*)?/i';
//
//// 被搜索的字符串
//$subject = "网址为http://www.baidu.com/index的位置是百度首页";
//
////使用preg_match()函数进行匹配
//if(preg_match($pattern, $subject, $matches)) {
//    echo "搜索到的URL为：".$matches[0]."<br>";    //数组中第一个元素保存全部匹配结果
//    echo "URL中的协议为：".$matches[1]."<br>";    //数组中第二个元素保存第一个子表达式
//    echo "URL中的主机为：".$matches[2]."<br>";    //数组中第三个元素保存第二个子表达式
//    echo "URL中的域名为：".$matches[3]."<br>";    //数组中第四个元素保存第三个子表达式
//    echo "URL中的顶域为：".$matches[4]."<br>";    //数组中第五个元素保存第四个子表达式
//    echo "URL中的文件为：".$matches[5]."<br>";    //数组中第六个元素保存第五个子表达式
//} else {
//    echo "搜索失败！";                             //如果和正则表达式没有匹配成功则输出
//}
//
//$subject = "网址为http://www.baidu.com/index.php的位置是百度，
//            网址为http://www.google.com/index.php的位置是谷歌。";
//$i = 1;    //定义一个计数器，用来统计搜索到的结果数
////搜索全部的结果
//if(preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER)) {
//    foreach($matches as $urls) {     //循环遍历二维数组$matches
//        echo "搜索到第".$i."个URL为：".$urls[0]."<br>";
//        echo "第".$i."个URL中的协议为：".$urls[1]."<br>";
//        echo "第".$i."个URL中的主机为：".$urls[2]."<br>";
//        echo "第".$i."个URL中的域名为：".$urls[3]."<br>";
//        echo "第".$i."个URL中的顶域为：".$urls[4]."<br>";
//        echo "第".$i."个URL中的文件为：".$urls[5]."<br>";
//        $i++;  //计数器累加
//    }
//} else {
//    echo "搜索失败！";
//}
//
////echo strstr('this is a test','test');
////echo strstr("this is a test!", 115);
//
///**
//用于获取URL中的文件名部分
//@param  string  $url     任何一个URL格式的字符串
//@return string       URL中的文件名称部分
// */
//function getFileName($url) {
//    //获取URL字符串中最后一个“/”出现的位置，再加1则为文件名开始的位置
//    $location = strrpos($url, "/")+1;
//    //获取在URL中从$location位置取到结尾的子字符串
//    $fileName = substr($url, $location);
//    //返回获取到的文件名称
//    return $fileName;
//}
////获取网页文件名index.php
//echo getFileName("http://bbs.lampbrother.net/index.php").'<br>';
////获取网页中图片名logo.gif
//echo getFileName("http://bbs.lampbrother.com/images/Sharp/logo.gif").'<br>';
////获取本地中的文件名php.ini
//echo getFileName("file:///C:/WINDOWS/php.ini").'<br>';
//
//
//echo strtotime('now').'<br>';
//echo json_encode(getdate(strtotime('now'))['minutes']).'<br>';
//echo date("Y年m月d日 h:i:s").'<br>';
//
////$winpath = "D:\\Pictures\\1007550.jpg";
////echo is_file($winpath)==1?'true'.'<br>':'false'.'<br>';
////echo basename($winpath).'<br>';
////echo dirname($winpath).'<br>';
////echo basename($winpath,'.jpg').'<br>';
////echo json_encode(pathinfo($winpath)).'<br>';
////echo json_encode(realpath($winpath)).'<br>';
//
//$resource = opendir("D:\\Pictures");
//$num=0;                     			//用来统计子目录和文件的个数
//$dirname='D:\\Pictures';
//
//while($file = readdir($resource)){
//    $dirFile=$dirname."/".$file;
//    //追加目录名
//    echo "文件名: ".$file." | ";                 	//显示文件名
//    echo "大小: ".filesize($dirFile)." | ";         //显示文件大小
//    echo "类型: ".filetype($dirFile)." | ";         //显示文件类型
//    echo "创建时间: ".date("Y/n/t",filectime($dirFile))."<br/>";
//    $num++;
//}
//closedir($resource); 			//关闭文件操作句柄
//echo '在<b>'.$dirname.'</b>目录下共有文件<b>'.$num.'</b>个';

//$path = "D:\\Pictures";
//echo disk_free_space($path).'<br>';
//echo disk_total_space($path).'<br>';

$filename = "static/hello.txt";
$handle = fopen($filename,'r') or die("文件打开失败");
$contents = fread($handle,filesize($filename));
fclose($handle);
echo $contents;

