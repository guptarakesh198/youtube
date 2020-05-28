<?php
namespace guptarakesh198\MyData;

class MyData {

    private $data;

    public function set(string $key, $value) {
        $this->data[$key] = $value;
    }

    public function get(string $key) {
        return $this->data[$key];
    }

    public static function print(){
    		echo 'check static function';
    }

}