<div class="tn wrap">
    <div class="logo">
    </div>
    <div class="nav">
        <ul>
            <?php if(!empty($navArray)){ foreach($navArray as $nav) {?>
                <?php if(!empty($nav['unavailable'])) {?>
                <?php } else { ?>
                <li><a <?php if(!empty($nav['disabled'])) {?> disabled <?php } ?> href="<?php echo $nav['href']; ?>"><?php echo $nav['name']; ?></a></li>
                <?php } ?>
            <?php } } ?>
        </ul>
    </div>
    <ul>
        <li><?php if((!empty($_SESSION['user_name']))&&($_SESSION['user_expire'] >time())){ ?><img id="settings" class="tn_settings" src="http://image.fxycarl.org/tn_settings_click.png" /><ol id="settings_list" class="tn_bg" style=""><li><a href="http://sso.fxycarl.org/Switch" disabled>切换帐号</a></li><li><a href="http://sso.fxycarl.org/Logout" disabled>退出</a></li></ol><?php } else { ?><a href="http://sso.fxycarl.org/Regist" disabled>注册</a><?php } ?></li>
        <li><?php if((!empty($_SESSION['user_name']))&&($_SESSION['user_expire'] >time())){ ?><a href="http://sso.fxycarl.org/User/<?php echo $_SESSION['user_name']; ?>" disabled><?php echo $_SESSION['user_name']; ?></a><?php } else { ?><a href="http://sso.fxycarl.org/Login" disabled>登录</a><?php } ?></li>
    </ul>
</div>
