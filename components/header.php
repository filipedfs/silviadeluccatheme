<?php
require_once(trailingslashit(get_template_directory()) . '/variables.php');
?>
<header class="silvia-header">
    <?php if (!is_front_page()) { ?>
      <h1>
        <a class="header-text-logo" href="<?= site_url() ?>">
          Silvia DE LUCCA
        </a>
      </h1>
    <?php } else { ?>
      <div></div>
    <?php } ?>
  <nav class="silvia-nav">
    <label class="mobile-menu desktop" for="mobile-menu">
      <span style="display: flex;flex-direction: row;align-items: center">
        <span style="color:#BBB">Menu</span>&nbsp;<i class="bi bi-list"></i>
      </span>
    </label>
    <input class="mobile-menu" type="checkbox" id="mobile-menu" />
      <?php
      $locations = get_nav_menu_locations();
      $menu = get_term($locations["main-menu"], 'nav_menu');
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      if (true) {
          ?>
        <div>
          <!--            ====================================================================   -->
          <!-- Language Switcher -->
          <div class="top_bar_right">
            <div class="top_bar_right_wrapper switcher">
              <div class="wpml-languages enabled pt_BR">
                <!-- Idioma selecionado -->
                <div class="selected">
                  <a class="active tooltip" href="#" onclick="return false;">
                    <img
                        src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                        alt=""
                        width="18"
                        height="12"
                    />
                    <i class="icon-down-open-mini"></i>
                  </a>
                </div>
                <ul class="wpml-lang-dropdown">
                  <li class="auto_portuguese">
                    <a
                        href="#"
                        onclick="doGTranslate('pt|pt');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
                        title="Português"
                        class="nturl selected"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          height="12"
                          width="18"
                          alt="pt"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="auto_german">
                    <a
                        href="#"
                        onclick="doGTranslate('pt|de');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
                        title="Deutsch"
                        class="nturl selected"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/de.png"
                          height="12"
                          width="18"
                          alt="de"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <!-- Inglês -->
                  <li class="english_home">
                    <a
                        href="http://silviadelucca.art.br/en/home/"
                        onclick="doGTranslate('pt|en');"
                        title="English"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="english_articles">
                    <a
                        href="http://silviadelucca.art.br/en/articles/"
                        onclick="doGTranslate('pt|en');"
                        title="English"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="english_profile">
                    <a
                        href="http://silviadelucca.art.br/en/profile/"
                        title="English"
                        onclick="doGTranslate('pt|en');"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="english_biography">
                    <a
                        href="http://silviadelucca.art.br/en/profile/"
                        onclick="doGTranslate('pt|en');"
                        title="English"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="english_music_catalog">
                    <a
                        href="http://silviadelucca.art.br/en/music-catalog/"
                        onclick="doGTranslate('pt|en');"
                        title="English"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="english_publications">
                    <a
                        href="http://silviadelucca.art.br/en/publications/"
                        onclick="doGTranslate('pt|en');"
                        title="English"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                    </a>
                  </li>
                  <li class="english_audios">
                    <a
                        href="http://silviadelucca.art.br/en/audios/"
                        onclick="doGTranslate('pt|en');"
                        title="English"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="english_videos">
                    <a
                        href="http://silviadelucca.art.br/en/videos/"
                        onclick="doGTranslate('pt|en');"
                        title="English"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="english_photos">
                    <a
                        href="http://silviadelucca.art.br/en/photos/"
                        onclick="doGTranslate('pt|en');"
                        title="English"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="english_contact">
                    <a
                        href="http://silviadelucca.art.br/en/contact/"
                        onclick="doGTranslate('pt|en');"
                        title="English"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <!-- Spanish -->
                  <li class="auto_spanish">
                    <a
                        href="#"
                        onclick="doGTranslate('pt|es');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
                        title="Español"
                        class="nturl selected"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/es.png"
                          height="12"
                          width="18"
                          alt="pt"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="auto_french">
                    <a
                        href="#"
                        onclick="doGTranslate('pt|fr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
                        title="Français"
                        class="nturl selected"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/fr.png"
                          height="12"
                          width="18"
                          alt="fr"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="auto_italian">
                    <a
                        href="#"
                        onclick="doGTranslate('pt|it');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
                        title="Italiano"
                        class="nturl selected"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/it.png"
                          height="12"
                          width="18"
                          alt="pt"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="wpml-languages enabled en_US">
                <!-- Idioma selecionado -->
                <div class="selected">
                  <a class="active tooltip" href="#" onclick="return false;">
                    <img
                        src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                        alt=""
                        width="18"
                        height="12"
                    />
                    <i class="icon-down-open-mini"></i>
                  </a>
                </div>
                <ul class="wpml-lang-dropdown">
                  <li class="portuguese_home">
                    <a
                        href="http://silviadelucca.art.br"
                        onclick="doGTranslate('en|pt');"
                        title="Português"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="portuguese_artigos">
                    <a
                        href="http://silviadelucca.art.br/artigos/"
                        onclick="doGTranslate('en|pt');"
                        title="Português"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="portuguese_apresentacao">
                    <a
                        href="http://silviadelucca.art.br/apresentacao/"
                        onclick="doGTranslate('en|pt');"
                        title="Português"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="portuguese_curriculum">
                    <a
                        href="http://silviadelucca.art.br/curriculum/"
                        onclick="doGTranslate('en|pt');"
                        title="Português"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="portuguese_catalogo_musical">
                    <a
                        href="http://silviadelucca.art.br/catalogo-musical/"
                        onclick="doGTranslate('en|pt');"
                        title="Português"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="portuguese_publicacoes">
                    <a
                        href="http://silviadelucca.art.br/publicacoes/"
                        onclick="doGTranslate('en|pt');"
                        title="Português"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="portuguese_audios">
                    <a
                        href="http://silviadelucca.art.br/audios/"
                        onclick="doGTranslate('en|pt');"
                        title="Português"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="portuguese_videos">
                    <a
                        href="http://silviadelucca.art.br/videos/"
                        title="Português"
                        onclick="doGTranslate('en|pt');"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="portuguese_fotos">
                    <a
                        href="http://silviadelucca.art.br/fotos/"
                        onclick="doGTranslate('en|pt');"
                        title="Português"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="portuguese_contato">
                    <a
                        href="http://silviadelucca.art.br/contato/"
                        onclick="doGTranslate('en|pt');"
                        title="Português"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/br.png"
                          alt=""
                          width="18"
                          height="12"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="auto_german">
                    <a
                        href="#"
                        onclick="doGTranslate('en|de');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
                        title="Deutsch"
                        class="nturl selected"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/de.png"
                          height="12"
                          width="18"
                          alt="de"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <!-- Inglês -->
                  <li class="auto_english">
                    <a
                        href="#"
                        onclick="doGTranslate('en|en');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
                        title="English"
                        class="nturl selected"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/gb.png"
                          height="12"
                          width="18"
                          alt="en"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="auto_spanish">
                    <a
                        href="#"
                        onclick="doGTranslate('en|es');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
                        title="Español"
                        class="nturl selected"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/es.png"
                          height="12"
                          width="18"
                          alt="pt"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="auto_french">
                    <a
                        href="#"
                        onclick="doGTranslate('en|fr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
                        title="Français"
                        class="nturl selected"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/fr.png"
                          height="12"
                          width="18"
                          alt="fr"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                  <li class="auto_italian">
                    <a
                        href="#"
                        onclick="doGTranslate('en|it');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
                        title="Italiano"
                        class="nturl selected"
                    >
                      <img
                          src="http://silviadelucca.art.br/wp-content/plugins/polylang/flags/it.png"
                          height="12"
                          width="18"
                          alt="pt"
                      />
                      <i class="icon-down-open-mini"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <script>
            jQuery('html').addClass(jQuery('html').attr('lang'));
            jQuery(window).on('load', function () {
              if (
                jQuery('body').hasClass('category-34') &&
                (GTranslateGetCurrentLang() == 'en' || GTranslateGetCurrentLang() == null)
              ) {
                doGTranslate('pt|en');
              }
            });
          </script>
          <style>
            .top_bar_right {
              display: none;
            }

            html.en-US .wpml-languages.pt_BR,
            html.pt-BR .wpml-languages.en_US {
              display: none !important;
            }

            .wpml-lang-dropdown .english_home,
            .wpml-lang-dropdown .english_profile,
            .wpml-lang-dropdown .english_biography,
            .wpml-lang-dropdown .english_music_catalog,
            .wpml-lang-dropdown .english_publications,
            .wpml-lang-dropdown .english_articles,
            .wpml-lang-dropdown .english_audios,
            .wpml-lang-dropdown .english_videos,
            .wpml-lang-dropdown .english_photos,
            .wpml-lang-dropdown .english_contact,
            .wpml-lang-dropdown .portuguese_home,
            .wpml-lang-dropdown .portuguese_apresentacao,
            .wpml-lang-dropdown .portuguese_curriculum,
            .wpml-lang-dropdown .portuguese_catalogo_musical,
            .wpml-lang-dropdown .portuguese_publicacoes,
            .wpml-lang-dropdown .portuguese_audios,
            .wpml-lang-dropdown .portuguese_videos,
            .wpml-lang-dropdown .portuguese_fotos,
            .wpml-lang-dropdown .portuguese_artigos,
            .wpml-lang-dropdown .portuguese_contato {
              display: none;
            }

            /* Se HOME */
            body.home .wpml-lang-dropdown .english_home,
            body.page-id-2481 .wpml-lang-dropdown .english_profile,
            body.page-id-2611 .wpml-lang-dropdown .english_biography,
            body.page-id-2435 .wpml-lang-dropdown .english_music_catalog,
            body.page-id-2592 .wpml-lang-dropdown .english_publications,
            body.page-id-2464 .wpml-lang-dropdown .english_articles,
            body.page-id-2441 .wpml-lang-dropdown .english_audios,
            body.page-id-2449 .wpml-lang-dropdown .english_videos,
            body.page-id-2356 .wpml-lang-dropdown .english_photos,
            body.page-id-2480 .wpml-lang-dropdown .english_contact,
            body.home .wpml-lang-dropdown .portuguese_home,
            body.page-id-2818 .wpml-lang-dropdown .portuguese_apresentacao,
            body.page-id-2794 .wpml-lang-dropdown .portuguese_curriculum,
            body.page-id-2877 .wpml-lang-dropdown .portuguese_publicacoes,
            body.page-id-2441 .wpml-lang-dropdown .portuguese_audios,
            body.page-id-2356 .wpml-lang-dropdown .portuguese_fotos,
            body.page-id-2449 .wpml-lang-dropdown .portuguese_videos,
            body.category-34 .wpml-lang-dropdown .portuguese_artigos,
            body.page-id-3023 .wpml-lang-dropdown .portuguese_contato,
            body.page-id-2874 .wpml-lang-dropdown .portuguese_catalogo_musical {
              display: list-item;
            }
          </style>
          <script type="text/javascript">
            jQuery('.switcher .selected').click(function () {
              jQuery('.switcher .option a img').each(function () {
                if (!jQuery(this)[0].hasAttribute('src'))
                  jQuery(this).attr('src', jQuery(this).attr('data-gt-lazy-src'));
              });
              if (!jQuery('.switcher .option').is(':visible')) {
                jQuery('.switcher .option')
                  .stop(true, true)
                  .delay(100)
                  .slideDown(500);
                jQuery('.switcher .selected a').toggleClass('open');
              }
            });
            jQuery('.switcher .option').bind('mousewheel', function (e) {
              var options = jQuery('.switcher .option');
              if (options.is(':visible'))
                options.scrollTop(options.scrollTop() - e.originalEvent.wheelDelta);
              return false;
            });
            jQuery('body')
              .not('.switcher')
              .click(function (e) {
                if (
                  jQuery('.switcher .option').is(':visible') &&
                  e.target != jQuery('.switcher .option').get(0)
                ) {
                  jQuery('.switcher .option')
                    .stop(true, true)
                    .delay(100)
                    .slideUp(500);
                  jQuery('.switcher .selected a').toggleClass('open');
                }
              });
          </script>
          <style type="text/css">
            div.top_bar_left nav#menu ul li div.top_bar_right {
              /* display: none; */
            }

            #Top_bar .top_bar_left {
              float: right;
            }

            #Header #Top_bar .container .column.one > .top_bar_right {
              display: none;
            }

            #Top_bar .menu > li:nth-last-child(2) > a span:not(.description) {
              border: none;
            }

            .top_bar_left.clearfix {
              width: auto !important;
              /*width: calc(100% - 65px) !important;*/
            }

            .top_bar_left #menu ul li .top_bar_right div div ul li {
              width: inherit;
            }

            .top_bar_left #menu ul li .top_bar_right div div ul li i {
              display: none;
            }

            #goog-gt-tt {
              display: none !important;
            }

            .goog-te-banner-frame {
              display: none !important;
            }

            .goog-te-menu-value:hover {
              text-decoration: none !important;
            }

            .goog-text-highlight {
              background-color: transparent !important;
              box-shadow: none !important;
            }

            body {
              top: 0 !important;
            }

            #google_translate_element2 {
              display: none !important;
            }
          </style>
          <div id="google_translate_element2"></div>
          <script type="text/javascript">
            function googleTranslateElementInit2() {
              new google.translate.TranslateElement(
                {
                  pageLanguage: 'pt',
                  autoDisplay: false,
                },
                'google_translate_element2',
              );
            }
          </script>
          <script
              type="text/javascript"
              src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"
          ></script>
          <script type="text/javascript">
            function GTranslateGetCurrentLang() {
              var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
              return keyValue ? keyValue[2].split('/')[2] : null;
            }

            function GTranslateFireEvent(element, event) {
              try {
                if (document.createEventObject) {
                  var evt = document.createEventObject();
                  element.fireEvent('on' + event, evt);
                } else {
                  var evt = document.createEvent('HTMLEvents');
                  evt.initEvent(event, true, true);
                  element.dispatchEvent(evt);
                }
              } catch (e) {
              }
            }

            function doGTranslate(lang_pair) {
              if (lang_pair.value) lang_pair = lang_pair.value;
              if (lang_pair == '') return;
              var lang = lang_pair.split('|')[1];
              if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])
                return;
              var teCombo;
              var sel = document.getElementsByTagName('select');
              for (var i = 0; i < sel.length; i++)
                if (/goog-te-combo/.test(sel[i].className)) {
                  teCombo = sel[i];
                  break;
                }
              if (
                document.getElementById('google_translate_element2') == null ||
                document.getElementById('google_translate_element2').innerHTML.length ==
                0 ||
                teCombo.length == 0 ||
                teCombo.innerHTML.length == 0
              ) {
                setTimeout(function () {
                  doGTranslate(lang_pair);
                }, 500);
              } else {
                teCombo.value = lang;
                GTranslateFireEvent(teCombo, 'change');
                GTranslateFireEvent(teCombo, 'change');
              }
            }

            if (GTranslateGetCurrentLang() != null)
              jQuery(document).ready(function () {
                var lang_html = jQuery('div.switcher div.option')
                  .find('img[alt="' + GTranslateGetCurrentLang() + '"]')
                  .parent()
                  .html();
                if (typeof lang_html != 'undefined')
                  jQuery('div.switcher div.selected a').html(
                    lang_html.replace('data-gt-lazy-', ''),
                  );
              });
          </script>
          <!--            ====================================================================   -->
        </div>
          <?php
      }

      ?>
    <ul>
        <li class="menu-close">
            <label class="mobile-menu" for="mobile-menu">
      <span style="display: flex;flex-direction: row;align-items: center">
        <span style="color:#BBB">X</span>
      </span>
            </label>
        </li>
        <?php
        foreach ($menu_items as $menu_item) {
            if ($menu_item->menu_item_parent == 0) {
                $parent = $menu_item->ID;
                $menu_array = array();
                ?>
              <li>
                <a href="<?= $menu_item->url; ?>" class="nav-link"><?= $menu_item->title; ?></a>
                  <?php
                  foreach ($menu_items as $submenu) {
                      if ($submenu->menu_item_parent == $parent) { ?>
                        <!--                          <li>-->
                        <!--                            <a href="--><?//= $submenu->url; ?><!--" class="nav-link">--><?//= $submenu->title; ?><!--</a>-->
                        <!--                          </li>-->
                      <?php }
                  }
                  ?>
              </li>
                <?php
            }
        }
        ?>
      <li class="select-language-mobile">
        <div class="container-select-language-mobile">
          <p>Selecione: </p>
          <div class="mobile-flags">
            <a
                href="<?= get_site_url(); ?>"
                onclick="doGTranslate('en|pt')"
                title="Português"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/br.png" />
            </a>
            <a
                href="#"
                onclick="doGTranslate('en|de');jQuery('span.language-switcher').html(jQuery(this).html());return false;"
                title="Deutsch"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/de.png" />
            </a>
            <a
                href="<?= get_site_url(); ?>/en/home/"
                onclick="doGTranslate('pt|en')"
                title="English"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/gb.png" />
            </a>
            <a
                href="#"
                onclick="doGTranslate('pt|es');jQuery('span.language-switcher').html(jQuery(this).html());return false;"
                title="Español"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/es.png" />
            </a>
            <a
                href="#"
                onclick="doGTranslate('pt|fr');jQuery('span.language-switcher').html(jQuery(this).html());return false;"
                title="Français"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/fr.png" />
            </a>
            <a
                href="#"
                onclick="doGTranslate('pt|it');jQuery('span.language-switcher').html(jQuery(this).html());return false;"
                title="Italiano"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/it.png" />
            </a>
          </div>
        </div>
      </li>
      <li class="select-language">
        <label class="language-label" for="language-checkbox">
          <span style="display: inline" class="language-switcher">
            <img src="<?= get_template_directory_uri() ?>/assets/images/flags/br.png" />
          </span>
          <i class="bi bi-chevron-down"></i>
        </label>
        <input type="checkbox" id="language-checkbox">
        <ul>
          <li>
            <a
                href="#"
                onclick="doGTranslate('pt|pt');jQuery('span.language-switcher').html(jQuery(this).html());return false;"
                title="Português"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/br.png" />
            </a>
          </li>
          <li>
            <a
                href="#"
                onclick="doGTranslate('pt|de');jQuery('span.language-switcher').html(jQuery(this).html());return false;"
                title="Deutsch"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/de.png" />
            </a>
          </li>
          <li>
            <a
                href="#"
                onclick="doGTranslate('pt|en');jQuery('span.language-switcher').html(jQuery(this).html());return false;"
                title="English"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/gb.png" />
            </a>
          </li>
          <li>
            <a
                href="#"
                onclick="doGTranslate('pt|es');jQuery('span.language-switcher').html(jQuery(this).html());return false;"
                title="Español"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/es.png" />
            </a>
          </li>
          <li>
            <a
                href="#"
                onclick="doGTranslate('pt|fr');jQuery('span.language-switcher').html(jQuery(this).html());return false;"
                title="Français"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/fr.png" />
            </a>
          </li>
          <li>
            <a
                href="#"
                onclick="doGTranslate('pt|it');jQuery('span.language-switcher').html(jQuery(this).html());return false;"
                title="Italiano"
            >
              <img src="<?= get_template_directory_uri() ?>/assets/images/flags/it.png" />
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
