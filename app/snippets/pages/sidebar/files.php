<h2 class="hgroup hgroup-single-line hgroup-compressed cf">
  <span class="hgroup-title">
    <a href="<?php __($page->url('files')) ?>"><?php e($page->isSite(), l('metatags.files'), l('pages.show.files.title')) ?></a>
  </span>
  <span class="hgroup-options shiv shiv-dark shiv-left">
    <span class="hgroup-option-right">
      <a title="<?php _l('pages.show.files.edit') ?>" href="<?php __($page->url('files')) ?>">
        <?php i('pencil', 'left') ?><span><?php _l('pages.show.files.edit') ?></span>
      </a>
      <a data-upload href="#upload">
        <?php i('plus-circle', 'left') ?><span><?php _l('pages.show.files.add') ?></span>
      </a>
    </span>
  </span>
</h2>

<?php if($files->count()): ?>
<ul class="nav nav-list sidebar-list">
  <?php foreach($files as $file): ?>
  <li>
    <a class="draggable" data-helper="<?php __($file->filename()) ?>" data-text="<?php __($file->dragText()) ?>" href="<?php __($file->url('edit')) ?>">
      <?php echo $file->icon() . __($file->filename()) ?>
    </a>
    <a class="option" data-context="<?php __($file->url('context')) ?>" href="#options"><?php i('pencil') ?></a>
  </li>
  <?php endforeach ?>
</ul>
<?php else: ?>
<p class="marginalia"><a data-upload href="#upload" class="marginalia"><?php _l('pages.show.files.empty') ?></a></p>
<?php endif ?>