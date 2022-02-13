<?php
    class package1Test extends \PHPUnit\Framework\TestCase {

        public function testPackage1_instanceOf(){
            $package = new \Tchevalleraud\TestPackage\package1();
            $this->assertInstanceOf(\Tchevalleraud\TestPackage\package1::class, $package);
        }

        public function testPackage1_construct(){
            $package = new \Tchevalleraud\TestPackage\package1();
            $this->assertEquals(new \Tchevalleraud\TestPackage\package1(), $package);
        }

        public function testPackage1(){
            $package = new \Tchevalleraud\TestPackage\package1(['data' => 1]);
            $this->assertEquals(['data' => 1], $package->getData());
        }

    }