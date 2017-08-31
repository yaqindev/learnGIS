<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * [class Marker for handle menu maps with marker]
 */
class Marker extends CI_Controller {
	public function index()
	{
        // load model
        $this->load->model( 'Lokasi_model', 'lokasi' );
        // set configuration
        $config['zoom'] = 'auto';
        // $config['onclick'] = 'createMarker_map({ map: map, position:event.latLng });';
        $config['onclick'] = 'inputData( event.latLng.lat(), event.latLng.lng() )';
        $this->googlemaps->initialize($config);
        // set marker
        $getTitikMarker = $this->lokasi->getAll();
        foreach ($getTitikMarker as $val) {
            $latitude  = $val->latitude;
            $longitude = $val->longitude;
            $marker    = array();
            $marker['position'] =  "'".$longitude. ", " .$latitude."'";
            $marker['infowindow_content'] = "$val->keterangan";
            $this->googlemaps->add_marker($marker);
        }
        // set map data
        $data['map'] = $this->googlemaps->create_map();
        // set menus
        $data['menu'] = array( 'menu' => 'marker' );
        // laod view with data
        $this->load->view('pages/marker', $data);
	}

    public function simpan()
    {
        // load model
        $this->load->model( 'Lokasi_model', 'lokasi' );
        // get POST data
        $latitude   = $this->input->post( 'latitude' );
        $longitude  = $this->input->post( 'langitude' );
        $keterangan = $this->input->post( 'keterangan' );
        //  save data
        $data['id']         = $this->lokasi->getLastId();
        $data['latitude']   = $latitude;
        $data['longitude']  = $longitude;
        $data['keterangan'] = $keterangan;
        $this->lokasi->add( $data );
        // redirect
        redirect('marker');
    }
}
