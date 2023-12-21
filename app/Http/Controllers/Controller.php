<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Ixudra\Curl\Facades\Curl;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    


     

    // public function getLookUpApiResponse($apiUrl,$pageNo){

    //     $response = Curl::to($apiUrl.'/en/api/IntegrationApi/LookUp')
    //                     ->withHeader('Authorization: Bearer '.$this->token)
    //                     ->withData( [ 'SelectedPageIndex' =>  $pageNo ] )
    //                     ->post();

    //     return $response;
    // }

    // public function getDepositorSearchApiResponse($apiUrl,$customerId){
    //     $response = Curl::to($apiUrl.'/en/api/IntegrationApi/DepositorSearch')
    //                     ->withHeader('Authorization: Bearer '.$this->token)
    //                     ->withData( [ 'ID' =>$customerId ] )
    //                     ->post();

    //     return $response;
    // }

    // public function getPartyAddressSearchApiResponse($apiUrl,$partyId){
    //     $response = Curl::to($apiUrl.'/en/api/IntegrationApi/PartyAddressSearch')
    //                     ->withHeader('Authorization: Bearer '.$this->token)
    //                     ->withData( [ 'PartyID' =>$partyId ] )
    //                     ->post();

    //     return $response;
    // }
    // public function getPartyAddressGetApiResponse($apiUrl,$partyAddressId){
    //     $response = Curl::to($apiUrl.'/en/api/IntegrationApi/PartyAddressGet')
    //                     ->withHeader('Authorization: Bearer '.$this->token)
    //                     ->withData( [ 'ID' =>$partyAddressId ] )
    //                     ->post();
    //     return $response;
    // }
}
