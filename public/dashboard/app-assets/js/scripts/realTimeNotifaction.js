import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// resources/js/bootstrap.js

import Echo from 'laravel-echo';


window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true,
    debug: true, // Enable Pusher debugging

});

window.Echo.private(`order.${shopId}`)
    .listen('OrderPlaced', (event) => {
        console.log('Order Placed:', event.order);
        // Handle the order notification here (e.g., display a notification)

         // Append a new <li> element with the order notification content
         let notificationList = document.querySelector('.scrollable-container.media-list');

         let liElement = document.createElement('li');
         liElement.innerHTML = `
             <a href="javascript:void(0)">
                 <div class="media">
                     <div class="media-left align-self-center"><i class="feather icon-plus-square icon-bg-circle bg-cyan"></i></div>
                     <div class="media-body">
                         <h6 class="media-heading">You have a new order!</h6>
                         <p class="notification-text font-small-3 text-muted">${event.order.product_name} - ${event.order.quantity} units</p>
                         <small><time class="media-meta text-muted" datetime="${event.order.created_at}">${event.order.created_at}</time></small>
                     </div>
                 </div>
             </a>
         `;
 
         // Insert the new <li> element at the beginning of the notification list
         notificationList.insertBefore(liElement, notificationList.firstChild);
    });


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
