<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<meta charset="<?php $this->options->charset(); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="baidu-site-verification" content="5QPrbbuzg8" />
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php $this->header(); ?>
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
<link rel="shortcut icon" href="<?php $this->options->themeUrl('/assets/img/favicon.ico'); ?>"/>
<link rel="stylesheet" href="<?php $this->options->themeUrl('/assets/css/holakit.css'); ?>">
<?php if ($this->is('post')) : ?><link rel="stylesheet" href="<?php $this->options->themeUrl('/assets/css/prism.css'); ?>"><?php endif; ?>
<?php if ($this->is('post')) : ?><script src="<?php $this->options->themeUrl('/assets/js/prism.js'); ?>">"></script><?php endif; ?>