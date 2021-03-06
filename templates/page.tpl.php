<div class="row">
  <?php if ($linked_site_name || $linked_logo): ?>
  <div class="five columns">
    <?php if ($linked_logo): ?>
    <?php print $linked_logo; ?>
    <?php endif; ?>
  </div>
  <div class="seven columns text-right">
    <?php if ($is_front): ?>
    <h1 id="site-name"><?php print $linked_site_name; ?></h1>
    <?php else: ?>
    <div id="site-name"><?php print $linked_site_name; ?></div>
    <?php endif; ?>
  </div>
  <?php endif; ?>
</div>
<div id="content-wrapper" class="row">
  <?php // Content warapper defines the edges of the entire content space with a drop shadow or similar effect. ?>
  <?php if (!empty($page['header'])): ?>
  <div class="row">
    <div class="large-12 columns">
      <div id="sticky-links"><?php print render($page['header']);?></div>
    </div>
  </div>
  <?php endif; ?>
  <?php //Insert logo over atmospheric images ?>
  <div class="row">
    <div id="atmosphere-wrppaer" class="large-12 columns">
      <div id="atmosphere-logo"><?php print '<img src="'.base_path() . path_to_theme() .'/images/atmosphere-logo.png" width="100%">';  ?></div>
    </div>
    <?php // Insert page identity and "the tear" ?>
    <div class="large-12 columns">
      <div id="page-deco" class="hide-for-small">
        <object>
          <?php include(path_to_theme()."/images/page-deco-r1.svg");  ?>
        </object>
      </div>
      <div id="page-id-mobile" class="show-for-small">
        <object>
          <?php include(path_to_theme()."/images/mobile/m_page-identity.svg");  ?>
        </object>
      </div>
    </div>
  </div>
  <?php if ($site_slogan): ?>
  <div class="row">
    <div class="large-12 columns panel radius"> <?php print $site_slogan; ?> </div>
  </div>
  <?php endif; ?>
  <div class="row">
    <div id="main" class="<?php print $main_grid; ?> columns">
      <?php // if ($breadcrumb): print $breadcrumb; endif; ?>
      <?php if ($messages): print $messages; endif; ?>
      <?php if (!empty($page['help'])): print render($page['help']); endif; ?>
      <?php if (!empty($page['highlighted'])): ?>
      <div class="highlight panel callout"> <?php print render($page['highlighted']); ?> </div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php if ($title && !$is_front): ?>
      <?php print render($title_prefix); ?>
      <?php // hiding the title here to include it in the SVG, if that helps positioning. Reconfigre Apache for PHP in XML ?>
      <!--h1 id="page-title" class="title"><?php // print $title; ?></h1--> 
      <?php print render($title_suffix); ?>
      <?php endif; ?>
      <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
      <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?> </div>
    <?php if (!empty($page['sidebar_first'])): ?>
    <div id="sidebar-first" class="<?php print $sidebar_first_grid; ?> columns sidebar"> <?php print render($page['sidebar_first']); ?> </div>
    <?php endif; ?>
    <?php if (!empty($page['sidebar_second'])): ?>
    <div id="sidebar-second" class="<?php print $sidebar_sec_grid; ?> columns sidebar"> <?php print render($page['sidebar_second']); ?> </div>
    <?php endif; ?>
  </div>
  <div class="row expandable-menu">
    <div class="large-12 columns">
      


<div class="section-container accordion" data-section>
  
  <section>
    <p class="title" data-section-title><a href="#panel1">Section 1</a></p>
    <div class="content" data-section-content>
      <p>Content of section 1.</p>
    </div>
  </section>

  <section>
    <p class="title" data-section-title><a href="#panel2">Open This Menu</a></p>
    <div class="content" data-section-content>
            <?php if (!empty($page['expandable_menu'])): ?>
            <?php print render($page['expandable_menu']); ?>
            <?php endif ?>
</div>
  </section>
</div>



    </div>
  </div>
  <?php if (!empty($page['footer_first']) || !empty($page['footer_middle']) || !empty($page['footer_last'])): ?>
  <footer class="large-12 columns">
    <?php if (!empty($page['footer_first'])): ?>
    <div id="footer-first" class="large-1 columns"> <?php print render($page['footer_first']); ?> </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_middle'])): ?>
    <div id="footer-middle" class="large-7 columns"> <?php print render($page['footer_middle']); ?> </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_last'])): ?>
    <div id="footer-last" class="large-4 columns"> <?php print render($page['footer_last']); ?> </div>
    <?php endif; ?>
  </footer>
  <?php endif; ?>
</div>
<?php //end of content wrapper ?>
<div class="bottom-bar panel">
  <div class="row">
    <div class="large-12 columns"> &copy; <?php print date('Y') . ' ' . check_plain($site_name); ?> </div>
  </div>
</div>