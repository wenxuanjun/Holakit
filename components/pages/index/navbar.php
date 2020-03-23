<?php if (!defined( '__TYPECHO_ROOT_DIR__')) exit; ?>

<header class="hola-navbar hola-navbar-transparent hola-navbar-darkbg">
    <div class="hola-container">
        <nav class="hola-navbar-main">
            <a href="<?php $this->options->siteUrl(); ?>" class="hola-navbar-brand">
            <?php $this->options->title() ?></a>
        </nav>
        <input type="checkbox" class="hola-navbar-toggle" id="navbar-toggle">
        <label for="navbar-toggle" class="hola-navbar-toggle-label"></label>
        <nav class="hola-navbar-sub">
            <a href="<?php $this->options->siteUrl(); ?>">首页</a>
            <?php $this->widget('Widget_Contents_Page_List') ->parse('<a href="{permalink}">{title}</a>'); ?>
        </nav>
    </div>
</header>

<div class="hola-hero hola-hero-dark-bg hola-hero-height-extended">
    <div class="hola-container hola-hero-content">
        <h1><?php $this->options->title() ?></h1>
        <p><?php $this->options->description() ?></p>
    </div>
</div>