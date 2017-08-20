<?php 

class Seller
{
	private $curl='http://lumen-sample-api.dev/api/sellers';

	public $id;
	public $name;
	public $contact_number;
	public $address_city;
	public $address_country;

	function all(){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://lumen-sample-api.dev/api/sellers');
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

		$data = curl_exec($ch);

		curl_close($ch);

		return json_decode($data);
	}

	function find($id){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->curl . '/'.$id);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

		$data = curl_exec($ch);

		curl_close($ch);

		return json_decode($data);
	}

	function post($request){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $this->curl);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 
			http_build_query(array(
					'name' => $request['name'],
					'contact_number' => $request['contact_number'],
					'address_city' => $request['address_city'],
					'address_country' => $request['address_country']
				)));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$data = curl_exec ($ch);

		curl_close ($ch);

		return $data;
	}

}

?>