<?php
    class Portfolio {
        public function sort_data($a, $b) {
            return $b->year - $a->year;
        }

        private function get_all_renders_data() {
            $data = file_get_contents('data/renders-data.json');
            $decoded_data = json_decode($data);

            // sort by year desc
            usort($decoded_data, function ($a, $b) {
                return $b->year - $a->year;
            });

            return $decoded_data;
        }

        private function parse_info($info) {
            $data = [];
        }

        public function get_image_url($img) {
            return 'img/' . $img->{'img-root-folder'} . '/' . $img->{'cover'};
        }

        public function get_renders_info() {
            $renders_data = $this->get_all_renders_data();

            return $renders_data;
        }
    }
?>