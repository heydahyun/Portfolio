    <ul class="projects">
        <?php foreach ($projects as $project): ?>
        <li>
            <a href="<?= $project->url() ?>">
            <figure>

            <?= $project->image()->crop(400,600) ?>

                <figcaption>
                <?= $project->title() ?><br>
                <small><?= $project->category() ?></small>
                </figcaption>

            </figure>
            </a>
        </li>
        <?php endforeach ?>
    </ul>