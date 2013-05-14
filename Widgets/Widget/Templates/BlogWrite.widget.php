<div class="bw_im bw_bg">
    <div class="bw_tp">
        <span class="type">发布博文</span>
    </div>
    <div class="bw_ip">
        <div class="bi_mn">
            <div class="title">标题:<input class="ip_tl" id="title" type="text" value="<?php if(!empty($blogPost['title'])){ echo $blogPost['title']; } ?>" /></div>
            <div class="label">标签:<input class="ip_lb" id="label" type="text" value="<?php if(!empty($blogPost['label'])){ echo $blogPost['label']; } ?>" /></div>
            <div class="content">
                <div class="ta">
                    <div class="ta_sn"></div>
                    <textarea id="content" class="ip_ct"><?php if(!empty($blogPost['content'])){ echo $blogPost['content'];} ?></textarea>
                </div>
                <div class="bi_sn">
                    <div class="name">编辑选项</div>
                    <div class="item"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bw_sm">
        <span id="submit" class="submit">发布</span><span id="clear" class="clear">清除</span>
    </div>
</div>
