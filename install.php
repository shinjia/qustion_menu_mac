<?php
include 'config.php';

// ************ 以下為資料定義，依自行需要進行修改 ************
// 資料表之SQL語法 (採用陣列方式，可以設定多個。注意陣列的key即為資料表名稱)

$a_table['test_mac'] = '
CREATE TABLE test_mac
(
   uid int(11) NOT NULL auto_increment, 
   menu VARCHAR(255) NULL, 
   name VARCHAR(255) NULL, 
   price INT NULL,
   PRIMARY KEY (uid)
)
';



 
// 如要預先新增記錄，定義於此
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','嫩煎雞腿堡買一送一(÷2)',40)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','勁辣雞腿堡買一送一(÷2)',35)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','千島黃金蝦堡買一送一(÷2)',35)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','麥香魚買一送一(÷2)',25)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','大麥克買一送一(÷2)',35)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','麥香雞買一送一(÷2)',25)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','雞腿排買一送一(÷2)',28)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','雞翅買一送一(÷2)',21)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','四塊雞塊買一送一(÷2)',25)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','大薯買一送一(÷2)',28)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','冰炫風買一送一(÷2)',28)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','蘋果派買一送一(÷2)',16)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','10元麥香魚',10)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','10元麥香雞',10)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','10元美式辣味香雞堡',10)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','10元法式芥末香雞堡',10)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','1元小薯',1)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','1元薯餅',1)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','1元蛋捲冰',1)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('APP coupon','蛋捲冰淇淋+小薯',40)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','大麥克',69)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','雙層牛肉吉事堡',59)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','安格斯黑牛堡',99)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','嫩煎雞腿堡',79)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','麥香雞',49)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','麥克雞塊 (6塊)',59)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','麥克雞塊 (9塊)',89)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','勁辣雞腿堡',69)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','麥脆雞 (2塊)',104)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','麥脆雞 (3塊)',156)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','黃金起司豬排堡',49)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','麥香魚',49)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','千島黃金蝦堡',69)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','BLT安格斯黑牛堡',109)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','BLT辣脆雞腿堡',109)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','BLT嫩煎雞腿堡',109)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','蕈菇安格斯黑牛堡',119)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','凱薩脆雞沙拉',99)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('主餐','義式烤雞沙',99)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('套餐','A餐',50)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('套餐','B餐',50)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('套餐','C餐',65)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('套餐','D餐',65)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('套餐','E餐',79)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('套餐','薯條升級',13)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('套餐','飲料升級',7)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','勁辣香雞翅 (2塊)',42)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','BBQ 嫩雞翅 (2塊)',42)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','麥克雞塊 (4塊)',49)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','麥克雞塊 (6塊)',59)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','麥克雞塊 (9塊)',89)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','麥克雞塊 (20塊)',179)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','漢堡',32)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','吉事漢堡',39)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','蘋果派',32)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','薯餅',32)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','海苔搖搖粉',5)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','蔥辣搖搖粉',5)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','薯條(小)',32)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','薯條(中)',42)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','薯條(大)',55)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','玉米湯 (小)',33)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','玉米湯 (大)',52)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','冰炫風',55)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','聖代',32)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','蛋捲冰淇淋',18)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','碳酸/紅茶(小)',28)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','碳酸/紅茶(中)',33)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','碳酸/紅茶(大)',40)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','冰咖啡',45)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','熱咖啡(小)',33)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','熱咖啡(中)',45)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','巧克力(中/飲品)',75)";
$a_record[] = "INSERT INTO  test_mac(menu, name, price) VALUES ('單點','巧克力(大/飲品)',90)";






// ************ 以下為此程式之功能執行，毋需修改 ************

function build_table_string($sth)
{
    $ret = '';

    // 以各欄位名稱當表格標題
    $fields = array(); 
    for ($i=0; $i<$sth->columnCount(); $i++)
    {
        $col = $sth->getColumnMeta($i);
        $fields[] = $col['name'];
    }

    $ret .= '<table border="1" cellpadding="2" cellspaceing="0">';
    $ret .= '<tr>';
    foreach ($fields as $val)
    {
        $ret .= '<th>' . $val . '</th>';
    }
    $ret .= '</tr>';
  
    // 列出各筆記錄資料
    while($row=$sth->fetch(PDO::FETCH_ASSOC))
    {
        $ret .= '<tr>';
        foreach($row as $one)
        {
            $ret .= '<td>' . $one . '</td>';
        }
        $ret .= '</tr>';
    }
    $ret .= '</table>';
   
    return $ret;
}



// ***** 主程式 *****
$do = isset($_GET['do']) ? $_GET['do'] : '';

// 接收傳入變數 (供 SQL_INPUT 及 SQL_QUERY 使用)
$sql = isset($_POST['sql']) ? $_POST['sql'] : '';
$sql = stripslashes($sql);  // 去除表單傳遞時產生的脫逸符號

$msg = '';
switch($do)
{
   case 'ADD_DATA' :
        $pdo = db_open();
        
        $msg = '<h2>新增記錄</h2>';
        foreach($a_record as $key=>$sqlstr)
        {
            $sth = $pdo->query($sqlstr);
            
            if($sth===FALSE)
            {
                $msg .= '<p>無法新增！</p>';
                $msg .= print_r($pdo->errorInfo(),TRUE);
            }
            else
            {
                $new_uid = $pdo->lastInsertId();    // 傳回剛才新增記錄的 auto_increment 的欄位值
                $msg .= '<p>新增成功 (uid=' . $new_uid .  ')</p>';
            }
        }
        break;
        
        
        
   case 'LIST_DATA' :
        $pdo = db_open();
        
        $msg = '<h2>記錄內容</h2>';
        foreach($a_table as $key=>$sqlstr)
        {
            $sqlstr = 'SELECT * FROM ' . $key;
            $sth = $pdo->query($sqlstr);
           
            $msg .= '<h3>資料表『' . $key . '』</h3>';
            if ($sth===FALSE) 
            {
                $msg .= '<p>無法顯示</p>';
                $msg .= print_r($pdo->errorInfo(),TRUE);
            }
            else
            {
                $msg .= build_table_string($sth);
            }
        }
        break;
        
        
        
   case 'DESC_TABLE' :
        $pdo = db_open();
        
        $msg = '<h2>資料表結構</h2>';
        foreach($a_table as $key=>$sqlstr)
        {
            $sqlstr = 'DESC ' . $key;
            $sth = $pdo->query($sqlstr);

            $msg .= '<h3>資料表『' . $key . '』</h3>';

            if($sth===FALSE)
            {
                $msg .= '<p>無法顯示</p>';
                $msg .= print_r($pdo->errorInfo(),TRUE);
            }
            else
            {
               $msg .= build_table_string($sth);
           }
        }
        break;
        
        
        
   case 'CREATE_TABLE' : 
        $pdo = db_open();
        
        $msg .= '<h2>資料表建立結果</h2>';
        
        foreach($a_table as $key=>$sqlstr)
        {
            $msg .= '<h3>資料表『' . $key . '』</h3>';
            
            $sth = $pdo->query($sqlstr);   
            if($sth===FALSE)
            {
                $msg .= '<p>無法建立！</p>';
                $msg .= print_r($pdo->errorInfo(),TRUE);
            }
            else
            {
                $msg .= '<p>建立完成</p>';
            }
            
        }
        break;


        
   case 'DROP_TABLE' : 
        // 連接資料庫
        $pdo = db_open();
        
        // 執行SQL及處理結果
        $msg .= '<h2>資料表刪除結果</h2>';
        foreach($a_table as $key=>$sqlstr)
        {
            $msg .= '<h3>資料表『' . $key . '』</h3>';
            
            $sqlstr = 'DROP TABLE ' . $key;
            $sth = $pdo->exec($sqlstr);   
  
            if($sth===FALSE)
            {
                $msg .= '<p>無法刪除！</p>';
                $msg .= print_r($pdo->errorInfo(),TRUE);
            }
            else
            {
                $msg .= '<p>刪除成功</p>';
            }
        }
        break;
        
   
        
   case 'CREATE_DATABASE' : 
       
        try {
            $pdo = new PDO('mysql:host='.DB_SERVERIP, DB_USERNAME, DB_PASSWORD);
            if(defined('SET_CHARACTER')) $pdo->query(SET_CHARACTER);
            
            $sqlstr = 'CREATE DATABASE ' . DB_DATABASE;
            $sqlstr .= ' DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ';   // or utf8
            
            $pdo->exec($sqlstr);  // or die(print_r($pdo->errorInfo(), true));
        }
        catch (PDOException $e)
        {
            die("DB ERROR: ". $e->getMessage());
        }
    
        $msg .= '<h2>資料庫建立</h2>';
        $msg .= print_r($pdo->errorInfo(),TRUE);
        $msg .= '<p>資料庫『' . DB_DATABASE . '』</p>';
        $msg .= '<p>' . $sqlstr . '</p>';
        $msg .= '<p>如要刪除 DROP DATABASE ' . DB_DATABASE . '</p>';
        break;
        
        
        
   case 'SQL_QUERY' :
        if(empty($sql))
        {
            $msg .= '<h2>SQL 範例</h2>' ;
            $msg .= '<p>SHOW TABLES</p>';
            $msg .= '<p>SHOW TABLE STATUS</p>';
            $msg .= '<p>--------------------</p>';
            foreach($a_table as $key=>$sqlstr)
            {
                $msg .= '<p>SELECT * FROM ' . $key . '</p>';
            }
        }
        else
        {
            $pdo = db_open();
            
            $sqlstr = $sql;
            $sth = $pdo->query($sqlstr);
            
            if($sth===FALSE)
            {
                $msg .= '<h3>執行結果失敗！</h3>';
                $msg .= print_r($pdo->errorInfo(),TRUE);
            }
            else
            {
                // SELECT 語法結果
                $msg .= '<h3>rowCount: ' . $sth->rowCount() . '</h3>';
                $msg .= build_table_string($sth);
            }
        }
        
        $msg = <<< HEREDOC
        <h2>請輸入SQL指令</h2>
        <form name="form1" method="post" action="?do=SQL_QUERY">
        <textarea name="sql" rows="3" cols="80">{$sql}</textarea><br />
        <input type="submit" value="送出查詢">
        </form>
        <hr />
        {$msg}
HEREDOC;
        break;
        
        
        
   case 'VIEW_DEFINE' :
        $msg .= '<table border="0"><tr><td>';
        $msg .= '<div align="left">';
        $msg .= '<h2>資料表 (程式內定義)</h2>';
        foreach($a_table as $key=>$sqlstr)
        {
           $msg .= '<h3>' . $key . '<h3>';
           $msg .= '<pre>' . $sqlstr . '</pre><hr />';
        }
        $msg .= '<h2>預設 SQL (程式內定義)</h2><hr />';
        foreach($a_record as $key=>$sqlstr)
        {
           $msg .= '<pre>' . $sqlstr . '</pre>';
        }
        $msg .= '</div>';
        $msg .= '</td></tr></table>';
        break;
        
        
        
   default :
       $msg .= '快速安裝程式';
}



$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>基本資料庫系統 - 安裝程式</title>
</head>
<body>
<h2>初始安裝工具程式</h2>
<p>
  | <a href="?do=VIEW_DEFINE">程式內SQL定義</a>
  | ---
  | <a href="?do=CREATE_DATABASE">建立資料庫</a>
  | ---
  | <a href="?do=CREATE_TABLE">建立資料表</a>
  | <a href="?do=DROP_TABLE" onClick="return confirm('確定要刪除嗎？');">刪除資料表</a>
  | <a href="?do=DESC_TABLE">查看結構</a>
  | ---
  | <a href="?do=ADD_DATA">新增預設記錄</a>
  | <a href="?do=LIST_DATA">查看記錄內容</a>
  | ---
  | <a href="?do=SQL_QUERY">SQL測試</a>
  |
<hr>
<div align="center">
{$msg}
</div>
</body>
</html>
HEREDOC;

echo $html;
?>