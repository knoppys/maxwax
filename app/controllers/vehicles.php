<?php 

class Vehicles extends Controller {

    public function index(){

        $this->model('Vehicles');

        $this->view('vehicles/index');

    }

}