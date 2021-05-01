<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\DB;
Use App\Models\Companies;
Use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Session;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;


class BusinessController extends Controller
{

    public function BusinessProfile(){
        return view('admin.showbusinesses');
    }
    public function ClientBusinessProfile(){
        return view('clientbusiness');
    }

    public function Company(){
        return view('addcompanies');
    }
    public function FinishBusiness(){
        return view('finishbusiness');
    }
//create business
    public function registerBusiness(Request $request){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessProfiles',
        ['json'=>[
        'businessName' => $request->businessName,
        'businessOwnership' => $request->businessOwnership,
        // 'businessOwner' => 'Mukwano properties',
        'registrationNumber' => $request->registrationNumber,
        'businessEmail' => $request->businessEmail,
        'tinNumber' => $request->tinNumber,
        'physicalAdress' => $request->physicalAdress,
        'postalAdress' => $request->postalAdress,
        // 'district' => ['districtCode'=>'123','districtName'=>'mukono'],
        // 'country' => ['countryCode'=>'256','countryName'=>'Uganda'], 
        ]
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        $data = $response->getBody()->getContents();
        $character = json_decode($data);
        $decodedData = $character->data;
        $decodedStatus = $character->status;
        $decodedMessg = $character->message;
        // echo $response->getStatusCode();
        return redirect()->route('step2');
    
        
    }

    //create country
    public function addCountry(Request $request){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'countries',
        ['json'=>[
        'countryCode'=>$request->countryCode,
        'countryName'=>$request->countryName,
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        // echo $response->getBody();
        // echo $response->getStatusCode();
        // return redirect()->back();
    }

    //create country
    public function addDistrict(Request $request){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'districts',
        ['json'=>[
        'districtCode'=>$request->districtCode,
        'districtName'=>$request->districtName,
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        // echo $response->getBody();
        // echo $response->getStatusCode();
        // return redirect()->back();
    }

    //get business profiles
    public function getBusiness()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessProfiles/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }
    //get districts
    public function getDistricts()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'districts/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

//get countries
    public function getCountries()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'countries/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

    //get itemCatelogues
    public function itemCatelogues()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'itemCatelogues/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

//business contacts
    public function businessContacts()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessContacts/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }
    //businessLines
    public function businessLines()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessLines/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }
    //businessLineMappings/all
    public function businessLineMappings()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessLineMappings/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

    //businessOwners/all

    public function businessOwners()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessOwners/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

//businessTypes/all

    public function businessTypes()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessTypes/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

    //businessMappingsTypes/all

    public function businessMappingsTypes()
    {
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('GET', 'businessTypeMappings/all', [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

    dd($responseBody);
    }

    //create business lines
    public function addbusinessLines(Request $request){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessLines',
        ['json'=>[
        'code'=>$request->code,
        'businessLineName'=>$request->businessLineName,
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        // echo $response->getBody();
        // echo $response->getStatusCode();
        // return redirect()->back();
        return redirect()->route('step4');
    }

    //create business owners
    public function addbusinessOwners(Request $request){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessOwners',
        ['json'=>[
        'businessProfile'=>['id'=>'2c91808978d51fcb017926f305a2001c'],
        'firstName'=>$request->firstName,
        'lastname'=>$request->lastname,
        'telephone'=> $request->telephone,
        'email'=>$request->email
    ] 
        
        ]);
        $businessowners =$request->all();
        $responseBody =json_encode($response);
        // dd($responseBody);
        // echo $response->getBody();
        // echo $response->getStatusCode();
        // return redirect()->back();
        // return view('admin.step2business', ['businessowners'=>$businessowners]);
        return redirect()->route('step3');
    }

    //create business typemappings
    public function addbusinessTypemappings(){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessTypeMappings',
        ['json'=>[
        'businessProfile'=>['id'=>'2c91808978d51fcb0178ef7468990009'],
        'businessType'=>['id'=>'2c91808978b19da10178b1b529e80005'],
        
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        echo $response->getBody();
        echo $response->getStatusCode();
    }

    //create business types
    public function addbusinessTypes(Request $request){
        $client = new Client([
            'base_uri' => 'http://83.136.248.186:1701/']
        );

        $response = $client->request('POST', 'businessTypes',
        ['json'=>[
        'code'=>$request->code,
        'type'=>$request->type,
    ] 
        
        ]);
        $responseBody =json_encode($response);
        // dd($responseBody);
        // echo $response->getBody();
        // echo $response->getStatusCode();
        // return redirect()->back();
        return redirect()->route('step4');
    }

    //business steps
    public function step2(){
        
        return view('admin.step2business');
    }
    public function step3(){
        return view('admin.step3business');
    }
    public function step4(){
        return view('admin.step4business');
    }
    public function step5(){
        return view('admin.step5business');
    }
    public function step6(){
        return view('admin.step6business');
    }
}


