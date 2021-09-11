<div class="page-info project-wrapper">
    <div class="project-text-info-wrapper">
        <h1 class="page-title project-name"><?php echo $page_config_data->title; ?></h1>
    </div>

    <?php if (!empty($page_config_data->description)): ?>
        <?php foreach ($page_config_data->description as $d): ?>

            <div class="page-text-wrapper">

                <?php if (isset($d->{'title'})): ?>
                    <h2 class=""><?php echo $d->{'title'}; ?></h2>
                <?php endif; ?>

                <?php if ($d->type === 'p'): ?>
                    <?php if (isset($d->{'sub-title'})): ?>
                        <h3 class=""><?php echo $d->{'sub-title'}; ?></h3>
                    <?php endif; ?>

                    <?php if (!empty($d->text)): ?>
                        <p class=""><?php echo $d->text; ?></p>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ($d->type === 'ul'): ?>
                    <?php if (isset($d->{'sub-title'})): ?>
                        <h3 class=""><?php echo $d->{'sub-title'}; ?></h3>
                    <?php endif; ?>

                    <ul class="">
                        <?php foreach ($d->text as $li): ?>
                            <li class=""><?php echo $li; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <button id="back-to-top-bta">Volver a arriba</button>
</div>