<?php

namespace Cloudinary {

    class Search
    {

        private $query_hash;

        public function __construct()
        {
            $this->query_hash = array(
                'sort_by' => array(),
                'aggregate' => array(),
                'with_field' => array(),
            );
        }

        public function expression($value)
        {
            $this->query_hash['expression'] = $value;

            return $this;
        }

        public function max_results($value)
        {
            $this->query_hash['max_results'] = $value;

            return $this;
        }

        public function next_cursor($value)
        {
            $this->query_hash['next_cursor'] = $value;

            return $this;
        }

        public function sort_by($field_name, $dir = 'desc')
        {
            array_push($this->query_hash['sort_by'], array($field_name => $dir));

            return $this;
        }

        public function aggregate($value)
        {
            array_push($this->query_hash['aggregate'], $value);

            return $this;
        }

        public function with_field($value)
        {
            array_push($this->query_hash['with_field'], $value);

            return $this;
        }

        public function as_array()
        {
            return array_filter(
                $this->query_hash,
                function ($value) {
                    return ((is_array($value) && !empty($value)) || ($value != null));
                }
            );
        }

        public function execute($options = array())
        {
            $api = new Api();
            $uri = array('resources/search');
            $options = array_merge($options, array('content_type' => 'application/json'));
            $method = 'post';

            return $api->call_api($method, $uri, $this->as_array(), $options);
        }
    }

}
