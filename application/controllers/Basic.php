<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * [class Basic for handle menu basic maps]
 */
class Basic extends CI_Controller {
	public function index()
	{
        // Initialize our map. Here you can also pass in additional parameters for customising the map (see below)
        $this->googlemaps->initialize();
        // Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
        // placed where we want the map to appear.
        $data['map'] = $this->googlemaps->create_map();
        // set menus
        $data['menu'] = array( 'menu' => 'basic' );
        // Load our view, passing the map data that has just been created
        $this->load->view('pages/basic', $data);
	}
}
