<?php

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
    $user = $userRepository->find($id)->box;

    return $user;
});

