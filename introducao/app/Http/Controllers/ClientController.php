<?php
	namespace App\Http\Controllers;
	
	use Request;

	class ClientController extends Controller{
		public function listar(){	
			$data = date("Y-m-d");
			
			if($data > '2019-03-01'){
				$msg = "<br>Inscrição finalizada";
			}
			else{
				$msg = "<br>Inscrição em Aberto!";
			}
			
			return view("listar")->with("datas", $data)->with("msg", $msg);
		}
		
		public function listar2(){
			$nomes = array(1 => "João", 2 => "Maria", 3 => "Larissa", 4 => "Valdir");
			return view('listar2')->with('nomes', $nomes)->with('nome', 'Rl System');
			
		}
		
		public function editar($id){
			
			/*if(Request::has('id')){
				$id = Request::input("id");
			}
			else{
				$id = 0;
			}*/
			
			//$id = Request::input('id', 0);
			
			//URL
			$url = Request::url();
			$url = Request::path();
			
			//$id = Request::route('id');
			
			
			return view('editar')->with('id', $id)->with('url', $url);
		}
		
		public function novo(){
			if(view()->exists('novo')){
				return view("novo");
			}
			else{
				return view("welcome");
			}

		}
		
		
	}
?>