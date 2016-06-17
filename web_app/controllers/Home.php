<?php

class Home extends Controller {

    public function Index(){
        // $user = $this->Model('User');
        // $user->name = 'Name Model !!!';

        $data['title'] = 'Index';
        $this->set_js(array('/web_app/public/js/home/app.js'));
        $this->View('home/Index.html','_shared/Layout.php',$data);
    }

    public function About(){
        $data['title'] = 'About';
        $this->View('home/About.html','_shared/Layout.php',$data);
    }

    public function Contact(){
        $data['title'] = 'Contact';
        $this->View('home/Contact.html','_shared/Layout.php',$data);
    }
}
 ?>
