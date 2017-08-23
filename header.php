<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!is_pjax()) { ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#303030">

 <?php } ?>



    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<?php if (!is_pjax()) { ?>
    <!-- 使用url函数转换相关路径 -->
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
<script src="//cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
<!-- 这行是Disqus API的JS路径 --><script src="path/to/iDisqus.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/player.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/zoom.css'); ?>">
<!-- 这行是Disqus API的CSS路径 --><link rel="stylesheet" href="path/to/iDisqus.min.css" />


    <!-- fonts -->


    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>

</head>
<body class="loaded">
<?php } ?>

    
    
