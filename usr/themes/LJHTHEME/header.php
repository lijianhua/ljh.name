<!DOCTYPE HTML>
<!--[if lt IE 9]>
<html id="ie8" lang="zh-CN">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="zh-CN">
<!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="ScmDBVL4m8_1FCWi0q1GowKId0hYzo3t10pCTkxiMwg" />
    <title><?php $this->archiveTitle(array(
      'category'  =>  _t('分类 %s 下的文章'),
      'search'    =>  _t('包含关键字 %s 的文章'),
      'tag'       =>  _t('标签 %s 下的文章'),
      'author'    =>  _t('%s 发布的文章')
    ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!--[if lt IE 9]>
    <script src="<?php $this->options->adminUrl('js/html5shiv.js'); ?>"></script>
    <script src="<?php $this->options->adminUrl('js/respond.js'); ?>"></script>
    <![endif]-->

    <?php if ($this->options->siteIcon): ?>
    <link rel="Shortcut Icon" href="<?php $this->options->siteIcon() ?>" />
    <link rel="Bootmark" href="<?php $this->options->siteIcon() ?>" />
    <?php endif; ?>
<link type="text/css" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link type="text/css" href="<?php $this->options->themeUrl('css/index.css'); ?>" rel="stylesheet">
  <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/index.js'); ?>"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
    href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <?php if ($this->options->bgImg): ?>
    <style>
    /* 自己用就放进外部css文件了, 为了能让php自定义, 只能放这里了 */
    /* 如果提供背景, 就覆盖css/header.css里的默认背景 */
    #description {
    background: url(<?php $this->options->bgImg() ?>);
background-position-y: 10%;
background-size: cover;
}
</style>
  <?php endif; ?>

<?php $this->header(); ?>
</head>

  <body>
  <div id="header">
  <div class="header-title">
  <a class="site-title" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
  </div>
  </div> 

  <div class="shadow"></div>

  <div  id="content">
