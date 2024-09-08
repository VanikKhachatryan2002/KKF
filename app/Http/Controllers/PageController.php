<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function services()
    {
        $services = [
            [
                'imgUrl' => 'https://vanikkhachatryan2002.github.io/KKFourniture/services/xorhrdatvutyun.webp',
                'title' => 'ԽՈՐՀՐԴԱՏՎՈՒԹՅՈՒՆ',
                'desc' => 'Գործում է Անվճար Խորհրդատվություն: Մեր հմուտ մասնագետները կօգնեն ձեզ ճիշտ կողմնորոշվել ձեր ընտրության մեջ: Դուք կարող եք ընտրել ձեր նախընտրած դիզայնը, չափսը , հավաքածուն:',
            ],
            [
                'imgUrl' => 'https://vanikkhachatryan2002.github.io/KKFourniture/services/chapagrum.webp',
                'title' => 'ՉԱՓԱԳՐՈՒՄ',
                'desc' => 'Գործում է Անվճար Չափագրում: Մասնագետների կողմից մանրակրկիտ չափվում է տվյալ կահույքի և սենյակի տվյալ տեղամասի չափսերը:',
            ],
            [
                'imgUrl' => 'https://vanikkhachatryan2002.github.io/KKFourniture/services/3D-modelavorum.webp',
                'title' => '3D ՄՈԴԵԼԱՎՈՐՈՒՄ',
                'desc' => '3D մոդելավորումը Անվճար է: Մոդելավորված եռաչափ կահույքի նախագիծը օգնում է ցույց տալ հաճախորդին իր նախընտրած կահույքը և պատկերացում կազմել կահույքի վերջնական տեսքի մասին մինչ տեղադրումը: Հաճախորդը կարող է կատարել ձևափոխություններ և ստանալ իր ընտրած կահույքի վերջնական տեսքի նախագիծը:',
            ],
            [
                'imgUrl' => 'https://vanikkhachatryan2002.github.io/KKFourniture/services/araqum.webp',
                'title' => 'ԱՌԱՔՈՒՄ',
                'desc' => 'Կահույքի Անվնաս փոխադրումը անվճար է Երևանի ողջ տարածքում:',
            ],
            [
                'imgUrl' => 'https://vanikkhachatryan2002.github.io/KKFourniture/services/texadrum.webp',
                'title' => 'ՏԵՂԱԴՐՈՒՄ',
                'desc' => 'Գործում է Անվճար Տեղադրում: Տեղադրումը կատարվում է մեր Վարպետների կողմից:',
            ],
        ];

        return view('services', compact('services'));
    }
}
