<?php if (!defined( '__TYPECHO_ROOT_DIR__')) exit; ?>

<section class="hola-layout-main hola-card-stack">
    <?php while($this->next()): ?>
    <div class="hola-card article-list">
        <h1 class="hola-card-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <p><a href="<?php $this->permalink() ?>"><?php $this->date('Y-m-d'); ?> </a><?php $this->category(' '); ?></p>
        <p><?php $this->excerpt(150, '...');?></p>
    </div>
    <?php endwhile; ?>
    <div class="lists-navigator"><?php $this->pageNav('←','→','2','...'); ?></div>
</section>