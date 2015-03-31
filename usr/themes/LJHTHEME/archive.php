<?php $this->need('header.php'); ?>

<div class="main">
    <div class="category block">
        <p class="sfonts ui ribbon label <?php $this->options->labelColor() ?>"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
        </p>
    </div>
    <?php if ($this->have()): ?>
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
    <?php else: ?>
        <div class="info">
            <h2 class="header"><?php _e('没有找到内容'); ?></h2>
        </div>
    <?php endif; ?>

    <?php $this->pageNav('&laquo;', '&raquo;'); ?>
</div>

<?php $this->need('footer.php'); ?>
