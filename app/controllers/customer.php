<?php 

class Customer extends Controller {

    public function index($params){

        //This is the model
        $user = $this->model('User');

        //This is our view
        $this->view('customer/index', $user);

    }

}