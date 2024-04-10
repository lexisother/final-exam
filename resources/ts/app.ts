import './bootstrap';

if (window.location.pathname.endsWith('strippenkaarten')) {
  import('./stripcards');
}

if (window.location.pathname.endsWith('contact')) {
  import('./contact');
}
