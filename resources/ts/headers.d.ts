import Alpine from 'alpinejs';
import axios from 'axios';

declare global {
  interface Window {
    Alpine: typeof Alpine;
    axios: typeof axios;
  }
}
