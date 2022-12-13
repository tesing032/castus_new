<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Permission;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'pages');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'pages',
                'display_name_singular' => __('voyager::seeders.data_types.page.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.page.plural'),
                'icon'                  => 'voyager-file-text',
                'model_name'            => 'TCG\\Voyager\\Models\\Page',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        //Data Rows
        $pageDataType = DataType::where('slug', 'pages')->firstOrFail();
        $dataRow = $this->dataRow($pageDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'author_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.author'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.title'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'excerpt');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => __('voyager::seeders.data_rows.excerpt'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'body');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => __('voyager::seeders.data_rows.body'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.slug'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'slugify' => [
                        'origin' => 'title',
                    ],
                    'validation' => [
                        'rule'  => 'unique:pages,slug',
                    ],
                ],
                'order' => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.meta_description'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_keywords');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.meta_keywords'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyager::seeders.data_rows.status'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'default' => 'INACTIVE',
                    'options' => [
                        'INACTIVE' => 'INACTIVE',
                        'ACTIVE'   => 'ACTIVE',
                    ],
                ],
                'order' => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 11,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => __('voyager::seeders.data_rows.page_image'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 12,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.pages'),
            'url'     => '',
            'route'   => 'voyager.pages.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-file-text',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 7,
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'home',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title'     => 'Home',
                'excerpt'   => 'home',
                'body'      => '<div class="section_one">
<div class="container">
<div class="section_one_header">
<h2>Castus Teppa og Dj&uacute;hreinsi&thorn;j&oacute;nusta</h2>
</div>
<div class="section_one_inner">
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/Woman-Rolling-Carpet.webp" width="270" height="199"> <span class="img_cnt">MOTTUHREINSUN</span></div>
<div class="section_one_item_cnt">Hreinsa&eth; hj&aacute; okkur
<p>Hreinsum og fr&iacute;skum upp &aacute; all flestar tegundir af heimilismottum</p>
<a class="sk_btn">Sko&eth;a</a></div>
</div>
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/LtriNTuvThb3tihDBCHz.webp" width="270" height="199"> <span class="img_cnt">TEPPAHREINSUN</span></div>
<div class="section_one_item_cnt">Hreinsa&eth; &aacute; sta&eth;num
<p>Fagleg r&aacute;&eth;gj&ouml;f og &thorn;j&oacute;nusta fyrir h&uacute;sf&eacute;l&ouml;g, fyrirt&aelig;ki og einstaklinga</p>
<a class="sk_btn">Sko&eth;a</a></div>
</div>
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/Soft-Couch.webp" width="270" height="199"> <span class="img_cnt">DJ&Uacute;PHREINSUN</span></div>
<div class="section_one_item_cnt">Hreinsa&eth; &aacute; sta&eth;num
<p>S&oacute;far, st&oacute;lar og fleira. Vi&eth; m&aelig;tum &aacute; sta&eth;inn. Fagleg &thorn;j&oacute;nusta</p>
<a class="sk_btn">Sko&eth;a</a></div>
</div>
</div>
<div class="section_one_bottom">
<div class="section_one_bottom_item">
<div class="section_bottom_left"><img src="http://localhost/storage/pages/November2022/husfelag.webp" width="424" height="626"></div>
<div class="section_bottom_right">
<h2>H&uacute;sf&eacute;l&ouml;g</h2>
Stigagangurinn er forstofan a&eth; heimili &thorn;&iacute;nu
<p>Stigagangar eru sv&aelig;&eth;i sem miki&eth; er gangi&eth; um og &thorn;r&aacute;tt fyrir reglubundin &thorn;rif safnast &oacute;hreinindi &iacute; teppin til lengri og skemmri t&iacute;ma. Nau&eth;synlegt er &thorn;v&iacute; a&eth; f&aacute; d&yacute;pri &thorn;rif reglulega.</p>
<p>Castus b&yacute;&eth;ur h&uacute;sf&eacute;l&ouml;gum teppahreinsun &aacute; g&oacute;&eth;um kj&ouml;rum allt &aacute;ri&eth; og bi&eth;t&iacute;mi eftir &thorn;j&oacute;nustunni er almennt stuttur.</p>
<p>&THORN;&ouml;rfin er misj&ouml;fn &aacute; hverjum sta&eth; og taka &thorn;arf tillit til &yacute;missa &thorn;&aacute;tta eins og st&aelig;r&eth;, &iacute;b&uacute;afj&ouml;lda, t&iacute;ma fr&aacute; s&iacute;&eth;ustu hreinsun o.s.frv.</p>
<p>Eftir samtal vi&eth; r&aacute;&eth;gjafa okkar f&aelig;r&eth;u hagst&aelig;tt tilbo&eth; sem sni&eth;i&eth; er a&eth; &thorn;&ouml;rfum &thorn;&iacute;ns h&uacute;sf&eacute;lags.</p>
<a class="hfa_btn">Hafa samband</a></div>
</div>
<div class="section_one_bottom_item section_one_bottom_item_rightimg">
<div class="section_bottom_left"><img class="item_rightimg" src="http://localhost/storage/pages/November2022/At-the-Office.webp" width="430" height="642"></div>
<div class="section_bottom_right">
<h2>Fyrirt&aelig;ki</h2>
Heilbrig&eth;i umfram allt
<p>Teppal&ouml;g&eth; g&oacute;lf ver&eth;a s&iacute; vins&aelig;lli &thorn;egar kemur a&eth; skrifstofu- og atvinnuh&uacute;sn&aelig;&eth;i. Hrein teppi auka loftg&aelig;&eth;i sem skilar s&eacute;r &iacute; betra starfsumhverfi. Svo ekki s&eacute; tala&eth; um heilbrigt &uacute;tlit vinnusta&eth;arins.</p>
<p>Castus b&yacute;&eth;ur fyrirt&aelig;kum &uacute;rvals &thorn;j&oacute;nustu &aacute; hagst&aelig;&eth;u ver&eth;i og vinnum verki&eth; &aacute; &thorn;eim t&iacute;ma sem hentar hverju fyrirt&aelig;ki fyrir sig.</p>
<p>&THORN;a&eth; kostar ekkert a&eth; f&aacute; r&aacute;&eth;gj&ouml;f og ver&eth;hugmynd. T&ouml;kum vel &aacute; m&oacute;ti erindi &thorn;&iacute;nu.</p>
<p>Opi&eth; er fyrir r&aacute;&eth;gj&ouml;f &iacute; s&iacute;ma alla virka daga &aacute; milli klukkan 8:00 og 15:30.</p>
<a class="hfa_btn">Hafa samband</a></div>
</div>
<div class="section_one_bottom_item">
<div class="section_bottom_left"><img src="http://localhost/storage/pages/November2022/Carpet-Vacuum01.webp" width="430" height="642"></div>
<div class="section_bottom_right">
<h2>A&eth;fer&eth;</h2>
Einf&ouml;ld og hef&eth;bundin
<p>Vi&eth; n&yacute;tum okkur einna helst hef&eth;bundna dj&uacute;phreinsia&eth;fer&eth; sem virka&eth; hefur vel &aacute;rum saman.</p>
<p>Bleytt er &iacute; &aacute;kl&aelig;&eth;inu, e&eth;a teppinu eftir &thorn;&ouml;rfum me&eth; hreinu vatni og mildri s&aacute;pu. &THORN;a&eth; fer svo eftir undirlagi hversu lengi s&aacute;publandan &thorn;arf liggja &aacute; &aacute;&eth;ur en h&uacute;n er sogin aftur upp. &THORN;etta er svo gert eins oft og &thorn;urfa &thorn;yki.</p>
<p>&Aacute; erfi&eth;a bletti er notast vi&eth; blettahreinsiefni sem &aacute;kl&aelig;&eth;i&eth; &thorn;olir og unni&eth; &aacute; &thorn;eim me&eth; bursta.</p>
<p>Notkun leysiefna eins og &aacute; ol&iacute;ubletti, tyggj&oacute; og anna&eth; sl&iacute;kt er &aacute;valt samm&aelig;lst um &aacute;&eth;ur en verki&eth; er framkv&aelig;mt.</p>
<a class="hfa_btn">Hafa samband</a></div>
</div>
</div>
</div>
</div>
<div class="section_third">
<div class="container">
<div class="section_third_header">
<h2>um okkur</h2>
</div>
<div class="section_third_inner">
<p>Vi&eth; hj&aacute; Castus s&eacute;rh&aelig;fum okkur &iacute; alhli&eth;a Teppahreinsun, Dj&uacute;phreinsun , Mottuhreinsun og H&uacute;sgagnahreinsun fyrir einstaklinga, fyrirt&aelig;ki og h&uacute;sf&eacute;l&ouml;g. Vi&eth; leitumst &aacute;valt eftir &thorn;v&iacute; a&eth; veita &ouml;rugga og faglega &thorn;j&oacute;nustu &aacute; g&oacute;&eth;u ver&eth;i.</p>
<p class="section_third_prg">Castus er hluti af</p>
<img src="http://localhost/storage/pages/November2022/manar_logo.webp" width="280" height="142"></div>
</div>
</div>',
                'image'            => '',
                'meta_description' => 'home',
                'meta_keywords'    => 'home',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'services',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title'     => 'Services',
                'excerpt'   => 'services',
                'body'      => '<div class="section_one service_secone">
<div class="container">
<div class="section_one_inner">
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/Woman-Rolling-Carpet.webp" width="270" height="199"> <span class="img_cnt">MOTTUHREINSUN</span></div>
<div class="section_one_item_cnt">Hreinsa&eth; hj&aacute; okkur
<p>Hreinsum og fr&iacute;skum upp &aacute; all flestar tegundir af heimilismottum</p>
<a class="sk_btn">Sko&eth;a</a></div>
</div>
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/LtriNTuvThb3tihDBCHz.webp" width="270" height="199"> <span class="img_cnt">TEPPAHREINSUN</span></div>
<div class="section_one_item_cnt">Hreinsa&eth; &aacute; sta&eth;num
<p>Fagleg r&aacute;&eth;gj&ouml;f og &thorn;j&oacute;nusta fyrir h&uacute;sf&eacute;l&ouml;g, fyrirt&aelig;ki og einstaklinga</p>
<a class="sk_btn">Sko&eth;a</a></div>
</div>
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/Soft-Couch.webp" width="270" height="199"> <span class="img_cnt">DJ&Uacute;PHREINSUN</span></div>
<div class="section_one_item_cnt">Hreinsa&eth; &aacute; sta&eth;num
<p>S&oacute;far, st&oacute;lar og fleira. Vi&eth; m&aelig;tum &aacute; sta&eth;inn. Fagleg &thorn;j&oacute;nusta</p>
<a class="sk_btn">Sko&eth;a</a></div>
</div>
</div>
<div class="service_secone_botom">
<div class="service_secone_left">
<div class="secone_left_effect"><a>Efnalaus Hreinsun</a></div>
<p>Margir hafa ofn&aelig;mi e&eth;a &oacute;&thorn;ol gagnvart hinum &yacute;msu hreiniefnum og s&aacute;pum. Heyr&eth;u &iacute; okkur og &oacute;ska&eth;u eftir efnalausri hreinsun</p>
<a class="secone_left_btn">Hafa samband</a></div>
<div class="service_secone_right"><img src="http://localhost/storage/pages/November2022/Sneezing.png" width="661" height="473"></div>
</div>
</div>
</div>
<div class="section_third">
<div class="container">
<div class="section_third_header">
<h2>um okkur</h2>
</div>
<div class="section_third_inner">
<p>Vi&eth; hj&aacute; Castus s&eacute;rh&aelig;fum okkur &iacute; alhli&eth;a Teppahreinsun, Dj&uacute;phreinsun , Mottuhreinsun og H&uacute;sgagnahreinsun fyrir einstaklinga, fyrirt&aelig;ki og h&uacute;sf&eacute;l&ouml;g. Vi&eth; leitumst &aacute;valt eftir &thorn;v&iacute; a&eth; veita &ouml;rugga og faglega &thorn;j&oacute;nustu &aacute; g&oacute;&eth;u ver&eth;i.</p>
<p class="section_third_prg">Castus er hluti af</p>
<img src="http://localhost/storage/pages/November2022/manar_logo.webp" width="280" height="142"></div>
</div>
</div>',
                'image'            => '',
                'meta_description' => 'services',
                'meta_keywords'    => 'services',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'machine-rental',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title'     => 'Machine rental',
                'excerpt'   => 'Machine rental',
                'body'      => '<div class="Machine_rental_secone">
<div class="container">
<div class="Machine_rental_secone_inner">
<div class="Mrental_effect"><a>V&Eacute;LALEIGA</a></div>
<div class="Mrental_content">
<div class="Mrental_content_item">
<div class="Mrental_content_item_left">
<h2>Dj&uacute;p- og teppahreinsiv&eacute;l</h2>
<p>&THORN;&uacute; getur leigt dj&uacute;phreinsi v&eacute;l hj&aacute; okkur sem nota m&aacute; b&aelig;&eth;i &aacute; teppi og h&uacute;sg&ouml;gn.</p>
<div class="Mrental_item_info">
<p><strong>Ver&eth; fyrir s&oacute;larhring: 5.500 kr.</strong></p>
<em>Innifali&eth;: Hreinsiefni &iacute; einn tank (14l) </em>
<p><strong>Ver&eth; fyrir helgarleigu: 9.500 kr.</strong></p>
<em>Innifali&eth;: Hreinsiefni &iacute; tvo tanka (14l) </em></div>
<p>Einnig er h&aelig;gt a&eth; f&aacute; 100ml af fr&aacute;b&aelig;rum blettahreinsi fr&aacute; Ecolab.</p>
<p>Efni&eth; virkar vel &aacute; &ouml;ll &aacute;kl&aelig;&eth;i &aacute;samt &thorn;v&iacute; a&eth; virka vel &aacute; bletti &iacute; fatna&eth;i, s&aelig;ngurf&ouml;tum, d&uacute;kum og &ouml;&eth;ru sl&iacute;ku</p>
<div class="Mrental_item_cntl"><a class="Mrental_btn Mrental_left_btn">N&aacute;nar um v&eacute;lina</a> <a class="Mrental_btn Mrental_right_btn">B&oacute;ka v&eacute;l</a></div>
</div>
<div class="Mrental_content_item_right"><img src="http://localhost/storage/pages/November2022/055589.png" width="438" height="438"></div>
</div>
<div class="Mrental_content_item">
<div class="Mrental_content_item_left">
<h2>Dj&uacute;p- og teppahreinsiv&eacute;l</h2>
<p>&THORN;&uacute; getur leigt dj&uacute;phreinsi v&eacute;l hj&aacute; okkur sem nota m&aacute; b&aelig;&eth;i &aacute; teppi og h&uacute;sg&ouml;gn.</p>
<div class="Mrental_item_info">
<p><strong>Ver&eth; fyrir s&oacute;larhring: 5.500 kr.</strong></p>
<em>Innifali&eth;: Hreinsiefni &iacute; einn tank (14l) </em>
<p><strong>Ver&eth; fyrir helgarleigu: 9.500 kr.</strong></p>
<em>Innifali&eth;: Hreinsiefni &iacute; tvo tanka (14l) </em></div>
<p>Einnig er h&aelig;gt a&eth; f&aacute; 100ml af fr&aacute;b&aelig;rum blettahreinsi fr&aacute; Ecolab.</p>
<p>Efni&eth; virkar vel &aacute; &ouml;ll &aacute;kl&aelig;&eth;i &aacute;samt &thorn;v&iacute; a&eth; virka vel &aacute; bletti &iacute; fatna&eth;i, s&aelig;ngurf&ouml;tum, d&uacute;kum og &ouml;&eth;ru sl&iacute;ku</p>
<div class="Mrental_item_cntl"><a class="Mrental_btn Mrental_left_btn">N&aacute;nar um v&eacute;lina</a> <a class="Mrental_btn Mrental_right_btn">B&oacute;ka v&eacute;l</a></div>
</div>
<div class="Mrental_content_item_right"><img src="http://localhost/storage/pages/November2022/gufuvel.png" width="438" height="438"></div>
</div>
</div>
</div>
</div>
</div>',
                'image'            => '',
                'meta_description' => 'machine-rental',
                'meta_keywords'    => 'machine-rental',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => '',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title'     => 'Umokkur',
                'excerpt'   => 'Umokkur',
                'body'      => '<div class="section_contact">
<div class="container">
<div class="section_contact_inner">
<div class="section_contact_left">
<h2>Ertu me&eth; fyrirspurn?</h2>
<h3>Ekki hika vi&eth; a&eth; hafa samband.</h3>
<p>Vi&eth; erum hluti af M&aacute;nar ehf og s&eacute;rh&aelig;fum okkur &iacute; dj&uacute;phreinsun af &ouml;llu tagi. M&aacute;nar hafa reki&eth; mottuhreinsun og sinnt teppahreinsunum um langa hr&iacute;&eth; me&eth; fr&aacute;b&aelig;rum &aacute;rangri. &Iacute; byrjun &aacute;rs 2021 var &thorn;v&iacute; &aacute;kve&eth;i&eth; a&eth; fella alla dj&uacute;phreinsun fyrirt&aelig;kisin undir s&eacute;rstaka deild og auka enn frekar vi&eth; &thorn;j&oacute;nustuna. Deildin starfar n&uacute; undir &thorn;essu n&yacute;ja merki, Castus.</p>
<div class="contact_info">
<p>Gylfafl&ouml;t 17, 112 Reykjav&iacute;k</p>
<p><a href="mailto:manar@manar.is">manar@manar.is</a></p>
<p><a href="tel:5646005">5646005</a></p>
</div>
</div>
<div class="section_contact_right">
<div class="contact_right_item"><input value="" type="text" class="" required="" placeholder="Nafn" aria-required="true" aria-label="Nafn" aria-invalid="false"></div>
<div class="contact_right_item"><input value="" type="text" class="" required="" placeholder="Email" aria-required="true" aria-label="Email" aria-invalid="false"></div>
<div class="contact_right_item"><input value="" type="text" class="" required="" placeholder="S&iacute;man&uacute;mer" aria-required="true" aria-label="S&iacute;man&uacute;mer" aria-invalid="false"></div>
<div class="contact_right_item"><input value="" type="text" class="" required="" placeholder="Heimilsfang" aria-required="true" aria-label="Heimilsfang" aria-invalid="false"></div>
<div class="contact_right_item contact_item_full"><select id="" class="" aria-required="false">
<option class="Vx877 _3pa83" disabled="disabled" value="">Vinsamlega velji&eth; &thorn;j&oacute;nustu.</option>
<option class="Vx877" value="Almenn r&aacute;&eth;gj&ouml;f" aria-selected="false">Almenn r&aacute;&eth;gj&ouml;f</option>
<option class="Vx877" value="Teppahreinsun" aria-selected="false">Teppahreinsun</option>
<option class="Vx877" value="Dj&uacute;phreinsun &iacute; heimah&uacute;si" aria-selected="false">Dj&uacute;phreinsun &iacute; heimah&uacute;si</option>
<option class="Vx877" value="Mottuhreinsun" aria-selected="false">Mottuhreinsun</option>
</select></div>
<div class="contact_right_item contact_item_full">&nbsp;</div>
<div class="contct-btn"><button type="submit">Senda</button></div>
</div>
</div>
<div class="contact_map">
<h2>Castus Sta&eth;setning</h2>
<img src="http://localhost/storage/pages/November2022/map-contact.png" width="981" height="346"></div>
</div>
</div>',
                'image'            => '',
                'meta_description' => 'umokkur',
                'meta_keywords'    => 'umokkur',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'mottuhreinsun',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title'     => 'Mottuhreinsun',
                'excerpt'   => 'Mottuhreinsun',
                'body'      => '<section class="djuphreinsun mottuhreinsun_page">
<div class="djuphreinsun-slider">
<div class="container">
<div class="main-carousel" data-flickity="{ &quot;freeScroll&quot;: true }">
<div class="carousel-cell">
<div class="slider-img"><img style="width: 980px;" src="http://localhost/storage/pages/November2022/6.png" height="506"></div>
<div class="slider-content">
<h2>Hreinar mottur</h2>
<h3>HREINNA LOFT</h3>
</div>
</div>
<div class="carousel-cell">
<div class="slider-img"><img style="width: 980px;" src="http://localhost/storage/pages/November2022/7.png" height="506"></div>
<div class="slider-content">
<h2>Nota&eth; sem n&yacute;tt</h2>
<h3>allar ger&eth;ir</h3>
</div>
</div>
<div class="carousel-cell">
<div class="slider-img"><img style="width: 980px;" src="http://localhost/storage/pages/November2022/8.png" height="506"></div>
<div class="slider-content">
<h2>Vanda&eth;ur</h2>
<h3>Fr&aacute;gangur</h3>
</div>
</div>
</div>
</div>
<div class="djuphreinsun-first">
<div class="container">
<div class="section_one_inner">
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/Woman-Rolling-Carpet.webp" width="270" height="199"> <span class="img_cnt">&Aacute; sta&eth;num</span></div>
<div class="section_one_item_cnt">4-6 dagar
<p>&THORN;a&eth; er opi&eth; hj&aacute; okkur alla virka .Komdu vi&eth; &iacute; Gylfafl&ouml;tinni og skildu motturnar eftir</p>
<a class="sk_btn">Sj&aacute; n&aacute;nar</a></div>
</div>
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/LtriNTuvThb3tihDBCHz.webp" width="270" height="199"> <span class="img_cnt">S&oacute;tt og skila&eth;</span></div>
<div class="section_one_item_cnt">7-14 dagar
<p>Vi&eth; s&aelig;kjum motturnar til &thorn;&iacute;n, hreinsum &thorn;&aelig;r og skilum svo aftur.</p>
<p><a>Sj&aacute; n&aacute;nar </a></p>
<a class="sk_btn">Panta</a></div>
</div>
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/Soft-Couch.webp" width="270" height="199"> <span class="img_cnt">Ver&eth;skr&aacute;</span></div>
<div class="section_one_item_cnt">2022
<p>Vi&eth; bj&oacute;&eth;um g&oacute;&eth; og sanngj&ouml;rn ver&eth; allt &aacute;ri&eth;. Fagleg &thorn;j&oacute;nusta sem skiptir m&aacute;li</p>
<a class="sk_btn">Sj&aacute; ver&eth;skr&aacute;</a></div>
</div>
</div>
</div>
</div>
<div class="mottuhreinsun_second_section">
<div class="container">
<div class="mottuhreinsun_second_section_inner">
<div class="mottuhreinsun_second_left"><img src="http://localhost/storage/pages/November2022/mottuhreinsun_vacuuming.png" width="533" height="483"></div>
<div class="mottuhreinsun_second_right">
<h4>Gylfafl&ouml;t 17. 112 Grafarvogi</h4>
<h2>&Aacute; sta&eth;num</h2>
<div class="mottuhreinsun_second_right_desc">
<p>M&oacute;ttaka fyrir mottur er opin m&aacute;nudaga til fimmtudaga fr&aacute; klukkan 9:00-16:00 og &aacute; f&ouml;stud&ouml;gum fr&aacute; klukkan 9:00-12:00.</p>
<p>Vi&eth; h&ouml;fum komi&eth; okkur upp flottri a&eth;st&ouml;&eth;u og b&uacute;na&eth;i sem gerir okkur kleift a&eth; vinna verki&eth; &aacute; g&oacute;&eth;um t&iacute;ma.</p>
<p>Vi&eth; notum hef&eth;bundnar hreinsi a&eth;fer&eth;ir, hreint &Iacute;slenskt vatn og mild umhverfisv&aelig;n efni.</p>
<p>Vi&eth; bj&oacute;&eth;um ekki upp &aacute; &thorn;urrhreinsun a&eth; svo st&ouml;ddu. Ef &thorn;&uacute; ert &iacute; vafa hvort hreinsa m&aacute; mottuna &thorn;&iacute;na, ekki hika vi&eth; a&eth; hafa samband vi&eth; okkur fyrst</p>
</div>
</div>
</div>
</div>
</div>
<div class="djuphreinsun-second mottuhreinsun_bg-third">
<div class="container">
<h2>Ver&eth;skr&aacute;</h2>
<div class="djuphreinsun-second-inner">
<div class="djuphreinsun-second-inner-inr">
<div class="djuphreinsun-second-left"><img src="http://localhost/storage/pages/November2022/Woman-Rolling-Carpet.webp" width="270" height="199"></div>
<div class="billar_table_right_content">
<div class="billar_content_ttl">
<h3>Mottuhreinsun</h3>
<p>&THORN;&uacute; reiknarlengd sinnum breidd til &thorn;ess a&eth; f&aacute; fermetra fj&ouml;ldan. Vi&eth; m&aelig;lum allt &aacute; sta&eth;num.</p>
</div>
<div class="billar_table_content_bottom">
<div class="billar_content_bottom-left">
<div class="billar_table_bottom_item">
<h4>1 Fermetri</h4>
Kr. 5.990</div>
<div class="billar_table_bottom_item">
<h4>2 Fermetrar</h4>
Kr. 6.990</div>
<div class="billar_table_bottom_item">
<h4>3 Fermetrar</h4>
Kr. 7.990</div>
<div class="billar_table_bottom_item">
<h4>4 Fermetrar</h4>
Kr. 8.990</div>
<div class="billar_table_bottom_item">
<h4>6 Fermetrar</h4>
Kr. 10.990</div>
<div class="billar_table_bottom_item">
<h4>Fyrir st&aelig;rri mottur</h4>
<a class="billar_tbl_button">B&oacute;ka</a></div>
</div>
</div>
<div class="billar_table_content_bottom_txt"><a>Almennir skilm&aacute;lar - Hreinsun</a>
<p>Sendingagjald fyrir s&oacute;tt og skila&eth; er Kr. 3.500 en fellur ni&eth;ur ef hreinsun fer yfir kr. 15.000</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mottuhreinsun_second_section mottuhreinsun_second_revert">
<div class="container">
<div class="mottuhreinsun_second_section_inner">
<div class="mottuhreinsun_second_left"><img src="http://localhost/storage/pages/November2022/mottuhreinsun_vacuuming.png" width="533" height="483"></div>
<div class="mottuhreinsun_second_right">
<h4>Gylfafl&ouml;t 17. 112 Grafarvogi</h4>
<h2>&Aacute; sta&eth;num</h2>
<div class="mottuhreinsun_second_right_desc">
<p>M&oacute;ttaka fyrir mottur er opin m&aacute;nudaga til fimmtudaga fr&aacute; klukkan 9:00-16:00 og &aacute; f&ouml;stud&ouml;gum fr&aacute; klukkan 9:00-12:00.</p>
<p>Vi&eth; h&ouml;fum komi&eth; okkur upp flottri a&eth;st&ouml;&eth;u og b&uacute;na&eth;i sem gerir okkur kleift a&eth; vinna verki&eth; &aacute; g&oacute;&eth;um t&iacute;ma.</p>
<p>Vi&eth; notum hef&eth;bundnar hreinsi a&eth;fer&eth;ir, hreint &Iacute;slenskt vatn og mild umhverfisv&aelig;n efni.</p>
<p>Vi&eth; bj&oacute;&eth;um ekki upp &aacute; &thorn;urrhreinsun a&eth; svo st&ouml;ddu. Ef &thorn;&uacute; ert &iacute; vafa hvort hreinsa m&aacute; mottuna &thorn;&iacute;na, ekki hika vi&eth; a&eth; hafa samband vi&eth; okkur fyrst</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>',
                'image'            => '',
                'meta_description' => 'mottuhreinsun',
                'meta_keywords'    => 'mottuhreinsun',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'skilmalar',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title'     => 'Skilmalar',
                'excerpt'   => 'Skilmalar',
                'body'      => '',
                'image'            => '',
                'meta_description' => 'skilmalar',
                'meta_keywords'    => 'skilmalar',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'teppahreinsun',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title'     => 'Teppahreinsun',
                'excerpt'   => 'Teppahreinsun',
                'body'      => '<div class="section_one teppahreinsun">
<div class="container">
<div class="section_one_bottom">
<div class="section_one_bottom_item">
<div class="section_bottom_left"><img src="http://localhost/storage/pages/November2022/husfelag.webp" width="424" height="626"></div>
<div class="section_bottom_right">
<h2>H&uacute;sf&eacute;l&ouml;g</h2>
Stigagangurinn er forstofan a&eth; heimili &thorn;&iacute;nu
<p>Stigagangar eru sv&aelig;&eth;i sem miki&eth; er gangi&eth; um og &thorn;r&aacute;tt fyrir reglubundin &thorn;rif safnast &oacute;hreinindi &iacute; teppin til lengri og skemmri t&iacute;ma. Nau&eth;synlegt er &thorn;v&iacute; a&eth; f&aacute; d&yacute;pri &thorn;rif reglulega.</p>
<p>Castus b&yacute;&eth;ur h&uacute;sf&eacute;l&ouml;gum teppahreinsun &aacute; g&oacute;&eth;um kj&ouml;rum allt &aacute;ri&eth; og bi&eth;t&iacute;mi eftir &thorn;j&oacute;nustunni er almennt stuttur.</p>
<p>&THORN;&ouml;rfin er misj&ouml;fn &aacute; hverjum sta&eth; og taka &thorn;arf tillit til &yacute;missa &thorn;&aacute;tta eins og st&aelig;r&eth;, &iacute;b&uacute;afj&ouml;lda, t&iacute;ma fr&aacute; s&iacute;&eth;ustu hreinsun o.s.frv.</p>
<p>Eftir samtal vi&eth; r&aacute;&eth;gjafa okkar f&aelig;r&eth;u hagst&aelig;tt tilbo&eth; sem sni&eth;i&eth; er a&eth; &thorn;&ouml;rfum &thorn;&iacute;ns h&uacute;sf&eacute;lags.</p>
<a class="hfa_btn">Hafa samband</a></div>
</div>
<div class="section_one_bottom_item section_one_bottom_item_rightimg">
<div class="section_bottom_left"><img class="item_rightimg" src="http://localhost/storage/pages/November2022/At-the-Office.webp" width="430" height="642"></div>
<div class="section_bottom_right">
<h2>Fyrirt&aelig;ki</h2>
Heilbrig&eth;i umfram allt
<p>Teppal&ouml;g&eth; g&oacute;lf ver&eth;a s&iacute; vins&aelig;lli &thorn;egar kemur a&eth; skrifstofu- og atvinnuh&uacute;sn&aelig;&eth;i. Hrein teppi auka loftg&aelig;&eth;i sem skilar s&eacute;r &iacute; betra starfsumhverfi. Svo ekki s&eacute; tala&eth; um heilbrigt &uacute;tlit vinnusta&eth;arins.</p>
<p>Castus b&yacute;&eth;ur fyrirt&aelig;kum &uacute;rvals &thorn;j&oacute;nustu &aacute; hagst&aelig;&eth;u ver&eth;i og vinnum verki&eth; &aacute; &thorn;eim t&iacute;ma sem hentar hverju fyrirt&aelig;ki fyrir sig.</p>
<p>&THORN;a&eth; kostar ekkert a&eth; f&aacute; r&aacute;&eth;gj&ouml;f og ver&eth;hugmynd. T&ouml;kum vel &aacute; m&oacute;ti erindi &thorn;&iacute;nu.</p>
<p>Opi&eth; er fyrir r&aacute;&eth;gj&ouml;f &iacute; s&iacute;ma alla virka daga &aacute; milli klukkan 8:00 og 15:30.</p>
<a class="hfa_btn">Hafa samband</a></div>
</div>
<div class="section_one_bottom_item">
<div class="section_bottom_left"><img src="http://localhost/storage/pages/November2022/Carpet-Vacuum01.webp" width="430" height="642"></div>
<div class="section_bottom_right">
<h2>A&eth;fer&eth;</h2>
Einf&ouml;ld og hef&eth;bundin
<p>Vi&eth; n&yacute;tum okkur einna helst hef&eth;bundna dj&uacute;phreinsia&eth;fer&eth; sem virka&eth; hefur vel &aacute;rum saman.</p>
<p>Bleytt er &iacute; &aacute;kl&aelig;&eth;inu, e&eth;a teppinu eftir &thorn;&ouml;rfum me&eth; hreinu vatni og mildri s&aacute;pu. &THORN;a&eth; fer svo eftir undirlagi hversu lengi s&aacute;publandan &thorn;arf liggja &aacute; &aacute;&eth;ur en h&uacute;n er sogin aftur upp. &THORN;etta er svo gert eins oft og &thorn;urfa &thorn;yki.</p>
<p>&Aacute; erfi&eth;a bletti er notast vi&eth; blettahreinsiefni sem &aacute;kl&aelig;&eth;i&eth; &thorn;olir og unni&eth; &aacute; &thorn;eim me&eth; bursta.</p>
<p>Notkun leysiefna eins og &aacute; ol&iacute;ubletti, tyggj&oacute; og anna&eth; sl&iacute;kt er &aacute;valt samm&aelig;lst um &aacute;&eth;ur en verki&eth; er framkv&aelig;mt.</p>
<a class="hfa_btn">Hafa samband</a></div>
</div>
</div>
</div>
</div>',
                'image'            => '',
                'meta_description' => 'teppahreinsun',
                'meta_keywords'    => 'teppahreinsun',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'djuphreinsun',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title'     => 'Djuphreinsun',
                'excerpt'   => 'Djuphreinsun',
                'body'      => '<section class="djuphreinsun">
<div class="djuphreinsun-slider">
<div class="container">
<div class="main-carousel" data-flickity="{ &quot;freeScroll&quot;: true }">
<div class="carousel-cell">
<div class="slider-img"><img style="width: 980px;" src="http://localhost/storage/pages/November2022/6.png" height="506"></div>
<div class="slider-content">
<h2>Hreinar mottur</h2>
<h3>HREINNA LOFT</h3>
</div>
</div>
<div class="carousel-cell">
<div class="slider-img"><img style="width: 980px;" src="http://localhost/storage/pages/November2022/7.png" height="506"></div>
<div class="slider-content">
<h2>Nota&eth; sem n&yacute;tt</h2>
<h3>allar ger&eth;ir</h3>
</div>
</div>
<div class="carousel-cell">
<div class="slider-img"><img style="width: 980px;" src="http://localhost/storage/pages/November2022/8.png" height="506"></div>
<div class="slider-content">
<h2>Vanda&eth;ur</h2>
<h3>Fr&aacute;gangur</h3>
</div>
</div>
</div>
</div>
</div>
<div class="djuphreinsun-first">
<div class="container">
<div class="section_one_inner">
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/Woman-Rolling-Carpet.webp" width="270" height="199"> <span class="img_cnt">St&oacute;lar &amp; S&oacute;far</span></div>
<div class="section_one_item_cnt">Fr&aacute; 7.000
<p>Hreinsum og fr&iacute;skum upp &aacute; all flestar tegundir af heimilismottum</p>
<a class="sk_btn">B&oacute;ka</a></div>
</div>
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/LtriNTuvThb3tihDBCHz.webp" width="270" height="199"> <span class="img_cnt">Teppi &amp; S&eacute;rverk</span></div>
<div class="section_one_item_cnt">Tilbo&eth;
<p>Fagleg r&aacute;&eth;gj&ouml;f og &thorn;j&oacute;nusta fyrir h&uacute;sf&eacute;l&ouml;g, fyrirt&aelig;ki og einstaklinga</p>
<a class="sk_btn">F&aacute; r&aacute;&eth;gj&ouml;f</a></div>
</div>
<div class="section_one_item">
<div class="section_one_item_img"><img src="http://localhost/storage/pages/November2022/Soft-Couch.webp" width="270" height="199"> <span class="img_cnt">DJ&Uacute;PHREINSUN</span></div>
<div class="section_one_item_cnt">R&aacute;&eth;gj&ouml;f
<p>S&oacute;far, st&oacute;lar og fleira. Vi&eth; m&aelig;tum &aacute; sta&eth;inn. Fagleg &thorn;j&oacute;nusta</p>
<a class="sk_btn">F&aacute; r&aacute;&eth;gj&ouml;f</a></div>
</div>
</div>
<div class="sk_btn_Call">
<div class="sk_btn_Call-iner"><a href="#">&THORN;&eacute;r er alltaf vekomi&eth; a&eth; hringja til okkar &iacute; s&iacute;ma 564-6005</a></div>
</div>
</div>
</div>
<div class="djuphreinsun-second">
<div class="container">
<h2>Ver&eth;skr&aacute;</h2>
<div class="djuphreinsun-second-inner">
<div class="djuphreinsun-second-inner-inr">
<div class="djuphreinsun-second-left"><img src="http://localhost/storage/pages/November2022/Woman-Rolling-Carpet.webp" width="270" height="199"></div>
<div class="djuphreinsun-second-right">
<h3>S&oacute;far</h3>
<p>Dj&uacute;phreinsun &aacute; flestum tengundum af &aacute;kl&aelig;&eth;um.</p>
<ul>
<li>Tveggja s&aelig;ta</li>
<li>&THORN;riggja s&aelig;ta</li>
<li>L&iacute;till horn e&eth;a Tungus&oacute;fi</li>
<li>St&oacute;r horn e&eth;a Tungus&oacute;fi</li>
</ul>
<div class="djuphreinsun-second-par">
<p>Kr. 10.000</p>
<p>Kr. 12.000</p>
<p>Kr. 14.000</p>
<p>Kr. 16.000</p>
</div>
<p class="grunngjald">Eitt 3.500 kr grunngjald b&aelig;tist ofan &aacute; hverja heims&oacute;kn</p>
<div class="last-p">
<p>Ef &oacute;ska&eth; er eftir a&eth; bakhli&eth; s&oacute;fa s&eacute; hreinsu&eth; og/e&eth;a lausar pullur &aacute; &ouml;llum hli&eth;um leggst 25% ofan &aacute; uppgefi&eth; ver&eth;<br>Athugi&eth; a&eth; &oacute;ska &thorn;arf s&eacute;rstaklega eftir hreinsun &aacute; le&eth;ri</p>
<a href="#">B&oacute;ka</a></div>
</div>
</div>
</div>
<div class="djuphreinsun-second-inner">
<div class="djuphreinsun-second-inner-inr">
<div class="djuphreinsun-second-left"><img src="http://localhost/storage/pages/November2022/Woman-Rolling-Carpet.webp" width="270" height="199"></div>
<div class="djuphreinsun-second-right">
<h3>St&oacute;lar &amp; sessur</h3>
<p>Dj&uacute;phreinsun &aacute; flestum tengundum af &aacute;kl&aelig;&eth;um.</p>
<ul>
<li>Sessur</li>
<li>Bor&eth;stofu-st&oacute;lar</li>
<li>H&aelig;gindast&oacute;ll l&iacute;till</li>
<li>H&aelig;gindast&oacute;ll st&oacute;r</li>
</ul>
<div class="djuphreinsun-second-par">
<p>Kr. 2.000</p>
<p>Kr. 3.000</p>
<p>Kr. 7.000</p>
<p>Kr. 11.000</p>
</div>
<p class="grunngjald">Eitt 3.500 kr grunngjald b&aelig;tist ofan &aacute; hverja heims&oacute;kn</p>
<div class="last-p">
<p>L&aacute;gmarks b&oacute;kun &aacute; bor&eth;stofust&oacute;lum og sessum eru 4 stk <br>Gert er r&aacute;&eth; fyrir a&eth; bor&eth;stofust&oacute;lar hafi b&aelig;&eth;i sessur og bak<br>F&iacute;n l&iacute;na getur veri&eth; milli l&iacute;tils e&eth;a st&oacute;rs h&aelig;gindast&oacute;ls, me&eth; st&oacute;rum h&aelig;gindast&oacute;l gert r&aacute;&eth; fyrir h&aacute;u baki og f&oacute;tskemli<br>Athugi&eth; a&eth; &oacute;ska &thorn;arf s&eacute;rstaklega eftir hreinsun &aacute; le&eth;ri</p>
<a href="#">B&oacute;ka</a></div>
</div>
</div>
</div>
</div>
</div>
</section>',
                'image'            => '',
                'meta_description' => 'djuphreinsun',
                'meta_keywords'    => 'djuphreinsun',
                'status'           => 'ACTIVE',
            ])->save();
        }
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
