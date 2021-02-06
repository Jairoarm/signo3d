<ul class="renders-portfolio-wrapper">
    <?php for ($ri = 0; $ri < count($renders_info); $ri++): ?>
        <li class="renders-portfolio-image-wrapper">
            <a class="" href="<?php echo str_replace(' ', '-', trim($renders_info[$ri]->name)); ?>" target="_self">
                <img class="profolio-render-image"
                    src="<?php echo $portfolio->get_image_url($renders_info[$ri]->{'img'}); ?>"
                    alt="fachadaal"
                    title="fachada alegro cali"
                >
            </a>
        </li>
    <?php endfor; ?>
</ul>