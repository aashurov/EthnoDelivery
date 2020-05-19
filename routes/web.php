<?php

// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     $sum = App\tblParcelCurrencyModel::select('currencyPrice')->where('currencyCode', 'UZS')->first();
//     $rubl = App\tblParcelCurrencyModel::select('currencyPrice')->where('currencyCode', 'RUB')->first();
//     return view('index', ['rubl' => $rubl, 'sum' => $sum]);
// });

Route::get('/', 'Web\IndexPageController@listofcurrency');
Route::get('/foundparcel', 'Web\IndexPageController@foundparcel')->name('foundparcel');


// Route::get('/foundparcel', [
//     'uses' => function(Request $request)
//     {
//         $listofparcels = App\tblParcelStatusHistoryModel::where('refNumber', $request->refNumber)->get();
//         $sum = App\tblParcelCurrencyModel::select('currencyPrice')->where('currencyCode', 'UZS')->first();
//         $rubl = App\tblParcelCurrencyModel::select('currencyPrice')->where('currencyCode', 'RUB')->first();
//         return view('search', ['rubl' => $rubl, 'sum' => $sum], compact(['listofparcels']));
//     },
//     'as' => 'foundparcel'
// ]);
Auth::routes();

Route::group(['middleware' => 'Administrator'], function () {
    Route::get('administrator/profile', 'Web\AdminProfileController@profile')->name('administrator.profile');
    Route::post('administrator/profile', 'Web\AdminProfileController@update_avatar')->name('administrator.updateprofile');

    //for user
    Route::get('administrator/dashboard', 'Web\AdministratorController@dashboard')->name('administrator');
    Route::get('administrator/users/{role_id}/users', 'Web\AdministratorController@users')->name('administrator.users.users');
    Route::get('administrator/users/adduser', 'Web\AdministratorController@adduser')->name('administrator.users.adduser');
    Route::post('administrator/saveuser', 'Web\AdministratorController@saveuser')->name('administrator.users.saveuser');
    Route::get('administrator/users/{id}/edituser', 'Web\AdministratorController@edituser')->name('administrator.users.edituser');
    Route::put('administrator/users/{id}/updateuser', 'Web\AdministratorController@updateuser')->name('administrator.users.updateuser');
    Route::delete('administrator/users/{id}/deleteuser', 'Web\AdministratorController@deleteuser')->name('administrator.users.deleteuser');
    // branch
    Route::get('administrator/branch/listofbranches', 'Web\AdministratorController@listofbranches')->name('administrator.branch.listofbranches');
    Route::get('administrator/branch/addbranch', 'Web\AdministratorController@addbranch')->name('administrator.branch.addbranch');
    Route::post('administrator/branch/savebranch', 'Web\AdministratorController@savebranch')->name('administrator.branch.savebranch');
    Route::get('administrator/branch/{id}/editbranch', 'Web\AdministratorController@editbranch')->name('administrator.branch.editbranch');
    Route::put('administrator/branch/{id}/updatebranch', 'Web\AdministratorController@updatebranch')->name('administrator.branch.updatebranch');
    Route::delete('administrator/branch/{id}/deletebranch', 'Web\AdministratorController@deletebranch')->name('administrator.branch.deletebranch');

    // company
    Route::get('administrator/company/listofcompanyes', 'Web\AdministratorController@listofcompanyes')->name('administrator.company.listofcompany');
    Route::get('administrator/company/addcompany', 'Web\AdministratorController@addcompany')->name('administrator.company.addcompany');
    Route::post('administrator/company/savecompany', 'Web\AdministratorController@savecompany')->name('administrator.company.savecompany');
    Route::get('administrator/company/{id}/editcompany', 'Web\AdministratorController@editcompany')->name('administrator.company.editcompany');
    Route::put('administrator/company/{id}/updatecompany', 'Web\AdministratorController@updatecompany')->name('administrator.company.updatecompany');
    Route::delete('administrator/company/{id}/deletecompany', 'Web\AdministratorController@deletecompany')->name('administrator.company.deletecompany');

    // plan
    Route::get('administrator/plan/listofplan', 'Web\AdministratorController@listofplans')->name('administrator.plan.listofplan');
    Route::get('administrator/plan/addplan', 'Web\AdministratorController@addplan')->name('administrator.plan.addplan');
    Route::post('administrator/plan/saveplan', 'Web\AdministratorController@saveplan')->name('administrator.plan.saveplan');
    Route::get('administrator/plan/{id}/editplan', 'Web\AdministratorController@editplan')->name('administrator.plan.editplan');
    Route::put('administrator/plan/{id}/updateplan', 'Web\AdministratorController@updateplan')->name('administrator.plan.updateplan');
    Route::delete('administrator/plan/{id}/deleteplan', 'Web\AdministratorController@deleteplan')->name('administrator.plan.deleteplan');

    // currency
    Route::get('administrator/currency/listofcurrency', 'Web\AdministratorController@listofcurrency')->name('administrator.currency.listofcurrency');
    Route::get('administrator/currency/addcurrency', 'Web\AdministratorController@addcurrency')->name('administrator.currency.addcurrency');
    Route::post('administrator/currency/savecurrency', 'Web\AdministratorController@savecurrency')->name('administrator.currency.savecurrency');
    Route::get('administrator/currency/{id}/editcurrency', 'Web\AdministratorController@editcurrency')->name('administrator.currency.editcurrency');
    Route::put('administrator/currency/{id}/updatecurrency', 'Web\AdministratorController@updatecurrency')->name('administrator.currency.updatecurrency');
    Route::delete('administrator/currency/{id}/deletecurrency', 'Web\AdministratorController@deletecurrency')->name('administrator.currency.deletecurrency');
});
Route::group(['middleware' => ['Manager']], function () {
    Route::get('manager/dashboard', 'Web\NewParcelController@dashboard')->name('manager');

    Route::get('manager/profile', 'Web\ManagerProfileController@profile')->name('manager.profile');
    Route::post('manager/profile', 'Web\ManagerProfileController@update_avatar')->name('manager.updateprofile');


    Route::get('manager/parcel/addparcel', 'Web\NewParcelController@addparcel')->name('manager.parcel.addparcel');
    Route::post('manager/parcel/savenewparcel', 'Web\NewParcelController@savenewparcel')->name('manager.parcel.savenewparcel');
    Route::get('manager/parcel/{id}/listofsendedparcel', 'Web\NewParcelController@listofsendedparcel')->name('manager.parcel.listofsendedparcel');
    Route::get('manager/parcel/{id}/listofwaitingparcel', 'Web\NewParcelController@listofwaitingparcel')->name('manager.parcel.listofwaitingparcel');
    Route::get('manager/parcel/{id}/viewparcel', 'Web\NewParcelController@viewparcel')->name('manager.parcel.viewparcel');
    Route::delete('manager/parcel/{id},{refNumber}/delete', 'Web\NewParcelController@delete')->name('manager.parcel.delete');
    Route::get('manager/parcel/{id}/editparcel', 'Web\NewParcelController@editparcel')->name('manager.parcel.editparcel');
    Route::put('manager/parcel/{id}/updateparcel', 'Web\NewParcelController@updateparcel')->name('manager.parcel.updateparcel');
    Route::get('manager/parcel/{id}/pdfInvoice', 'Web\pdfInvoice@pdf')->name('manager.parcel.pdfInvoice');
    Route::get('manager/parcel/{id}/pdfInvoicea4', 'Web\pdfInvoicea4@pdfa4')->name('manager.parcel.pdfInvoicea4');
    Route::get('#search-section', 'Web\NewParcelController@findparcell')->name('findparcell');
    Route::get('manager/parcel/{id}/updatestatus', 'Web\NewParcelController@updatestatus')->name('manager.parcel.updatestatus');
    Route::put('manager/parcel/{id}/updatestatussave', 'Web\NewParcelController@updatestatussave')->name('manager.parcel.updatestatussave');
    Route::get('manager/parcel/searchparcel', 'Web\NewParcelController@searchparcel')->name('manager.parcel.searchparcel');
    Route::post('manager/parcel/findparcel', 'Web\NewParcelController@findparcel')->name('manager.parcel.findparcel');
    Route::post('manager/parcel/massupdateparcel', 'Web\NewParcelController@massupdateparcel')->name('manager.parcel.massupdateparcel');
    Route::post('manager/parcel/massupdateparcell', 'Web\NewParcelController@massupdateparcell')->name('manager.parcel.massupdateparcell');
    Route::get('manager/parcel/markasread', 'Web\NewParcelController@markasread')->name('manager.parcel.markasread');
    Route::get('manager/parcel/{id},{n_id}/viewparcelNotify', 'Web\NewParcelController@viewparcelNotify')->name('manager.parcel.viewparcelNotify');
    Route::get('manager/parcel/{id}/shtrixCode', 'Web\pdfShtrixCode@shtrixCode')->name('manager.parcel.shtrixCode');

    // TEST
    Route::get('manager/parcel/addparcelt', 'Web\AddParcelController@addparcelt')->name('manager.parcel.parcelt');
    Route::get('manager/parcel/addparcelm', 'Web\AddParcelController@addparcelm')->name('manager.parcel.parcelm');


});
Route::group(['middleware' => 'Courier'], function () {
    Route::get('courier/profile', 'Web\CourierProfileController@profile')->name('courier.profile');
    Route::post('courier/profile', 'Web\CourierProfileController@update_avatar')->name('courier.updateprofile');

    Route::get('courier/dashboard', 'Web\CourierController@dashboard')->name('courier');
    Route::get('courier/{id}/listofparcel', 'Web\CourierController@listofparcel')->name('courier.parcel.listofparcel');
    Route::get('courier/{id}/getparcel', 'Web\CourierController@getparcel')->name('courier.parcel.getparcel');
    Route::get('courier/parcel/{id}/viewparcel', 'Web\CourierController@viewparcel')->name('courier.parcel.viewparcel');
    Route::get('courier/parcel/{id}/setdelivery', 'Web\CourierController@setdelivery')->name('courier.parcel.setdelivery');
    Route::put('courier/parcel/{id}/updatedelivery', 'Web\CourierController@updatedelivery')->name('courier.parcel.updatedelivery');
    Route::get('courier/parcel/{id}/pdfInvoice', 'Web\pdfInvoice@pdf')->name('courier.parcel.pdfInvoice');
    Route::get('courier/parcel/searchparcel', 'Web\CourierController@searchparcel')->name('courier.parcel.searchparcel');
    Route::post('courier/parcel/findparcel', 'Web\CourierController@findparcel')->name('courier.parcel.findparcel');
    Route::post('courier/parcel/massupdateparcel', 'Web\CourierController@massupdateparcel')->name('courier.parcel.massupdateparcel');
    Route::post('courier/parcel/massupdateparcell', 'Web\CourierController@massupdateparcell')->name('courier.parcel.massupdateparcell');
    Route::get('courier/parcel/markasread', 'Web\CourierController@markasread')->name('courier.parcel.markasread');
    Route::get('courier/parcel/{id},{n_id}/viewparcelNotify', 'Web\CourierController@viewparcelNotify')->name('courier.parcel.viewparcelNotify');
});

Route::group(['middleware' => 'Director'], function () {
    Route::get('director/profile', 'Web\DirectorProfileController@profile')->name('director.profile');
    Route::post('director/profile', 'Web\DirectorProfileController@update_avatar')->name('director.updateprofile');

    Route::get('director/dashboard', 'Web\DirectorController@dashboard')->name('director');
    Route::get('director/parcel/{id}/listofsendedparcel', 'Web\DirectorController@listofsendedparcel')->name('director.parcel.listofsendedparcel');
    Route::get('director/parcel/{id}/listofwaitingparcel', 'Web\DirectorController@listofwaitingparcel')->name('director.parcel.listofwaitingparcel');
    Route::get('director/parcel/{id}/viewparcel', 'Web\DirectorController@viewparcel')->name('director.parcel.viewparcel');
    Route::get('director/parcel/{id},{n_id}/viewparcelNotify', 'Web\DirectorController@viewparcelNotify')->name('director.parcel.viewparcelNotify');
    Route::get('director/parcel/markasread', 'Web\DirectorController@markasread')->name('director.parcel.markasread');
    Route::get('director/parcel/{id}/pdfInvoice', 'Web\pdfInvoice@pdf')->name('director.parcel.pdfInvoice');
    Route::get('director/parcel/{id}/pdfInvoicea4', 'Web\pdfInvoicea4@pdfa4')->name('director.parcel.pdfInvoicea4');
});

Route::group(['middleware' => 'Staff'], function () {
    Route::get('staff/profile', 'Web\StaffProfileController@profile')->name('staff.profile');
    Route::post('staff/profile', 'Web\StaffProfileController@update_avatar')->name('staff.updateprofile');

    Route::get('staff/dashboard', 'Web\StaffController@dashboard')->name('staff');
    Route::get('staff/{id}/listofsendedparcel', 'Web\StaffController@listofsendedparcel')->name('staff.parcel.listofsendedparcel');
    Route::get('staff/{id}/listofwaitingparcel', 'Web\StaffController@listofwaitingparcel')->name('staff.parcel.listofwaitingparcel');
    Route::get('staff/parcel/addparcel', 'Web\StaffController@addparcel')->name('staff.parcel.addparcel');
    Route::post('staff/parcel/savespecialparcel', 'Web\StaffController@savespecialparcel')->name('staff.parcel.savespecialparcel');
    Route::get('staff/parcel/{id}/viewparcel', 'Web\StaffController@viewparcel')->name('staff.parcel.viewparcel');
    Route::get('staff/parcel/{id}/editparcel', 'Web\StaffController@editparcel')->name('staff.parcel.editparcel');
    Route::put('staff/parcel/{id}/updateparcel', 'Web\StaffController@updateparcel')->name('staff.parcel.updateparcel');
    Route::delete('staff/parcel/{id},{refNumber}/delete', 'Web\StaffController@delete')->name('staff.parcel.delete');
    Route::get('staff/parcel/{id}/pdfInvoicea4', 'Web\pdfInvoicea4@pdfa4')->name('staff.parcel.pdfInvoicea4');
    Route::get('staff/parcel/{id}/pdfInvoice', 'Web\pdfInvoice@pdf')->name('staff.parcel.pdfInvoice');
    Route::get('staff/parcel/markasread', 'Web\StaffController@markasread')->name('staff.parcel.markasread');
    Route::get('staff/parcel/{id},{n_id}/viewparcelNotify', 'Web\StaffController@viewparcelNotify')->name('staff.parcel.viewparcelNotify');
});

Route::group(['middleware' => 'Customer'], function () {
    Route::get('customer/profile', 'Web\CustomerProfileController@profile')->name('customer.profile');
    Route::post('customer/profile', 'Web\CustomerProfileController@update_avatar')->name('customer.updateprofile');

    Route::get('customer/dashboard', 'Web\CustomerController@dashboard')->name('customer');
    // Route::get('customer/dashboard', 'CustomerController@dashboard')->name('customer');
    Route::get('customer/{id}/listofsendedparcel', 'Web\CustomerController@listofsendedparcel')->name('customer.parcel.listofsendedparcel');
    Route::get('customer/{id}/listofwaitingparcel', 'Web\CustomerController@listofwaitingparcel')->name('customer.parcel.listofwaitingparcel');
    Route::get('customer/parcel/addparcel', 'Web\CustomerController@addparcel')->name('customer.parcel.addparcel');
    Route::post('customer/parcel/savespecialparcel', 'Web\CustomerController@savespecialparcel')->name('customer.parcel.savespecialparcel');
    Route::get('customer/parcel/{id}/viewparcel', 'Web\CustomerController@viewparcel')->name('customer.parcel.viewparcel');
    Route::get('customer/parcel/{id}/editparcel', 'Web\CustomerController@editparcel')->name('customer.parcel.editparcel');
    Route::put('customer/parcel/{id}/updateparcel', 'Web\CustomerController@updateparcel')->name('customer.parcel.updateparcel');
    Route::delete('customer/parcel/{id},{refNumber}/delete', 'Web\CustomerController@delete')->name('customer.parcel.delete');
    Route::get('customer/parcel/{id}/pdfInvoicea4', 'Web\pdfInvoicea4@pdfa4')->name('customer.parcel.pdfInvoicea4');
    Route::get('customer/parcel/{id}/pdfInvoice', 'Web\pdfInvoice@pdf')->name('customer.parcel.pdfInvoice');
    Route::get('customer/parcel/markasread', 'Web\CustomerController@markasread')->name('customer.parcel.markasread');
    Route::get('customer/parcel/{id},{n_id}/viewparcelNotify', 'Web\CustomerController@viewparcelNotify')->name('customer.parcel.viewparcelNotify');
});
