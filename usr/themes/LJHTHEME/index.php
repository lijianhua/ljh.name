<?php

/**
 * 这是LJH修改的主题
 * 
 * @package Hogo Theme
 * @author  Hogo
 * @version 1.0
 */
 
    $this->need('header.php');
?>
<div class="main">
  <?php while($this->next()): ?>
  <div class="info">
            <div class="info-title"><a href="<?php $this->permalink() ?>" target="_blank"><?php $this->title() ?></a></div>
            <div class="content">
                <div class="info-time">
                    <i class="info-img"></i>
                    <span><?php $this->date('Y-m-d'); ?></span>
                </div>
                <?php $this->content('阅读全文 >>'); ?>
            </div>
        </div>
    <?php endwhile; ?>
    <nav>
      <?php $this->pageNav('&laquo;', '&raquo;'); ?>
    </nav>
</div>

<?php $this->need('footer.php'); ?>
