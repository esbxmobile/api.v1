<?php

namespace Api\Http\Controllers;

use Api\Repositories\BoxRepository;
use Api\Repositories\UserRepository;
use Illuminate\Http\Request;

use Api\Http\Requests;

class SearchBoxesController extends Controller
{

    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var BoxRepository
     */
    private $boxRepository;

    public function __construct(UserRepository $userRepository, BoxRepository $boxRepository)
    {

        $this->userRepository = $userRepository;
        $this->boxRepository = $boxRepository;
    }

    public function getAllBoxes(){
        $boxes = $this->userRepository->all();

        return $boxes;
    }
}
