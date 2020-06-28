<?php
class DESTROID_API{

	private $user_id = '';
	private $token = "";
	
public function __construct(int $user_id, string $token) {
		$this->user_id = $user_id;
		$this->token = $token;
	}
	public function usersGet($id){
$user_id = $this->user_id; 
$access_token = $this->token; // Токен
$request = file_get_contents("https://destroid.online/api/users.get?id=".$id."&user_id=".$user_id ."&access_token=".$access_token);
$json_request = json_decode($request);
	return $json_request;
	}
	public function statsGet(){
$request = file_get_contents("https://destroid.online/api/stats.get");
$json_request = json_decode($request);
	return $json_request;
	}
}
?>