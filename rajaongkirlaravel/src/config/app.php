{
	"require": {
		"hansenferiandy/rajaongkirlaravel" : "dev-master"
	}
}
'providers' => [
	....
	
	hansenferiandy\rajaongkirlaravel\RajaOngkirServiceProvider::class,
]
'aliases' => [
	....
	
	'RajaOngkir' => hansenferiandy\rajaongkirlaravel\RajaOngkirFacade::class,
]