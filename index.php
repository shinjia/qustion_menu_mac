<?php

$html = <<< HEREDOC
<h2>資料管理系統</h2>
<p><a href="list.php">list.php</a> (依類別區分)</p>

<hr>
<p><a href="install.php">安裝資料庫或資料表</a></p>
HEREDOC;


include 'pagemake.php';
pagemake($html, '');
?>