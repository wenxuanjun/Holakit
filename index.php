<?php
/**
 * 基于HolaKit开发的一款美丽皮肤
 * @package HolaKit
 * @author wendster
 * @version 1.0
 * @link https://wendster.com
 */
 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>
<html class="hola-html-reset hola-var">
    <head>
        <?php $this->need('./components/global/header.php');?>
    </head>
    <body class="hola-body-typography hola-grey-bg">
        <?php $this->need('./components/pages/index/navbar.php');?>
        <div class="hola-container hola-layout-container hola-layout-container-sidebar-right">
            <?php $this->need('./components/pages/index/article-list.php');?>
            <?php $this->need('./components/pages/global/sidebar.php');?>
        </div>
        <?php $this->need('./components/global/footer.php');?>
    </body>
</html>