require('./bootstrap');
require('./swiper/swiper')
require('./pages/home/home');
require('./header/header');
import 'lazysizes';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 2000,
    once: false,
});
