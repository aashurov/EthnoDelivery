<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Http\Resources\User as UserResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'AuthController@login');

Route::middleware(['auth:api'])->group(function() {

    //Administrator
    Route::middleware(['scope:Administrator,Manager,Courier,Director,Staff,Customer'])->get('/profile', 'Api\AdministratorControllerApi@profile');
    Route::middleware(['scope:Administrator'])->get('/branches', 'Api\AdministratorControllerApi@listofbranches');
    Route::middleware(['scope:Administrator'])->get('/adashboard', 'Api\AdministratorControllerApi@dashboard');
    Route::middleware(['scope:Administrator'])->get('/companies/{branch_id}', 'Api\AdministratorControllerApi@listofcompanies');
    Route::middleware(['scope:Administrator'])->get('/plans', 'Api\AdministratorControllerApi@listofplans');
    Route::middleware(['scope:Administrator'])->get('/users/{role_id}', 'Api\AdministratorControllerApi@users');
    Route::middleware(['scope:Administrator'])->get('/userprofile/{id}', 'Api\AdministratorControllerApi@profileid');

    // Manager
    Route::middleware(['scope:Manager'])->get('/mdashboard', 'Api\ManagerControllerApi@dashboard');
    Route::middleware(['scope:Manager'])->get('/mlistofsendedparcel/{id}', 'Api\ManagerControllerApi@listofsendedparcel');
    Route::middleware(['scope:Manager'])->get('/mlistofwaitingparcel/{id}', 'Api\ManagerControllerApi@listofwaitingparcel');
    Route::middleware(['scope:Manager'])->get('/mviewparcel/{id}', 'Api\ManagerControllerApi@viewparcel');

    // Courier
    Route::middleware(['scope:Courier'])->get('/cdashboard', 'Api\CourierControllerApi@dashboard');
    Route::middleware(['scope:Courier'])->get('/colistofparcel/{id}', 'Api\CourierControllerApi@listofparcel'); //{id==1 mine parcel else id ==0 all parcel}
    Route::middleware(['scope:Courier'])->get('/coviewparcel/{id}', 'Api\CourierControllerApi@viewparcel');
    Route::middleware(['scope:Courier'])->get('/getparcel/{id}', 'Api\CourierControllerApi@getparcel');
    Route::middleware(['scope:Courier'])->get('/setdelivery/{id}', 'Api\CourierControllerApi@setdelivery');
    Route::middleware(['scope:Courier'])->put('/updatedelivery/{id}', 'Api\CourierControllerApi@updatedelivery');
    Route::middleware(['scope:Courier'])->post('/findparcel', 'Api\CourierControllerApi@findparcel');

    // Director
    Route::middleware(['scope:Director'])->get('/ddashboard', 'Api\DirectorControllerApi@dashboard');
    Route::middleware(['scope:Director'])->get('/dlistofsendedparcel/{id}', 'Api\DirectorControllerApi@listofsendedparcel');
    Route::middleware(['scope:Director'])->get('/dlistofwaitingparcel/{id}', 'Api\DirectorControllerApi@listofwaitingparcel');
    Route::middleware(['scope:Director'])->get('/dviewparcel/{id}', 'Api\DirectorControllerApi@viewparcel');

    // Staff
    Route::middleware(['scope:Staff'])->get('/sdashboard', 'Api\StaffControllerApi@dashboard');
    Route::middleware(['scope:Staff'])->get('/slistofsendedparcel/{id}', 'Api\StaffControllerApi@listofsendedparcel');
    Route::middleware(['scope:Staff'])->get('/slistofwaitingparcel/{id}', 'Api\StaffControllerApi@listofwaitingparcel');
    Route::middleware(['scope:Staff'])->get('/sviewparcel/{id}', 'Api\StaffControllerApi@viewparcel');
    // Customer
    Route::middleware(['scope:Customer'])->get('/cudashboard', 'Api\CustomerControllerApi@dashboard');
    Route::middleware(['scope:Customer'])->get('/culistofsendedparcel/{id}', 'Api\CustomerControllerApi@listofsendedparcel');
    Route::middleware(['scope:Customer'])->get('/culistofwaitingparcel/{id}', 'Api\CustomerControllerApi@listofwaitingparcel');
    Route::middleware(['scope:Customer'])->get('/cuviewparcel/{id}', 'Api\CustomerControllerApi@viewparcel');

    // Add/Edit User
    Route::middleware(['scope:Administrator,Manager,Courier,Director,Staff,Customer'])->post('/user', function(Request $request) {
        return User::create($request->all());
    });

    Route::middleware(['scope:Administrator,Manager,Courier,Director,Staff,Customer'])->put('/user/{userId}', function(Request $request, $userId) {

        try {
            $user = User::findOrFail($userId);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'User not found.'
            ], 403);
        }
        $user->save($request->all());
        return response()->json(['message'=>'User updated successfully.']);
    });

    // Delete User
    Route::middleware(['scope:Administrator,Manager,Courier,Director,Staff,Customer'])->delete('/user/{userId}', function(Request $request, $userId) {

        try {
            $user = User::findOfFail($userId);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'User not found.'
            ], 403);
        }
        $user->delete();
        return response()->json(['message'=>'User deleted successfully.']);
    });

});
