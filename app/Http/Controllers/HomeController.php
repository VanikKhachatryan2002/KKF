<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeCarouselController;


class HomeController extends Controller
{
    protected $carouselController;
    protected $worksController;

    public function __construct(HomeCarouselController $carouselController,HomeWorksController $worksController)
    {
        $this->carouselController = $carouselController;
        $this->worksController = $worksController;
    }

    public function index()
    {
        $images = $this->carouselController->getImages();
        $works = $this->worksController->getWorks();

        return view('home', compact('images','works'));
    }
}
