<?php if (!defined( '__TYPECHO_ROOT_DIR__')) exit; ?>


<section class="hola-layout-main hola-card-stack">
    <div class="hola-card">
        <h1 class="hola-card-title" itemprop="name"><?php $this->title() ?></h1>
        <div class="hola-content">
            <div><?php $this->content(); ?></div>
        </div>
    </div>
</section>