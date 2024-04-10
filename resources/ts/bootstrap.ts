import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let bodyhandler: (this: HTMLBodyElement) => void;
const container = document.querySelector('#container')!;
const button = document.querySelector('#sidebar-button')!;
const sidebar = document.querySelector('#sidebar')!;

button.addEventListener('click', function (this: HTMLButtonElement) {
    document.body.classList.add('overflow-hidden');
    sidebar.classList.remove('-translate-x-full');
    sidebar.classList.add('transform-none');

    bodyhandler = function (this: HTMLBodyElement) {
        document.body.classList.remove('overflow-hidden');
        sidebar.classList.remove('transform-none');
        sidebar.classList.add('-translate-x-full');
        container.removeEventListener('click', bodyhandler);
    };
    container.addEventListener('click', bodyhandler);
});
