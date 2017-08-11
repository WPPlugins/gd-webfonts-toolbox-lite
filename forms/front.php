<?php

$panels = array();

include(GDWFT_PATH.'forms/shared/top.php');

$pages = gdwft_admin()->menu_items;

?>

<div class="d4p-front-left">
    <div class="d4p-front-title" style="height: auto;">
        <h1 style="line-height: 0.9;">
            <span style="font-size: 80px">GD WebFonts</span><span style="font-size: 110px">TOOLBOX</span>
            <span style="font-size: 48px">LITE</span>
        </h1>
        <h5>
            <?php 

            _e("Version", "gd-webfonts-toolbox-lite");
            echo': '.gdwft_settings()->info->version;

            if (gdwft_settings()->info->status != 'stable') {
                echo ' - <span style="color: red; font-weight: bold;">'.strtoupper(gdwft_settings()->info->status).'</span>';
            }
            
            ?>

        </h5>
    </div>
    <div class="d4p-front-title" style="height: auto; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;">
        You can upgrade to GD WebFonts Toolbox Pro <a target="_blank" href="https://plugins.dev4press.com/gd-webfonts-toolbox/">here</a>.
    </div>
    <div class="d4p-front-title" style="height: auto; margin-top: 15px; text-align: center; font-size: 18px; font-weight: bold;">
        <?php _e("Knowledge Base and Support Forums", "gd-webfonts-toolbox-lite"); ?>
        <p style="font-size: 15px; font-weight: normal; margin: 10px 0 0;">
            <?php echo sprintf(__("To learn more about the plugin, check out plugin %s articles and FAQ. To get additional help, you can use %s.", "gd-webfonts-toolbox-lite"),
                '<a target="_blank" href="https://support.dev4press.com/kb/product/gd-webfonts-toolbox/">'.__("knowledge base", "gd-webfonts-toolbox-lite").'</a>',
                '<a target="_blank" href="https://support.dev4press.com/forums/forum/plugins/gd-webfonts-toolbox/">'.__("support forum", "gd-webfonts-toolbox-lite").'</a>'); ?>
        </p>
    </div>
    <div class="d4p-front-dev4press">
        &copy; 2008 - 2017. Dev4Press - <a target="_blank" href="https://www.dev4press.com/">www.dev4press.com</a>
    </div>
</div>
<div class="d4p-front-right">
    <?php

    foreach ($pages as $page => $obj) {
        if ($page == 'front') continue;

        $url = 'admin.php?page=gd-webfonts-toolbox-'.$page;
        $cls = 'd4p-options-panel';

        if ($page == 'typekit' || $page == 'upload' || $page == 'editor') {
            $cls.= ' d4p-panel-pro';
        }

        ?>

            <div class="<?php echo $cls; ?>">
                <i class="fa fa-<?php echo $obj['icon']; ?>"></i>
                <h5><?php echo $obj['title']; ?></h5>
                <div>
                    <a class="button-primary" href="<?php echo $url; ?>"><?php _e("Open", "gd-webfonts-toolbox-lite"); ?></a>
                </div>
            </div>

        <?php
    }

    ?>
</div>

<?php 

include(GDWFT_PATH.'forms/shared/bottom.php');

?>