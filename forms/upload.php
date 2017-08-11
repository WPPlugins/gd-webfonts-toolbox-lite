<?php

include(GDWFT_PATH.'forms/shared/top.php');

?>

<div class="d4p-content-left">
    <div class="d4p-panel-title">
        <i class="fa fa-cloud"></i>
        <h3><?php _e("Fonts Upload", "gd-webfonts-toolbox-lite"); ?></h3>
    </div>
    <div class="d4p-panel-info">
        <?php _e("You can upload and list local @fontface web fonts available for use on the website.", "gd-webfonts-toolbox-lite"); ?>
    </div>
    <div class="d4p-panel-buttons">
        <a href="https://plugins.dev4press.com/gd-webfonts-toolbox/buy/" target="_blank" class="button-primary"><?php _e("Upgrade To Pro", "gd-webfonts-toolbox-lite"); ?></a>

        <table class="d4p-plugin-upgrade-prices">
            <tr>
                <th>Personal (1 site)</th>
                <td>$25.00</td>
            </tr>
            <tr>
                <th>Business (5 sites)</th>
                <td>$50.00</td>
            </tr>
            <tr>
                <th>Developer (50 sites)</th>
                <td>$125.00</td>
            </tr>
        </table>

        Get 15% discount for upgrading to Pro: <strong>GDWFTLITETOPRO</strong>. Coupon is valid for GD WebFonts Toolbox Pro and Dev4Press Club Membership licenses. Licenses are valid for 1 year and include support, documentation and updates.
    </div>
</div>
<div class="d4p-content-right d4p-pro-promotion">
    <h3 style="margin-top: 0;">Pro plugin uploadin @fontface webfonts</h3>
    GD WebFonts Toolbox Pro includes support for uploading and using @fontface fonts. Fonts must be prepared as webfonts and after upload they can be used like any other fonts added through Google Fonts or Adobe Typekit.

    <h3>Pro plugin @fontface upload panel</h3>
    <img src="<?php echo GDWFT_URL; ?>gfx/fontface_panel.png" alt="@fontface Panel" />
</div>


<?php 

include(GDWFT_PATH.'forms/shared/bottom.php');

?>