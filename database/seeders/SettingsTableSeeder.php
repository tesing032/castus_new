<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $setting = $this->findSetting('site.title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.site.title'),
                'value'        => __('voyager::seeders.settings.site.title'),
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Site',
            ])->save();
        }

        $setting = $this->findSetting('site.description');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.site.description'),
                'value'        => __('voyager::seeders.settings.site.description'),
                'details'      => '',
                'type'         => 'text',
                'order'        => 2,
                'group'        => 'Site',
            ])->save();
        }

        $setting = $this->findSetting('site.logo');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.site.logo'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 3,
                'group'        => 'Site',
            ])->save();
        }

        $setting = $this->findSetting('site.google_analytics_tracking_id');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.site.google_analytics_tracking_id'),
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 4,
                'group'        => 'Site',
            ])->save();
        }

        $setting = $this->findSetting('admin.bg_image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.background_image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 5,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.title');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.title'),
                'value'        => 'Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.description');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.description'),
                'value'        => __('voyager::seeders.settings.admin.description_value'),
                'details'      => '',
                'type'         => 'text',
                'order'        => 2,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.loader');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.loader'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 3,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.icon_image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.icon_image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 4,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('admin.google_analytics_client_id');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('voyager::seeders.settings.admin.google_analytics_client_id'),
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Admin',
            ])->save();
        }

        $setting = $this->findSetting('site.header_image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'header_image',
                'value'        => 'settings/November2022/JsBNLJW3G3wq1eKXy9Lt.png',
                'details'      => '',
                'type'         => 'image',
                'order'        => 6,
                'group'        => 'Site',
            ])->save();
        }

        $setting = $this->findSetting('site.footer-second');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'footer-second',
                'value'        => '<div class="footer_item">
<h3>A&eth;sto&eth;</h3>
<ul>
<li><a href="mailto:manar@manar.is">manar@manar.is</a></li>
<li><a href="tel:5646005">5646005</a></li>
</ul>
</div>',
                'details'      => '',
                'type'         => 'rich_text_box',
                'order'        => 7,
                'group'        => 'Site',
            ])->save();
        }

        $setting = $this->findSetting('site.footer-third');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'footer-third',
                'value'        => '<div class="footer_item">
                <h3>Starfsst&ouml;&eth;</h3>
                <ul>
                <li>
                <p>Gylfafl&ouml;t 17 112 Reykjav&iacute;k</p>
                </li>
                <li>
                <p>Opnunart&iacute;mi <br>m&aacute;n-fim 9:00 - 16:00<br>f&ouml;s 9:00 - 12:00</p>
                </li>
                </ul>
                </div>',
                'details'      => '',
                'type'         => 'rich_text_box 	',
                'order'        => 8,
                'group'        => 'Site',
            ])->save();
        }

    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
