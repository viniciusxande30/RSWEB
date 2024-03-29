<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homeIndex(){

      return view('site');
    }
    public function aboutUs(){
      return view('sobre-nos');
    }
    public function marketServices(){
      return view('servicos-de-marketing');
    }
    public function sitesCreate(){
      return view('criacao-de-sites');
    }
    public function sitescreateQuotation($origin){
      $data_category = [
        'origin' => $origin,
      ];
      return view('all_brazil.criacao-de-site-cotacao',$data_category);
    }

    public function seocreateQuotation($origin){
      $data_category = [
        'origin' => $origin,
      ];
      return view('all_brazil.consultoria-seo-cotacao',$data_category);
    }


    public function routes(Request $request){
      $transp = file_get_contents("https://cargas.com.br/api/cities/most-used-routes?limit=30");
      
      $json = json_decode($transp);
      return view('rotas',['json'=>$json]);
    }
    public function companies(Request $request){

      $transp = file_get_contents("https://cargas.com.br/api/companies?page=".$request->page);
      $json = json_decode($transp);
      //$json_count = count($json->data);
      //$json_test['json_test'] = $json;
      //$session =  Http::get('https://cargas.com.br/api/companies?page='.$request->page);
      //return new Paginator($session['data'], 12);
      return view('transportadoras',['json'=> $json]);
    }
    public function quotation(){
      return view('consultoria-de-marketing-digital');
    }
    public function register(){
      return view('cadastro');
    }
    public function consultoriamktCotacao($origin){
      $data_category = [
        'origin' => $origin,
      ];
      //$data['origin'] = $origin.','.$destination;
      return view('all_brazil.consultoria-de-marketing-cotacao', $data_category);
    }
    public function sendQuotation(){
      return view('send_mail.cotacao-enviada');
    }
    public function companiesPerfil($companies){
      $transp = file_get_contents('https://cargas.com.br/api/companies?limit=500');
      //$transp_details = file_get_contents('https://cargas.com.br/api/companies/'.$companies);
      $json = json_decode($transp);
      //$json_details = json_decode($transp_details);
      return view('perfil-transportadoras',['json'=>$json,'companies'=>$companies]);
    }
    public function quotationApi(){

      //Variáveis

//$nome = $_POST['name'];
//$email = $_POST['email'];
//$telefone = $_POST['phone'];
//$mensagem = $_POST['msg'];
  
  //$emailenviar = "rsfreelas@gmail.com";
  //$destino = $emailenviar;
  //$assunto = "Contato pelo Site";

  
  Mail::raw('Nova Simulação da RS Web'.'Nome: '.$_POST['name'].' - Telefone: '.$_POST['phone'].'- E-mail : '.$_POST['email'].'- Mensagem : '.$_POST['msg'], function ($message){
    $message->to('comercial@rsweb.com.br')
  ->subject('Nova Cotação da RS Web')
  ->from('comercial@rsweb.com.br');
  });

    return redirect()->route('sendQuotation');
    }


    public function consultoriaSEO(){
      return view('consultoria-seo');
    }
    public function trafegoPago(){
      return view('trafego-pago');
    }
    public function midiasSociais(){
      return view('midias-sociais');
    }
    public function criacaodeSistemas(){
      return view('criacao-de-sistemas');
    }
    public function designGrafico(){
      return view('design-grafico');
    }



}