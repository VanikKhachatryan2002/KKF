<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCarouselController extends Controller
{
    public function getImages()
    {
        $images = [
            ['src' => 'images/xohanoc/xohanoc7.webp', 'alt' => 'xohanoc/xohanoc7.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/hyurasenyak/hyurasenyak1.webp', 'alt' => 'hyurasenyak/hyurasenyak1.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/ofisayin/ofisayin1.webp', 'alt' => 'ofisayin/ofisayin1.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/nnjasenyak/nnjasenyak2.webp', 'alt' => 'nnjasenyak/nnjasenyak2.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/sanhanguyc/sanhanguyc1.webp', 'alt' => 'sanhanguyc/sanhanguyc1.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/pati/pati4.webp', 'alt' => 'pati/pati4.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/xohanoc/xohanoc6.webp', 'alt' => 'xohanoc/xohanoc6.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/hyurasenyak/hyurasenyak3.webp', 'alt' => 'hyurasenyak/hyurasenyak3.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/xohanoc/xohanoc9.webp', 'alt' => 'xohanoc/xohanoc9.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/hyurasenyak/hyurasenyak2.webp', 'alt' => 'hyurasenyak/hyurasenyak2.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/hyurasenyak/hyurasenyak5.webp', 'alt' => 'hyurasenyak/hyurasenyak5.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/ofisayin/ofisayin4.webp', 'alt' => 'ofisayin/ofisayin4.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/mankakan/mankakan5.webp', 'alt' => 'mankakan/mankakan5.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/xohanoc/xohanoc19.webp', 'alt' => 'xohanoc/xohanoc19.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/hyurasenyak/hyurasenyak18.webp', 'alt' => 'hyurasenyak/hyurasenyak18.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/ofisayin/ofisayin15.webp', 'alt' => 'ofisayin/ofisayin15.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/nnjasenyak/nnjasenyak13.webp', 'alt' => 'nnjasenyak/nnjasenyak13.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/sanhanguyc/sanhanguyc5.webp', 'alt' => 'sanhanguyc/sanhanguyc5.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/pati/pati5.webp', 'alt' => 'pati/pati5.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/xohanoc/xohanoc38.webp', 'alt' => 'xohanoc/xohanoc38.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/hyurasenyak/hyurasenyak21.webp', 'alt' => 'hyurasenyak/hyurasenyak21.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/xohanoc/xohanoc68.webp', 'alt' => 'xohanoc/xohanoc68.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/hyurasenyak/hyurasenyak14.webp', 'alt' => 'hyurasenyak/hyurasenyak14.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/hyurasenyak/hyurasenyak7.webp', 'alt' => 'hyurasenyak/hyurasenyak7.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/ofisayin/ofisayin14.webp', 'alt' => 'ofisayin/ofisayin14.webp', 'height' => 300, 'width' => 300],
            ['src' => 'images/mankakan/mankakan17.webp', 'alt' => 'mankakan/mankakan17.webp', 'height' => 300, 'width' => 300]
        ];

        return $images;
    }
}


