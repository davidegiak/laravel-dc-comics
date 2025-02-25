import './bootstrap'; //non è la libreria Bootstrap CSS

import '~resources/scss/app.scss'

import * as bootstrap from 'bootstrap'
import { Axios } from 'axios';

import.meta.glob([
    '../img/**'
])

const swiper = new Swiper('.swiper', {
    // Optional parameters
    // direction: 'vertical',
    // loop: true,
    effect: 'cards',
    perSlideOffset: 8,
    perSlideRotate: 2,
    rotate: true,
    slideShadows: true,

    // If we need pagination
    // pagination: {
    //     el: '.swiper-pagination',
    // },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    // },
});