<?php if (!defined( '__TYPECHO_ROOT_DIR__')) exit; ?>

<aside class="hola-layout-sidebar hola-card-stack">
	<div class="hola-card">
		<h2 class="hola-card-title">分类</h2>
		<ul class="hola-vmenu">
			<?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li class="hola-vmenu-item"><a href="{permalink}">{name}<span class="hola-badge hola-badge-radii">{count}</span></a></li>'); ?>
		</ul>
	</div>
	<div class="hola-card">
		<h2 class="hola-card-title">标签</h2>
        <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1')->to($tags); ?>
        <?php if($tags->have()) {while ($tags->next()): ?>
            <a href="<?php $tags->permalink();?>" style="line-height:2rem"><span class="hola-badge hola-badge-radii"><?php $tags->name(); ?></span></a>
        <?php endwhile;}?>
	</div>
</aside>