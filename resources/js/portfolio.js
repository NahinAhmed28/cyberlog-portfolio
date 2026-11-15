// Only ship the Bootstrap interactions used by the public site.
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';
import ScrollSpy from 'bootstrap/js/dist/scrollspy';
import '../../public/js/scripts.js';
import '../../public/js/cyberlog.js';

window.bootstrap = { ScrollSpy };
