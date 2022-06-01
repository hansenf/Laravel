<?php

namespace hansenf\rajaongkirlaravel;

use hansenf\rajaongkirlaravel\app\Provinsi;
use hansenf\rajaongkirlaravel\app\Kota;
use hansenf\rajaongkirlaravel\app\Cost;

class RajaOngkir {
	public function Provinsi(){
		return new Provinsi;
	}

	public function Kota(){
		return new Kota;
	}

	public function Cost($attributes){
		return new Cost($attributes);
	}
}