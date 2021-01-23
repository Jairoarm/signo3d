<?php for ($ri = 0; $ri < count($renders_info); $ri++): ?>
    <ul>
        <li>
            <a class="projects_a_space projects_img_frame" href="a_01_alegro_cali.html" target="_self">
                <img class="projects_img"
                    src="<?php echo $portfolio->get_image_url($renders_info[$ri]->{'img'}); ?>"
                    alt="fachadaal"
                    title="fachada alegro cali"
                >
            </a>
        </li>
    </ul>
<?php endfor; ?>