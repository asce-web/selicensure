<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
  
  <div class="off-canvas-wrap">
    <div class="inner-wrap">
      
      <nav class="tab-bar hide-for-large-up">
        <section class="tab-bar-section">
          <!-- <h1 class="title show-for-medium-only"><?php print $site_name; ?></h1>
          <h1 class="title show-for-small-only">SELC</h1> -->
        </section>

        <section class="right-small">
          <a class="right-off-canvas-toggle menu-icon"><span></span></a>
        </section>
      </nav>

      <!-- Off Canvas Menu -->
      <aside class="right-off-canvas-menu">
        <!-- whatever you want goes here -->
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'small-main-menu', 'class' => array('off-canvas-list','links', 'inline', 'clearfix')))); ?>
      </aside>

      <!-- main content goes here -->
      <section class="main-section">
        <div id="header-area">
          <header>
            <div class="row">
              <div class="large-4 medium-4 small-12 columns">
                <div id="site-name-area">
                  <!-- <h1 class="site-name"><a href="/"><?php print $site_name; ?></a></h1> -->
                  <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                  <?php endif; ?>
                </div>
              </div>
              <div class="large-8 medium-8 columns show-for-large-up">
                <div class="search-menu-area">
                  <div id="search-area">
                    <?php print render($page['search_area']); ?>
                  </div>
                  <div id="menu-area">
                    <nav class="top-bar" data-topbar>
                      <section class="top-bar-section">
                        <?php print render($page['main_menu']); ?>
                      </section>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </header>
        </div>

        <div id="bar-area">
          <div class="row <?php if($is_front) {print 'homepage';} ?>">
            <?php if($is_front): ?>
              <div class="large-12 medium-12 hide-for-small-only columns">
                <div class="hero-area">
                  <h3>A united voice for the promotion of structural engineering licensure.</h3>
                </div>
              </div>
              <div class="large-12 medium-12 columns">
                <div class="logos-slogan-area">
                  <div class="logos-area">
                    <div class="row">
                      <div class="small-3 columns"><img src="/sites/all/themes/selc/images/logos/new/SEI-logo.png" alt="SEI"></div>
                      <div class="small-3 columns"><img src="/sites/all/themes/selc/images/logos/new/NCSEA-logo2.png" alt="SEA"></div>
                      <div class="small-3 columns"><img src="/sites/all/themes/selc/images/logos/new/SECB-logo.png" alt="SECB"></div>
                      <div class="small-3 columns"><img src="/sites/all/themes/selc/images/logos/new/CASE-logo.png" alt="CASE"></div>
                    </div>
                  </div>
                  <div class="slogan-area">
                    <?php print $site_slogan; ?>
                  </div>
                </div>
              </div>
            <?php else: ?>
              <div class="just-bar large-12 medium-12 small-12 columns"></div>
            <?php endif; ?>
          </div>
        </div>
        
        
        <div id="body-area">
          <div class="row">
            <?php if ($is_front): ?>
              <div class="large-4 medium-4 columns">
                <?php print render($page['homepage_left']); ?>
              </div>
              <div class="large-4 medium-4 columns">
                <?php print render($page['homepage_right']); ?>
              </div>
            <?php else: ?>
              <div class="large-8 medium-8 columns">
                <div class="main-content-area">
                  <?php if(!$is_front): ?>
                    <h1 class="page-title"><?php print $title; ?></h1>
                    <?php if($tabs): ?>
                      <?php print render($tabs); ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php print render($page['content']); ?>
                </div>
              </div>
            <?php endif; ?>
            <div class="large-4 medium-4 columns sidebar <?php if ($is_front) {print 'homepage hide-for-small-only';} ?>">
              <div class="sidebar-area">
                <?php print render($page['sidebar']); ?>
              </div>
            </div>
          </div>
        </div>

        <div id="sub-footer-area">
          <div class="row">
            <div class="large-4 medium-4 small-12 columns">
              <div class="left-sf">
                <div class="container">
                  <div class="container-left">
                    <i class="fi-megaphone"></i>
                  </div>
                  <div class="container-right">
                    <div class="title">
                      <span>Questions or comments?</span>  
                    </div>
                    <div>
                      <span><a href="mailto:info@selicensure.org">info@selicensure.org</a></span>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
            <div class="large-4 medium-4 small-12 columns">
              <div class="middle-sf">
                <div class="container">
                  <div class="container-left">
                    <i class="fi-torsos-all"></i>
                  </div>
                  <div class="container-right">
                    <div class="title">
                      <span>Organizations that make up SELC</span>  
                    </div>
                    <div>
                      <span><a target="_blank" href="http://www.asce.org/SEI" title="The Structural Engineering Institute">SEI</a> | <a target="_blank" href="http://www.ncsea.com/" title="The National Council of Structural Engineers Associations">NCSEA</a> | <a target="_blank" href="http://www.secb.org/" title="The Structural Engineering Certification Board">SECB</a> | <a target="_blank" href="http://www.acec.org/case/" title="The Council of American Structure Engineers">CASE</a></span>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
            <div class="large-4 medium-4 small-6 large-uncentered medium-uncentered small-centered columns">
              <div class="right-sf">
                &nbsp;
              </div>  
            </div>
          </div>
        </div>  

        <div id="footer-area">
          <div class="row">
            <div class="large-12 medium-12 small-12 columns">
                <p>Copyright &copy; <?php print date('Y'); ?></p>
              <?php print render($page['footer']); ?>
            </div>
          </div>
        </div>
      </section>
        
      <!-- close the off-canvas menu -->
      <a class="exit-off-canvas"></a>
    </div>
  </div>

  <script>
    (function ($) {
      $('.more-link a').addClass("selc-button small");
      $('.view-events .views-row').wrapInner('<div class="events-container"/>')
      $('.view-events .events-container').wrapInner('<div class="ec-right"/>')
      $('.view-events .events-container .ec-right').before('<div class="ec-left"><i class="fi-calendar"></i></div>')
      $('#menu-area .menu-level-1 > ul.menu').addClass("right");
      $('#menu-area .menu-level-1 > ul.menu li.expanded').addClass("has-dropdown");
      $('#menu-area li.has-dropdown ul.menu').addClass("dropdown");
      $('#search-area .form-actions input').addClass("selc-button tiny");
      $('.field-type-file a').attr( "target", "_blank" );
      $('.webform-client-form .form-submit').addClass("selc-button");
      $('.sidebar ul').addClass("no-bullet");
    })(jQuery);
  </script>