<?php if(!empty($blogPost)) {?>
<div class="bs_pt"><a href="http://blog.fxycarl.org/Post/Write">+发表新博文</a></div>
<?php if((!empty($blogPost['posts']))&&(is_array($blogPost['posts']))){ foreach($blogPost['posts'] as $post){ ?>
<div class="bs_im bs_bg">
    <div class="bs_nm"><a href="<?php echo $post['href']; ?>"><?php echo $post['name']; ?></a></div>
    <div class="bs_ct <?php if(!isset($blogPost['detail'])){ ?>bs_short<?php } else { ?>bs_dt<?php } ?>"><?php echo $post['content']; ?></div>
    <div class="bs_br"><?php if(!isset($blogPost['detail'])) { ?><a href="<?php echo $post['href']; ?>">阅读全文...</a><?php } else { ?><span class="bs_lb">标签:<?php echo $post['label']; ?></span><?php } ?><span class="bs_tm">发布时间:<?php echo $post['real_time']; ?></span></div>
</div>
<?php } }?>
<div class="bs_pt"><a href="http://blog.fxycarl.org/Post/Write">+发表新博文 </a></div>
<?php } ?>
