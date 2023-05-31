<?php

class Latihan_test extends TestCase{

    public function setUp(): void{
        $this->resetInstance();
        $this->CI->load->model(['Inventory_model']);
    }

    public function test_get_name(){
        $actual = $this->CI->Inventory_model->category();
        $expected = "laptop";
        $this->assertEquals($expected, $actual);
    }
}