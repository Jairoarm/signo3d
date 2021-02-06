<?php
    class Project {

        function __construct($renders_data) {
            $this->renders_data = $renders_data;
        }

        private function get_image_url($img) {
            return 'img/' . $img->{'img-root-folder'} . '/' . $img->{'cover'};
        }

        private function get_project($project_name) {
            $data = $this->renders_data;
            $name = str_replace(' ', '-', trim($project_name));

            $project = null;

            for ($i = 0; $i < count($data); $i++) {
                $pr_name = str_replace(' ', '-', trim($data[$i]->name));

                if ($pr_name == $name) {
                    $project = $data[$i];
                    break;
                }
            }

            return $project;
        }

        public function get_project_info($project_name) {
            $project = $this->get_project($project_name);

            return $project;
        }
    }
?>