import './bootstrap';

import AOS from 'aos';
window.AOS = AOS;
AOS.init();

import iziToast from 'iziToast';
window.iziToast = iziToast;

window.addEventListener('alert', event => {
                
    data = {
        title: event.detail?.title,
        message: event.detail?.message,
        position: 'topRight'
    }

    switch(event.detail.type){
        case 'success':
            window.iziToast.success(data)
            break
        case 'error':
            window.iziToast.error(data)
            break
    }
})

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();