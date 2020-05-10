<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>
<html class="hola-html-reset hola-var">
    <head>
        <?php $this->need('./components/global/header.php');?>
    </head>
    <body class="hola-body-typography hola-grey-bg">
        <?php $this->need('./components/pages/post/navbar.php');?>
        <div class="hola-container hola-layout-container hola-layout-container-sidebar-right">
            <?php $this->need('./components/pages/post/article-view.php');?>
            <?php $this->need('./components/pages/global/sidebar.php');?>
        </div>
        <?php $this->need('./components/global/footer.php');?>
    </body>
</html>