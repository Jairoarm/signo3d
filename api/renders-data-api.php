<?php
    class RendersDataApi {
        public function get_all_renders_data() {
            $data = file_get_contents('data/renders-data.json');
            $decoded_data = json_decode($data);

            // sort by year desc
            usort($decoded_data, function ($a, $b) {
                return $b->year - $a->year;
            });

            return $decoded_data;
        }
    }
?>