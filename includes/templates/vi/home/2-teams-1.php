<?php
$page_id = $page->ID;
$dir_path = \includes\Bootstrap::getTemplate();
?>
<?=  \includes\Bootstrap::bootstrap()->helper->render($dir_path . '/teams/block2.php', ['page_id' => $page_id]); ?>
