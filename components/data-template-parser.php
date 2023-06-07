<?php
    function get_portfolio_renders_info() {
        $renders_api = new RendersDataApi();
        $renders_data = $renders_api->get_all_renders_data();

        $portfolio = new Portfolio($renders_data);

        return [
            "data" => $portfolio->get_renders_info(),
            "portfolio" => $portfolio,
            "template" => "portfolio.php"
        ];
    }

    function get_project_data($project_name) {
        $renders_api = new RendersDataApi();
        $renders_data = $renders_api->get_all_renders_data();

        $project = new Project($renders_data);
        $project_info = $project->get_project_info($project_name);

        return [
            "data" => $project_info,
            "template" => "project.php"
        ];
    }

    function get_page_config_info($page_name) {
        $page_api = new PageDataApi();

        return $page_api->get_page_data($page_name);
    }

    function get_section_data() {
        return [
            "template" => "section.php"
        ];
    }

    function get_section_type($resource) {
        $sections = [
            'nosotros'
        ];

        if ($resource == null) {
            return 'index';
        }

        if (in_array($resource, $sections)) {
            return 'section';
        }

        return 'project';
    }

    function get_page_name($resource) {
        $sections_map = [
            'nosotros' => 'us'
        ];

        if ($resource == null) {
            return 'inicio';
        }

        return $sections_map[$resource] ?? '';
    }

    try {
        $page_data_map = [
            "index" => "get_portfolio_renders_info",
            "section" => "get_section_data",
            "project" => "get_project_data"
        ];

        $page = $_GET['project-name'] ?? null;
        $section_type = get_section_type($page);
        $page_data = $page_data_map[$section_type]($page);

        $template = $page_data['template'];

        $page_config_data = get_page_config_info(get_page_name($page));
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

?>
