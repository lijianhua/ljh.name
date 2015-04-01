<div id="footer">
    <div class="ft clrfix">
        <dl>
            <dt>文章</dt>
            <?php $this->widget('Widget_Contents_Post_Recent')->parse('<dd><a href="{permalink}" class="item" target="_blank">{title}</a></dd>'); ?>
        </dl>
        <dl>
            <dt>项目</dt>
            <dd><a href="#">Android 开发的昨天、今天和明天</a> </dd>
            <dd><a href="#">迁移到了 Digital Ocean 的新加坡节点</a> </dd>
            <dd><a href="#">升级和改造 NAS 小记</a> </dd>
            <dd><a href="#">更换倒车摄像头小记</a> </dd>
            <dd><a href="#">WiFi-Duino 使用小结</a> </dd>
            <dd><a href="#">给女儿的一封信</a> </dd>
            <dd><a href="#">我常用的 Mac 应用（2014）</a> </dd>
            <dd><a href="#">我常用的 iOS 应用和插件（2014版）</a> </dd>
        </dl>
        <dl>
            <dt>分类</dt>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories(); ?>
        </dl>
    </div>
<div class="company"><span>
  © 2015  <?php $this->options->title();?>   京ICP备14056036号-1
    <?php _e('由 Typecho 强力驱动'); ?>.
</span></div>
</div>
