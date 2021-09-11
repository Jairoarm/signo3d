<?php
    class PageDataApi {
        public function __construct() {
            $data = file_get_contents('data/pages-data.json');
            $decoded_data = json_decode($data);

            $this->data = $decoded_data;
        }

        public function get_page_data($page) {
            $this->data;
            $page = strtolower($page);

            foreach($this->data as $data) {
                if (strtolower($data->title) === $page || strtolower($data->page) === $page) {
                    return $data;
                }
            }

            return (object) [
                'head-description' => '',
                'head-keywords' => '',
            ];
        }
    }
?>