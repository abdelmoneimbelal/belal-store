import './bootstrap';
import { Collapse } from 'bootstrap';

// Sidebar toggle (Bootstrap 5 + classes like SB Admin 2)
// document.addEventListener('DOMContentLoaded', () => {
//     const toggleButtons = document.querySelectorAll('#sidebarToggle, #sidebarToggleTop');
//     const body = document.body;
//     const sidebar = document.querySelector('.sidebar');

//     if (toggleButtons.length && sidebar) {
//         toggleButtons.forEach((btn) => {
//             btn.addEventListener('click', (e) => {
//                 e.preventDefault();
//                 body.classList.toggle('sidebar-toggled');
//                 sidebar.classList.toggle('toggled');

//                 if (sidebar.classList.contains('toggled')) {
//                     // Hide any open collapse menus inside the sidebar when toggled
//                     const openCollapses = sidebar.querySelectorAll('.collapse.show');
//                     openCollapses.forEach((el) => {
//                         // Use Bootstrap 5 Collapse API to hide
//                         try {
//                             const collapse = Collapse.getOrCreateInstance(el);
//                             collapse.hide();
//                         } catch (_) {
//                             el.classList.remove('show');
//                         }
//                     });
//                 }
//             });
//         });
//     }
// });
