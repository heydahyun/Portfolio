<?php snippet('header') ?>

<main class="main">
  
    <h1><?= $page->title() ?></h1>
    <!-- <?= $page->text() ?> -->

    <?php snippet('projects', [
        'projects' => collection('projects')
        // ->shuffle()
        // ->limit(3)
    ]) ?>

</main>

<?php snippet('footer') ?>

