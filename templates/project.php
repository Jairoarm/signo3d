<div class="project-wrapper">
    <div class="project-text-info-wrapper">
        <h1 class="project-name"><?php echo $project_info->name; ?></h1>

        <ul class="project-info">
            <li>Autor: <?php echo $project_info->author; ?></li>
            <li>Diseño: <?php echo $project_info->design; ?></li>
            <li>Ubicación: <?php echo $project_info->localization; ?></li>
            <li>Tipo: <?php echo $project_info->type; ?></li>
            <li>Año: <?php echo $project_info->year; ?></li>
        </ul>
    </div>

    <?php for ($p = 0; $p < count($project_info->img->project); $p++): ?>
        <ul class="project-images">
            <li class="project-image-wrapper">
                <img src="<?php echo 'img/' . $project_info->img->{'img-root-folder'} . '/' . $project_info->img->project[$p];?>"/>
            </li>
        </ul>
    <?php endfor; ?>
</div>

