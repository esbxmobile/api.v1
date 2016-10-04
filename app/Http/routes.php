<?php


//agrupamento de rotas protegidas por OAuth2
Route::group(['prefix'=>'api', 'middleware'=>'oauth', 'as'=>'api.'], function (){

});


/* teste com controller */
Route::get('/getallboxes', 'SearchBoxesController@getAllBoxes');


/* Teste access_token com refresh_token */
Route::post('access_token', function (){
    return Response::json(Authorizer::issueAccessToken());
});

/* testes postman */
Route::get('/userteste', function (\Api\Repositories\UserRepository $userRepository){
    $users = $userRepository->all();

    return $users;
});

Route::get('/boxteste', function (\Api\Repositories\BoxRepository $boxRepository){
    $boxes = $boxRepository->all();

    return $boxes;
});

Route::get('/finduser:{id}', function (\Api\Repositories\UserRepository $userRepository, $id){
    $user = $userRepository->find($id);

    return $user;
});

Route::get('/finduserbox:{id}', function (\Api\Repositories\UserRepository $userRepository, $id){
    $box = $userRepository->find($id)->box;

    return $box;
});

Route::get('/finduservehicle:{id}', function (\Api\Repositories\UserRepository $userRepository, $id){
    $vehicle = $userRepository->find($id)->vehicle;

    return $vehicle;
});


