<?php
    class Portfolio {
        private function get_all_renders_data() {
            $data = file_get_contents('data/renders-data.json');

            return json_decode($data);
        }

        private function parse_info($info) {
            $data = [];
        }

        public function get_image_url($root, $img) {
            return 'img/' . $root . '/' . $img->{'cover'} . '.jpg';
        }

        public function get_renders_info() {
            $renders_data = $this->get_all_renders_data();

            return $renders_data;
        }
    }
?>