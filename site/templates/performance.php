<? snippet("layout-top") ?>

<header>
  <h1><?= $page->title() ?></h1>
</header>

<a href="<?= $page->parent()->url() ?>">
  &larr; Back to all <?= $page->parent()->title() ?>
</a>

<div class="p-grid">
  <div class="p-grid__item u-1/2">
    <dl>
      <dt>Performers:</dt>

      <? foreach($page->performers()->toStructure() as $performer): ?>
        <? $performer = $page->parent()->siblings()->find("performers")->find($performer) ?>
        <dd>
          <a href="<?= $performer->url() ?>">
            <?= $performer->title() ?>
          </a>
          <p><?= $performer->bio() ?></p>
        </dd>
      <? endforeach ?>
    </dl>
  </div>

  <div class="p-grid__item u-1/2">
    <img src="http://fillmurray.com/800/400">
  </div>
</div>

<? snippet("layout-bottom") ?>
