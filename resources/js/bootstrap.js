const _ = require('lodash');

try {
    const Popper = require('popper.js').default;
    const $ = jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}


const axios = require('axios');

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


// let token = document.head.querySelector('meta[name="csrf-token"]');
//
// if (token) {
//     axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
// } else {
//     console.log('CSRF token not found');
// }


// import Echo from 'laravel-echo'
// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
