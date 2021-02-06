<div class="project-wrapper">
    <h1 class="project-name"><?php echo $project_info->name; ?></h1>

    <ul class="project-info">
        <li>"author": <?php echo $project_info->author; ?></li>
        <li>"design": <?php echo $project_info->design; ?></li>
        <li>"localization": <?php echo $project_info->localization; ?></li>
        <li>"type": <?php echo $project_info->type; ?></li>
        <li>"year": <?php echo $project_info->year; ?></li>
    </ul>

    <?php for ($p = 0; $p < count($project_info->img->project); $p++): ?>
        <ul class="project-images">
            <li>
                <img src="<?php echo 'img/' . $project_info->img->{'img-root-folder'} . '/' . $project_info->img->project[$p];?>"/>
            </li>
        </ul>
    <?php endfor; ?>
</div>

