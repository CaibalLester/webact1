<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {
	public function lala()
    {
        echo "Dukit!";
    }

    public function lele()
    {
        $data['name'] = 'Panget Chynna';
        $data['age'] = '125';
        $this->call->view('about_us', $data);
    }
}
?>
