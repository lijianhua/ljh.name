<div id="footer">
    <div class="ft clrfix">
        <dl>
            <dt>文章</dt>
            <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=6')->parse('<dd><a href="{permalink}" class="item" target="_blank">{title}</a></dd>'); ?>
        </dl>
        <!-- <dl> -->
        <!--     <dt>项目</dt> -->
        <!--     <dd><a href="#">Android 开发的昨天、今天和明天</a> </dd> -->
        <!--     <dd><a href="#">迁移到了 Digital Ocean 的新加坡节点</a> </dd> -->
        <!--     <dd><a href="#">升级和改造 NAS 小记</a> </dd> -->
        <!--     <dd><a href="#">更换倒车摄像头小记</a> </dd> -->
        <!--     <dd><a href="#">WiFi&#45;Duino 使用小结</a> </dd> -->
        <!--     <dd><a href="#">给女儿的一封信</a> </dd> -->
        <!--     <dd><a href="#">我常用的 Mac 应用（2014）</a> </dd> -->
        <!--     <dd><a href="#">我常用的 iOS 应用和插件（2014版）</a> </dd> -->
        <!-- </dl> -->
        <dl>
            <dt>分类</dt>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories(); ?>
        </dl>
    </div>
<div class="company"><span>
  © 2015  <?php $this->options->title();?>  黑ICP备15002574号
    <?php _e('由 Typecho 强力驱动'); ?>.
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254043463'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1254043463%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</span></div>
</div>
