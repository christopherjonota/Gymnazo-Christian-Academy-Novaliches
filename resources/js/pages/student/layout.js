// components css
import '../../../css/pages/student/components/topbar.css';
import '../../../css/pages/student/partials/sidebar.css';

import '../../../js/pages/student/partials/sidebar.js';


document.querySelector('.home').addEventListener('click', function() {
    window.location.href = '/student/home';
});

document.querySelector('.transaction').addEventListener('click', function() {
    window.location.href = '/student/transaction';
});