<?php if(!empty($fall)){ ?>
    <div class="fl_ns im_bg">
        <div class="fl_nm fl_text fl_bg"><?php echo $fall['name'];?></div>
        <?php if(!empty($fall['news'])){ foreach($fall['news'] as $news){ ?>
            <div class="fl_im">
                <?php if($news['type'] === 'blog') { ?>
                <div class="bl_nm bl_bg"><?php echo $news['name']; ?></div>
                <div class="bl_ct"><?php echo $news['content']; ?></div>
                <div class="bl_mr"><a href="<?php echo $news['href']; ?>">阅读全文</a></div>
                <?php } else if($news['type'] === 'tw'){ ?>
                <?php } ?>

            </div>
        <?php } } ?>
    </div>
<?php } ?>
