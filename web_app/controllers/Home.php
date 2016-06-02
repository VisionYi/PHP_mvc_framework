<?php

class Home extends Controller {

    public function Index() {
        // $user = $this->Model('User');
        // $user->name = 'Name Model !!!';

        $this->set_js(array('/web_app/public/js/app.js'));
        $this->title = 'Index';
        $this->View('home/Index.html','_shared/Layout.php');
    }

    public function About() {
        $this->title = 'About';
        $this->View('home/About.html','_shared/Layout.php');
    }

    public function Contact() {
        $this->title = 'Contact';
        $this->View('home/Contact.html','_shared/Layout.php');
    }
}
 ?>
