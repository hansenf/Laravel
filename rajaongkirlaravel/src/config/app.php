{
	"require": {
		"hansenf/rajaongkirlaravel" : "dev-master"
	}
}
'providers' => [
	....
	
	hansenf\rajaongkirlaravel\RajaOngkirServiceProvider::class,
]
'aliases' => [
	....
	
	'RajaOngkir' => hansenf\rajaongkirlaravel\RajaOngkirFacade::class,
]