<? snippet("layout-top") ?>

<h1><?= $site->title() ?></h1>

<time datetime="<?= $site->date("Y-m-d", "event_start_date") ?>">
  <?= $site->date("F j", "event_start_date") ?>
</time>
<span>&ndash;</span>
<time datetime="<?= $site->date("Y-m-d", "event_end_date") ?>">
  <?= $site->date("j, Y", "event_end_date") ?>
</time>

<span><?= $site->event_location() ?></span>

<?= $pages->find("about")->story()->kirbytext() ?>

<ul>
  <? foreach($featured_events as $featured_event): ?>
    <li>
      <a href="<?= $featured_event->url() ?>">
        <?= $featured_event->title() ?>
      </a>
    </li>
  <? endforeach ?>
</ul>

<? foreach($page_ads as $ad): ?>
  <? snippet("advertisement", array("ad" => $ad)) ?>
<? endforeach ?>

<? snippet("layout-bottom") ?>
