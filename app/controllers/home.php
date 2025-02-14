<?php 

class Home extends Controller {

    public function index($params){

        //This is the model
        $user = $this->model('User');

        //This is our view
        $this->view('home/index', $user);

    }

}