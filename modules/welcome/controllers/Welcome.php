<?php
class Welcome extends Trongate {
 
    function index() {
        $data['view_module'] = 'welcome';
        $data['view_file'] = 'welcome';
        $this->template('public', $data);
        }
    function zakat_on_assets() {
          $data['view_module'] = 'welcome';
            $data['view_file'] = 'zakat_on_assets';
            $this->template('public', $data);
    }
    function zakat_on_productions()
        {
            $data['view_module'] = 'welcome';
            $data['view_file'] = 'zakat_on_productions';
            $this->template('public', $data);
        }

}