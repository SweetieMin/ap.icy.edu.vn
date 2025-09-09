import Sortable from 'sortablejs';
window.Sortable = Sortable;

// Loại bỏ con trỏ nhấp nháy
document.addEventListener('DOMContentLoaded', function() {
    const style = document.createElement('style');
    style.textContent = `
        * {
            caret-color: transparent !important;
        }
        input, textarea, [contenteditable] {
            caret-color: transparent !important;
        }
    `;
    document.head.appendChild(style);
});
