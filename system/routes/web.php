<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::GET('admin/home','AdminController@index');
Route::GET('admin/editor','EditorController@index');

Route::get('logout', 'AdminController@logout')->name('logout');

Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ForgotPasswordController@reset');
Route::POST('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('admin/user','AdminUserController@index')->name('admin.user');
Route::get('admin/user/add','AdminUserController@add')->name('adminuser.add');
Route::post('admin/user/save','AdminUserController@save')->name('adminuser.save');
Route::get('admin/user/edit/{id}','AdminUserController@edit')->name('adminuser.edit');
Route::post('admin/user/update/{id}','AdminUserController@update')->name('adminuser.update');
Route::get('admin/user/delete/{id}','AdminUserController@delete')->name('adminuser.delete');

Route::get('admin/role','RoleController@index')->name('role');
Route::get('admin/role/add','RoleController@add')->name('role.add');
Route::post('admin/role/save','RoleController@save')->name('role.save');
Route::get('admin/role/edit/{id}','RoleController@edit')->name('role.edit');
Route::post('admin/role/update/{id}','RoleController@update')->name('role.update');
Route::get('admin/role/delete/{id}','RoleController@delete')->name('role.delete');

Route::get('admin/permission','PermissionController@index')->name('permission');
Route::get('admin/permission/add','PermissionController@add')->name('permission.add');
Route::post('admin/permission/save','PermissionController@save')->name('permission.save');
Route::get('admin/permission/edit/{id}','PermissionController@edit')->name('permission.edit');
Route::post('admin/permission/update/{id}','PermissionController@update')->name('permission.update');
Route::get('admin/permission/delete/{id}','PermissionController@delete')->name('permission.delete');

Route::get('admin/propertytype','PropertyTypeController@index')->name('propertytype');
Route::get('admin/propertytype/add','PropertyTypeController@add')->name('propertytype.add');
Route::post('admin/propertytype/save','PropertyTypeController@save')->name('propertytype.save');
Route::get('admin/propertytype/edit/{id}','PropertyTypeController@edit')->name('propertytype.edit');
Route::post('admin/propertytype/update/{id}','PropertyTypeController@update')->name('propertytype.update');
Route::get('admin/propertytype/delete/{id}','PropertyTypeController@delete')->name('propertytype.delete');

Route::get('admin/property','PropertyController@index')->name('property');

Route::get('admin/property/add','PropertyController@add')->name('property.add');
Route::post('admin/property/save','PropertyController@save')->name('property.save');
Route::get('admin/property/edit/{id}','PropertyController@edit')->name('property.edit');
Route::post('admin/property/update/{id}','PropertyController@update')->name('property.update');
Route::get('admin/property/delete/{id}','PropertyController@delete')->name('property.delete');

Route::get('admin/propertytitle','PropertyTitleController@index')->name('propertytitle');
Route::get('admin/propertytitle/add','PropertyTitleController@add')->name('propertytitle.add');
Route::post('admin/propertytitle/save','PropertyTitleController@save')->name('propertytitle.save');
Route::get('admin/propertytitle/edit/{id}','PropertyTitleController@edit')->name('propertytitle.edit');
Route::post('admin/propertytitle/update/{id}','PropertyTitleController@update')->name('propertytitle.update');
Route::get('admin/propertytitle/delete/{id}','PropertyTitleController@delete')->name('propertytitle.delete');

Route::get('admin/transactiontype','TransactionTypeController@index')->name('transactiontype');
Route::get('admin/transactiontype/add','TransactionTypeController@add')->name('transactiontype.add');
Route::post('admin/transactiontype/save','TransactionTypeController@save')->name('transactiontype.save');
Route::get('admin/transactiontype/edit/{id}','TransactionTypeController@edit')->name('transactiontype.edit');
Route::post('admin/transactiontype/update/{id}','TransactionTypeController@update')->name('transactiontype.update');
Route::get('admin/transactiontype/delete/{id}','TransactionTypeController@delete')->name('transactiontype.delete');

Route::get('admin/classtype','ClassTypeController@index')->name('classtype');
Route::get('admin/classtype/add','ClassTypeController@add')->name('classtype.add');
Route::post('admin/classtype/save','ClassTypeController@save')->name('classtype.save');
Route::get('admin/classtype/edit/{id}','ClassTypeController@edit')->name('classtype.edit');
Route::post('admin/classtype/update/{id}','ClassTypeController@update')->name('classtype.update');
Route::get('admin/classtype/delete/{id}','ClassTypeController@delete')->name('classtype.delete');

Route::get('admin/urgencytype','UrgencyTypeController@index')->name('urgencytype');
Route::get('admin/urgencytype/add','UrgencyTypeController@add')->name('urgencytype.add');
Route::post('admin/urgencytype/save','UrgencyTypeController@save')->name('urgencytype.save');
Route::get('admin/urgencytype/edit/{id}','UrgencyTypeController@edit')->name('urgencytype.edit');
Route::post('admin/urgencytype/update/{id}','UrgencyTypeController@update')->name('urgencytype.update');
Route::get('admin/urgencytype/delete/{id}','UrgencyTypeController@delete')->name('urgencytype.delete');

Route::get('admin/commissiontype','CommissionTypeController@index')->name('commissiontype');
Route::get('admin/commissiontype/add','CommissionTypeController@add')->name('commissiontype.add');
Route::post('admin/commissiontype/save','CommissionTypeController@save')->name('commissiontype.save');
Route::get('admin/commissiontype/edit/{id}','CommissionTypeController@edit')->name('commissiontype.edit');
Route::post('admin/commissiontype/update/{id}','CommissionTypeController@update')->name('commissiontype.update');
Route::get('admin/commissiontype/delete/{id}','CommissionTypeController@delete')->name('commissiontype.delete');

Route::get('admin/propertystatus','PropertyStatusController@index')->name('propertystatus');
Route::get('admin/propertystatus/add','PropertyStatusController@add')->name('propertystatus.add');
Route::post('admin/propertystatus/save','PropertyStatusController@save')->name('propertystatus.save');
Route::get('admin/propertystatus/edit/{id}','PropertyStatusController@edit')->name('propertystatus.edit');
Route::post('admin/propertystatus/update/{id}','PropertyStatusController@update')->name('propertystatus.update');
Route::get('admin/propertystatus/delete/{id}','PropertyStatusController@delete')->name('propertystatus.delete');

Route::get('admin/exteriorlooks','ExteriorLookController@index')->name('exteriorlooks');
Route::get('admin/exteriorlooks/add','ExteriorLookController@add')->name('exteriorlooks.add');
Route::post('admin/exteriorlooks/save','ExteriorLookController@save')->name('exteriorlooks.save');
Route::get('admin/exteriorlooks/edit/{id}','ExteriorLookController@edit')->name('exteriorlooks.edit');
Route::post('admin/exteriorlooks/update/{id}','ExteriorLookController@update')->name('exteriorlooks.update');
Route::get('admin/exteriorlooks/delete/{id}','ExteriorLookController@delete')->name('exteriorlooks.delete');

Route::get('admin/ad_transaction','AdvertismentTransactionController@index')->name('adtransaction');
Route::get('admin/ad_transaction/add','AdvertismentTransactionController@add')->name('adtransaction.add');
Route::post('admin/ad_transaction/save','AdvertismentTransactionController@save')->name('adtransaction.save');
Route::get('admin/ad_transaction/edit/{id}','AdvertismentTransactionController@edit')->name('adtransaction.edit');
Route::post('admin/ad_transaction/update/{id}','AdvertismentTransactionController@update')->name('adtransaction.update');
Route::get('admin/ad_transaction/delete/{id}','AdvertismentTransactionController@delete')->name('adtransaction.delete');

Route::get('admin/ad_objective','AdvertismentObjectiveController@index')->name('adobjective');
Route::get('admin/ad_objective/add','AdvertismentObjectiveController@add')->name('adobjective.add');
Route::post('admin/ad_objective/save','AdvertismentObjectiveController@save')->name('adobjective.save');
Route::get('admin/ad_objective/edit/{id}','AdvertismentObjectiveController@edit')->name('adobjective.edit');
Route::post('admin/ad_objective/update/{id}','AdvertismentObjectiveController@update')->name('adobjective.update');
Route::get('admin/ad_objective/delete/{id}','AdvertismentObjectiveController@delete')->name('adobjective.delete');

Route::get('admin/ad_type','AdvertismentTypeController@index')->name('adtype');
Route::get('admin/ad_type/add','AdvertismentTypeController@add')->name('adtype.add');
Route::post('admin/ad_type/save','AdvertismentTypeController@save')->name('adtype.save');
Route::get('admin/ad_type/edit/{id}','AdvertismentTypeController@edit')->name('adtype.edit');
Route::post('admin/ad_type/update/{id}','AdvertismentTypeController@update')->name('adtype.update');
Route::get('admin/ad_type/delete/{id}','AdvertismentTypeController@delete')->name('adtype.delete');

Route::get('admin/salecondition','SaleConditionController@index')->name('salecondition');
Route::get('admin/salecondition/add','SaleConditionController@add')->name('salecondition.add');
Route::post('admin/salecondition/save','SaleConditionController@save')->name('salecondition.save');
Route::get('admin/salecondition/edit/{id}','SaleConditionController@edit')->name('salecondition.edit');
Route::post('admin/salecondition/update/{id}','SaleConditionController@update')->name('salecondition.update');
Route::get('admin/salecondition/delete/{id}','SaleConditionController@delete')->name('salecondition.delete');

Route::get('admin/rentalcondition','RentalConditionController@index')->name('rentalcondition');
Route::get('admin/rentalcondition/add','RentalConditionController@add')->name('rentalcondition.add');
Route::post('admin/rentalcondition/save','RentalConditionController@save')->name('rentalcondition.save');
Route::get('admin/rentalcondition/edit/{id}','RentalConditionController@edit')->name('rentalcondition.edit');
Route::post('admin/rentalcondition/update/{id}','RentalConditionController@update')->name('rentalcondition.update');
Route::get('admin/rentalcondition/delete/{id}','RentalConditionController@delete')->name('rentalcondition.delete');

Route::get('admin/interiorcondition','InteriorConditionController@index')->name('interiorcondition');
Route::get('admin/interiorcondition/add','InteriorConditionController@add')->name('interiorcondition.add');
Route::post('admin/interiorcondition/save','InteriorConditionController@save')->name('interiorcondition.save');
Route::get('admin/interiorcondition/edit/{id}','InteriorConditionController@edit')->name('interiorcondition.edit');
Route::post('admin/interiorcondition/update/{id}','InteriorConditionController@update')->name('interiorcondition.update');
Route::get('admin/interiorcondition/delete/{id}','InteriorConditionController@delete')->name('interiorcondition.delete');

Route::get('admin/interiorlook','InteriorLookController@index')->name('interiorlook');
Route::get('admin/interiorlook/add','InteriorLookController@add')->name('interiorlook.add');
Route::post('admin/interiorlook/save','InteriorLookController@save')->name('interiorlook.save');
Route::get('admin/interiorlook/edit/{id}','InteriorLookController@edit')->name('interiorlook.edit');
Route::post('admin/interiorlook/update/{id}','InteriorLookController@update')->name('interiorlook.update');
Route::get('admin/interiorlook/delete/{id}','InteriorLookController@delete')->name('interiorlook.delete');

Route::get('admin/personalinfo','PersonalInformationController@index')->name('personalinfo');
Route::get('admin/personalinfo/add','PersonalInformationController@add')->name('personalinfo.add');
Route::post('admin/personalinfo/save','PersonalInformationController@save')->name('personalinfo.save');
Route::get('admin/personalinfo/edit/{id}','PersonalInformationController@edit')->name('personalinfo.edit');
Route::post('admin/personalinfo/update/{id}','PersonalInformationController@update')->name('personalinfo.update');
Route::get('admin/personalinfo/delete/{id}','PersonalInformationController@delete')->name('personalinfo.delete');

Route::get('admin/environment','EnvironmentController@index')->name('environment');
Route::get('admin/environment/add','EnvironmentController@add')->name('environment.add');
Route::post('admin/environment/save','EnvironmentController@save')->name('environment.save');
Route::get('admin/environment/edit/{id}','EnvironmentController@edit')->name('environment.edit');
Route::post('admin/environment/update/{id}','EnvironmentController@update')->name('environment.update');
Route::get('admin/environment/delete/{id}','EnvironmentController@delete')->name('environment.delete');

Route::get('admin/facility','FacilityController@index')->name('facility');
Route::get('admin/facility/add','FacilityController@add')->name('facility.add');
Route::post('admin/facility/save','FacilityController@save')->name('facility.save');
Route::get('admin/facility/edit/{id}','FacilityController@edit')->name('facility.edit');
Route::post('admin/facility/update/{id}','FacilityController@update')->name('facility.update');
Route::get('admin/facility/delete/{id}','FacilityController@delete')->name('facility.delete');

Route::get('admin/finance','FinanceController@index')->name('finance');
Route::get('admin/finance/add','FinanceController@add')->name('finance.add');
Route::post('admin/finance/save','FinanceController@save')->name('finance.save');
Route::get('admin/finance/edit/{id}','FinanceController@edit')->name('finance.edit');
Route::post('admin/finance/update/{id}','FinanceController@update')->name('finance.update');
Route::get('admin/finance/delete/{id}','FinanceController@delete')->name('finance.delete');

Route::get('admin/legal','LegalDocumentController@index')->name('legal');
Route::get('admin/legal/add','LegalDocumentController@add')->name('legal.add');
Route::post('admin/legal/save','LegalDocumentController@save')->name('legal.save');
Route::get('admin/legal/edit/{id}','LegalDocumentController@edit')->name('legal.edit');
Route::post('admin/legal/update/{id}','LegalDocumentController@update')->name('legal.update');
Route::get('admin/legal/delete/{id}','LegalDocumentController@delete')->name('legal.delete');

Route::get('admin/roadaccess','RoadAccessController@index')->name('roadaccess');
Route::get('admin/roadaccess/add','RoadAccessController@add')->name('roadaccess.add');
Route::post('admin/roadaccess/save','RoadAccessController@save')->name('roadaccess.save');
Route::get('admin/roadaccess/edit/{id}','RoadAccessController@edit')->name('roadaccess.edit');
Route::post('admin/roadaccess/update/{id}','RoadAccessController@update')->name('roadaccess.update');
Route::get('admin/roadaccess/delete/{id}','RoadAccessController@delete')->name('roadaccess.delete');

Route::get('admin/landarea','LandAreaController@index')->name('landarea');
Route::get('admin/landarea/add','LandAreaController@add')->name('landarea.add');
Route::post('admin/landarea/save','LandAreaController@save')->name('landarea.save');
Route::get('admin/landarea/edit/{id}','LandAreaController@edit')->name('landarea.edit');
Route::post('admin/landarea/update/{id}','LandAreaController@update')->name('landarea.update');
Route::get('admin/landarea/delete/{id}','LandAreaController@delete')->name('landarea.delete');

Route::get('admin/sellerexpected','SellerExpectedPriceController@index')->name('sellerexpected');
Route::get('admin/sellerexpected/add','SellerExpectedPriceController@add')->name('sellerexpected.add');
Route::post('admin/sellerexpected/save','SellerExpectedPriceController@save')->name('sellerexpected.save');
Route::get('admin/sellerexpected/edit/{id}','SellerExpectedPriceController@edit')->name('sellerexpected.edit');
Route::post('admin/sellerexpected/update/{id}','SellerExpectedPriceController@update')->name('sellerexpected.update');
Route::get('admin/sellerexpected/delete/{id}','SellerExpectedPriceController@delete')->name('sellerexpected.delete');

Route::get('admin/sellerbudget','SellerBudgetRangeController@index')->name('sellerbudget');
Route::get('admin/sellerbudget/add','SellerBudgetRangeController@add')->name('sellerbudget.add');
Route::post('admin/sellerbudget/save','SellerBudgetRangeController@save')->name('sellerbudget.save');
Route::get('admin/sellerbudget/edit/{id}','SellerBudgetRangeController@edit')->name('sellerbudget.edit');
Route::post('admin/sellerbudget/update/{id}','SellerBudgetRangeController@update')->name('sellerbudget.update');
Route::get('admin/sellerbudget/delete/{id}','SellerBudgetRangeController@delete')->name('sellerbudget.delete');

Route::get('admin/manpower','ManpowerController@index')->name('manpower');
Route::get('admin/manpower/add','ManpowerController@add')->name('manpower.add');
Route::post('admin/manpower/save','ManpowerController@save')->name('manpower.save');
Route::get('admin/manpower/edit/{id}','ManpowerController@edit')->name('manpower.edit');
Route::post('admin/manpower/update/{id}','ManpowerController@update')->name('manpower.update');
Route::get('admin/manpower/delete/{id}','ManpowerController@delete')->name('manpower.delete');

Route::get('admin/investmenttype','InvestmentTypeController@index')->name('investmenttype');
Route::get('admin/investmenttype/add','InvestmentTypeController@add')->name('investmenttype.add');
Route::post('admin/investmenttype/save','InvestmentTypeController@save')->name('investmenttype.save');
Route::get('admin/investmenttype/edit/{id}','InvestmentTypeController@edit')->name('investmenttype.edit');
Route::post('admin/investmenttype/update/{id}','InvestmentTypeController@update')->name('investmenttype.update');
Route::get('admin/investmenttype/delete/{id}','InvestmentTypeController@delete')->name('investmenttype.delete');

Route::get('admin/material','MaterialController@index')->name('material');
Route::get('admin/material/add','MaterialController@add')->name('material.add');
Route::post('admin/material/save','MaterialController@save')->name('material.save');
Route::get('admin/material/edit/{id}','MaterialController@edit')->name('material.edit');
Route::post('admin/material/update/{id}','MaterialController@update')->name('material.update');
Route::get('admin/material/delete/{id}','MaterialController@delete')->name('material.delete');

Route::get('admin/construction','ConstructionController@index')->name('construction');
Route::get('admin/construction/add','ConstructionController@add')->name('construction.add');
Route::post('admin/construction/save','ConstructionController@save')->name('construction.save');
Route::get('admin/construction/edit/{id}','ConstructionController@edit')->name('construction.edit');
Route::post('admin/construction/update/{id}','ConstructionController@update')->name('construction.update');
Route::get('admin/construction/delete/{id}','ConstructionController@delete')->name('construction.delete');

Route::get('admin/seo','SeoController@index')->name('seo');
Route::get('admin/seo/add','SeoController@add')->name('seo.add');
Route::post('admin/seo/save','SeoController@save')->name('seo.save');
Route::get('admin/seo/edit/{id}','SeoController@edit')->name('seo.edit');
Route::post('admin/seo/update/{id}','SeoController@update')->name('seo.update');
Route::get('admin/seo/delete/{id}','SeoController@delete')->name('seo.delete');