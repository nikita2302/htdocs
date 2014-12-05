<?php
class CommunityCourtController extends AppController {
    public $helpers = array('Html', 'Form');

    public function programlist() {
    }

    public function programinfo() {
        if($this->request->is('post')) {
            $this->fName= $this->request->data('fName');
            debug($this->fName);
            $this->CommunityCourt->savedata($this->request->data);
            debug($this->request->data);
        }
    }

    public function home() {
    }

    public function mainmenu() {
    }

    public function searchedit() {
    }

    public function searchview() {
    }

    public function caseinfo() {
        if($this->request->is('post')) {
            $this->CommunityCourt->caseinfosave();
        }
    }

    public function tlc() {
    }

    public function restorativejustice() {
    }

    public function restorativejustice2() {
    }

    public function communityservice() {
    }

    public function mentalhealth() {
    }    
}