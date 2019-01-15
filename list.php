<?php
include 'config.php';
include 'utility.php';

// 連接資料庫
$pdo = db_open();

// 寫出 SQL 語法
$sqlstr = "SELECT * FROM test_mac ORDER BY menu, uid ";

$sth = $pdo->prepare($sqlstr);

$ary = array();  // 將結果存在陣列裡
$old_menu = '';  // 隨便設一個不會出現的值

// 執行SQL及處理結果
if($sth->execute())
{
   // 成功執行 query 指令
   $total_rec = $sth->rowCount();
   $data = '';
   while($row = $sth->fetch(PDO::FETCH_ASSOC))
   {
      $uid = $row['uid'];
      $menu = convert_to_html($row['menu']);
      $name = convert_to_html($row['name']);
      $price = convert_to_html($row['price']);
    
      if($menu!=$old_menu)
      {
        $ary[$menu] = array();
        $old_menu = $menu;
      }

      array_push($ary[$menu], array('name'=>$name, 'price'=>$price));

   }

   /*
   echo '<pre>';
   print_r($ary);
   echo '</pre>';
   */
}


// 將 $ary 陣列分組輸出
// 
$data = '';
foreach($ary as $key=>$a_menu)
{
  $data .= '<h3>' . $key . '</h3>';
  $data .= '<table border="1">';

  foreach($a_menu as $a_one)
  {
    $name = $a_one['name'];
    $price = $a_one['price'];

      $data .= <<< HEREDOC
       <tr>
          <td>{$name}</td>
          <td>{$price}</td>
       </tr>
HEREDOC;
  }
  $data .= '</table>';
}
   

$html = <<< HEREDOC
<h2 align="center">共有 {$total_rec} 筆記錄</h2>
{$data}
HEREDOC;


include 'pagemake.php';
pagemake($html, '');
?>
