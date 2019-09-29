<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class DatabaseController extends Controller
{
   public function index()
   {
    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/Firebase.json');
    $firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://exampap-8c306.firebaseio.com/')
    ->create();

    $database = $firebase->getDatabase();

       $newPost = $database
           ->getReference('students')
           ->push([
               'name' => 'Claudine Wangari Gachiri',
               'studentNumber' => '094567',
               'password' => 'claud',
               'email' => 'claudine.gachiri@strathmore.edu',
               'faculty' => 'FIT'

           ]);
   }


 }
