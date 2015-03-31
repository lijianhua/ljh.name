<?php

    if (isset($_GET["action"]) && $_GET["action"] == "ajax_comments") {
        $this->need('comments.php');
    } else {
        if(strpos($_SERVER["PHP_SELF"],"themes")) header('Location:/');
        $this->need('header.php');

?>

<div class="main">
    <div class="info">
        <div class="info-title"><?php $this->title() ?></div>
        <div class="content">
            <div class="info-time">
                <i class="info-img"></i>
                <span><?php $this->date('Y-m-d'); ?></span>
            </div>
            <?php $this->content(); ?>
        </div>
    </div>
    <?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>
<?php } ?>
