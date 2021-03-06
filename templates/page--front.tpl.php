<div class="row">
  <?php if ($linked_site_name || $linked_logo): ?>
    <div class="large-5 columns">
      <?php if ($linked_logo): ?>
        <?php print $linked_logo; ?>
      <?php endif; ?>
    </div>
    <div class="large-7 columns text-right">
      <?php if ($is_front): ?>
        <h1 id="site-name"><?php print $linked_site_name; ?></h1>
      <?php else: ?>
        <div id="site-name"><?php print $linked_site_name; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div>

<div id="content-wrapper" class="row"><?php // Content warapper defines the edges of the entire content space with a drop shadow or similar effect. ?>

<?php if (!empty($page['header'])): ?>
  <div class="row">
    <div class="large-12 columns">
      <div id="sticky-links"><?php print render($page['header']);?></div>
    </div>
  </div>
<?php endif; ?>
<?php // Insert branding ?>
<div class="row">
    <div class="large-12 columns">
<div id="branding" class="hide-for-small"><a href="<?php print $front_page; ?>"><?php print '<img src="'.base_path() . path_to_theme() .'/images/branding.png">';  ?></a></div>
<div id="branding-mobile" class="show-for-small"><a href="<?php print $front_page; ?>"><?php print '<img src="'.base_path() . path_to_theme() .'/images/mobile/m_branding.png">';  ?></a></div>
</div>
</div>

<?php // Insert 4 Things Navigation for Desktop and Tablet ?>
<div class="row">
  <div class="large-12 columns hide-for-small">
    <?php // DESKTOP - TABLET START ?>
    <div id="four-things-dt">
        <object><?php include(path_to_theme()."/images/img_primary-navigation.svg");  ?>
      </object>
    </div>
    <?php // DESKTOP - TABLET STOP ?>
  </div>
</div>
<?php // End 4 Things Navigation for Desktop and Tablet ?>





<?php if ($site_slogan): ?>
  <div class="row">
    <div class="large-12 columns panel radius">
      <?php print $site_slogan; ?>
    </div>
  </div>
<?php endif; ?>
<div class="row">
  <div id="main" class="<?php print $main_grid; ?> columns">
    <?php if ($breadcrumb): print $breadcrumb; endif; ?>
    <?php if ($messages): print $messages; endif; ?>
    <?php if (!empty($page['help'])): print render($page['help']); endif; ?>
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlight panel callout">
        <?php print render($page['highlighted']); ?>
      </div>
    <?php endif; ?>
    <a id="main-content"></a>
    <?php if ($title && !$is_front): ?>
      <?php print render($title_prefix); ?>
      <h1 id="page-title" class="title"><?php print $title; ?></h1>
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
    <?php print render($page['content']); ?>
  </div>
  <?php if (!empty($page['sidebar_first'])): ?>
    <div id="sidebar-first" class="<?php print $sidebar_first_grid; ?> columns sidebar">
      <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['sidebar_second'])): ?>
    <div id="sidebar-second" class="<?php print $sidebar_sec_grid; ?> columns sidebar">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>
</div>



<?php if ($main_menu_links || !empty($page['navigation'])): ?>
  <div class="row" id="small-four-things">
    <nav class="large-12 columns show-for-small">
      <ul>
        <li class="small button expand"><a href="/categories/rows">Rows</a></li>
        <li class="small button expand"><a href="/categories/circles">Circles</a></li>
        <li class="small button expand"><a href="/categories/paths">Paths</a></li>
        <li class="small button expand"><a href="/categories/new">I'm New</a></li>
    </nav>
  </div>
<?php endif; ?>



<?php if (!empty($page['footer_first']) || !empty($page['footer_middle']) || !empty($page['footer_last'])): ?>
  <footer class="large-12 columns">
    <?php if (!empty($page['footer_first'])): ?>
      <div id="footer-first" class="large-1 columns">
        <?php print render($page['footer_first']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_middle'])): ?>
      <div id="footer-middle" class="large-7 columns">
        <?php print render($page['footer_middle']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_last'])): ?>
      <div id="footer-last" class="large-4 columns">
        <?php print render($page['footer_last']); ?>
      </div>
    <?php endif; ?>
  </footer>
<?php endif; ?>
</div><?php //end of content wrapper ?>
<div class="bottom-bar panel">
  <div class="row">
    <div class="twelve columns">
      &copy; <?php print date('Y') . ' ' . check_plain($site_name); ?>
    </div>
  </div>
</div>
