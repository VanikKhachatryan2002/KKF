<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeWorksController extends Controller
{
    public function getWorks()
    {
        $works = [
            ['href' => '/categories/xohanoc', 'img' => 'images/xohanoc/xohanoc7.webp', 'title' => 'ԽՈՀԱՆՈՑ'],
            ['href' => '/categories/hyurasenyak', 'img' => 'images/hyurasenyak/hyurasenyak1.webp', 'title' => 'ՀՅՈՒՐԱՍԵՆՅԱԿ'],
            ['href' => '/categories/ofisayin', 'img' => 'images/ofisayin/ofisayin1.webp', 'title' => 'ՕՖԻՍԱՅԻՆ'],
            ['href' => '/categories/nnjasenyak', 'img' => 'images/nnjasenyak/nnjasenyak2.webp', 'title' => 'ՆՆՋԱՍԵՆՅԱԿ'],
            ['href' => '/categories/sanhanguyc', 'img' => 'images/sanhanguyc/sanhanguyc1.webp', 'title' => 'ՍԱՆՀԱՆԳՈՒՅՑ'],
            ['href' => '/categories/mankakan', 'img' => 'images/mankakan/mankakan3.webp', 'title' => 'ՄԱՆԿԱԿԱՆ'],
            ['href' => '/categories/pati', 'img' => 'images/pati/pati4.webp', 'title' => 'ՊԱՏԻ'],
            ['href' => '/KKFourniture/xohanoc', 'img' => 'images/xohanoc/xohanoc6.webp', 'title' => 'ԽՈՀԱՆՈՑ'],
            ['href' => '/KKFourniture/hyurasenyak', 'img' => 'images/hyurasenyak/hyurasenyak3.webp', 'title' => 'ՀՅՈՒՐԱՍԵՆՅԱԿ'],
        ];

        return $works;
    }
}
