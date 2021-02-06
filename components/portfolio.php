<?php
    class Portfolio {

        function __construct($renders_data) {
            $this->renders_data = $renders_data;
        }

        public function sort_data($a, $b) {
            return $b->year - $a->year;
        }

        private function parse_info($info) {
            $data = [];
        }

        public function get_image_url($img) {
            return 'img/' . $img->{'img-root-folder'} . '/' . $img->{'cover'};
        }

        public function get_renders_info() {
            $renders_data = $this->renders_data;

            return $renders_data;
        }
    }
?>