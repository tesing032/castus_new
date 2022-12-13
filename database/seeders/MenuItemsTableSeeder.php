<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.dashboard'),
            'url'     => '',
            'route'   => 'voyager.dashboard',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-boat',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.media'),
            'url'     => '',
            'route'   => 'voyager.media.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-images',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 5,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.users'),
            'url'     => '',
            'route'   => 'voyager.users.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-person',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 3,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.roles'),
            'url'     => '',
            'route'   => 'voyager.roles.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-lock',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 2,
            ])->save();
        }

        $toolsMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.tools'),
            'url'     => '',
        ]);
        if (!$toolsMenuItem->exists) {
            $toolsMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-tools',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 9,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.menu_builder'),
            'url'     => '',
            'route'   => 'voyager.menus.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-list',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => 10,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.database'),
            'url'     => '',
            'route'   => 'voyager.database.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-data',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => 11,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.compass'),
            'url'     => '',
            'route'   => 'voyager.compass.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-compass',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => 12,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.bread'),
            'url'     => '',
            'route'   => 'voyager.bread.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bread',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => 13,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.settings'),
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 14,
            ])->save();
        }

        $main_menu = Menu::where('name', 'main')->firstOrFail();
        $main_menuItem = MenuItem::firstOrNew([
            'menu_id' => $main_menu->id,
            'title'   => 'Heim',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$main_menuItem->exists) {
            $main_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }
        $main_menuItem = MenuItem::firstOrNew([
            'menu_id' => $main_menu->id,
            'title'   => 'Þjónusta',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$main_menuItem->exists) {
            $main_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 2,
            ])->save();
        }
        $main_menuItem = MenuItem::firstOrNew([
            'menu_id' => $main_menu->id,
            'title'   => 'Mottuhreinsun',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$main_menuItem->exists) {
            $main_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => 15,
                'order'      => 1,
            ])->save();
        }

        $main_menuItem = MenuItem::firstOrNew([
            'menu_id' => $main_menu->id,
            'title'   => 'Skilmálar',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$main_menuItem->exists) {
            $main_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => 15,
                'order'      => 2,
            ])->save();
        }

        $main_menuItem = MenuItem::firstOrNew([
            'menu_id' => $main_menu->id,
            'title'   => 'Teppahreinsun',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$main_menuItem->exists) {
            $main_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => 15,
                'order'      => 3,
            ])->save();
        }

        $main_menuItem = MenuItem::firstOrNew([
            'menu_id' => $main_menu->id,
            'title'   => 'Djúphreinsun',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$main_menuItem->exists) {
            $main_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => 15,
                'order'      => 4,
            ])->save();
        }

        $main_menuItem = MenuItem::firstOrNew([
            'menu_id' => $main_menu->id,
            'title'   => 'Vélaleiga',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$main_menuItem->exists) {
            $main_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 10,
            ])->save();
        }

        $main_menuItem = MenuItem::firstOrNew([
            'menu_id' => $main_menu->id,
            'title'   => 'Um Castus',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$main_menuItem->exists) {
            $main_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 11,
            ])->save();
        }

        $footer_menu = Menu::where('name', 'footer')->firstOrFail();
        $footer_menuItem = MenuItem::firstOrNew([
            'menu_id' => $footer_menu->id,
            'title'   => 'Heim',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$footer_menuItem->exists) {
            $footer_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 12,
            ])->save();
        }

        $footer_menuItem = MenuItem::firstOrNew([
            'menu_id' => $footer_menu->id,
            'title'   => 'Þjónusta',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$footer_menuItem->exists) {
            $footer_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 13,
            ])->save();
        }

        $footer_menuItem = MenuItem::firstOrNew([
            'menu_id' => $footer_menu->id,
            'title'   => 'Mottuhreinsun',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$footer_menuItem->exists) {
            $footer_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 14,
            ])->save();
        }

        $footer_menuItem = MenuItem::firstOrNew([
            'menu_id' => $footer_menu->id,
            'title'   => 'Bílar',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$footer_menuItem->exists) {
            $footer_menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 15,
            ])->save();
        }
    }
}
