<?php
    $renders_api = new RendersDataApi();
    $renders_data = $renders_api->get_all_renders_data();

    $project_name = isset($_GET['project-name']) ? $_GET['project-name'] : null;

    $template = 'portfolio.php';
    $project_info = null;

    if ($project_name) {
        $project = new Project($renders_data);
        $project_info = $project->get_project_info($project_name);

        if ($project_info) {
            $template = 'project.php';
        }
    }

    if (!$project_name || !$project_info) {
        $portfolio = new Portfolio($renders_data);
        $renders_info = $portfolio->get_renders_info();
    }

?>