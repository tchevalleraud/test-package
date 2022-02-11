<?php
    namespace Tchevalleraud\TestPackage;

    class package1 {

        private $data;

        public function __construct($data = []){
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }

    }