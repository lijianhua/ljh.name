<?php $this->comments()->to($comments); ?>
<div id="comments">
<div class="block">
<div class="info">
    <div class="content">
    <p class="ui <?php $this->options->labelColor() ?> ribbon label comments"><?php $this->commentsNum(_t('还不快抢沙发'), _t('只有地板了'), _t('已有 %d 人抢先你了')); ?></p>
    </div>
</div>
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<?php if($this->allow('comment')): ?>

<div class="info" id="<?php $this->respondId(); ?>">
    <div class="mark-top">
       <span class="label-primary mark">已有 3 人抢先你了</span>
    </div>
    <div class="content" style="padding-top: 10px">
    <div>
      	<?php $comments->cancelReply(); ?>
    </div>
   	<p class="ui ribbon label <?php $this->options->labelColor() ?>"><?php _e('添加新评论'); ?></p>

      <form method="post" action="<?php $this->commentUrl() ?>" class="ui fluid form form-horizontal">
      <?php if($this->user->hasLogin()): ?>
      <div class="field"><?php _e('登录身份：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></div>
      <?php else: ?>
          <div class="form-group">
              <div class="col-sm-6">
                  <input type="text" class="form-control" name="author" placeholder="<?php _e('称呼'); ?><?php _e(' (必填)') ?>"value="<?php $this->remember('author'); ?>" />
              </div>
              <div class="col-sm-6">
                  <input type="email" class="form-control" name="mail" placeholder="<?php _e('电子邮件'); ?><?php if ($this->options->commentsRequireMail): ?><?php _e(' (必填)') ?><?php endif; ?>" value="<?php $this->remember('mail'); ?>" />
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                  <input type="url" class='form-control' name="url" placeholder="<?php _e('个人主页'); ?><?php if ($this->options->commentsRequireURL): ?><?php _e(' (必填)') ?><?php endif; ?>" value="<?php $this->remember('url'); ?>" />
              </div>
          </div>
      <?php endif; ?>
          <div class="form-group">
              <div class="col-sm-12">
                  <textarea class="form-control" rows="8" cols="50" id="comment-content" placeholder="<?php _e('回复内容'); ?><?php _e(' (必填)')?>" name="text"><?php $this->remember('text'); ?></textarea>
              </div>
          </div>

          <div class="form-group">
              <div class="col-sm-12">
                  <button type="submit" id="comment-submit" class="btn btn-primary <?php $this->options->labelColor() ?>"><?php _e('提交评论 (Ctrl + Enter)'); ?></button>
              </div>
          </div>
      </form>
</div>
</div>
</div>
<?php else: ?>

<div class="block">
    <p class="ui ribbon label <?php $this->options->labelColor() ?>"><?php _e('楼主残忍的关闭了评论'); ?></p>
</div>

<?php endif; ?>
