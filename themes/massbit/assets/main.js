// Webpack Imports
import * as bootstrap from 'bootstrap';


(function() {
    'use strict';

    // Focus input if Searchform is empty
    [].forEach.call(document.querySelectorAll('.search-form'), (el) => {
        el.addEventListener('submit', function(e) {
            var search = el.querySelector('input');
            if (search.value.length < 1) {
                e.preventDefault();
                search.focus();
            }
        });
    });

    // Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl, {
            trigger: 'focus',
        });
    });

    var noticeModalEl = document.getElementById("noticeModal");
	if (noticeModalEl) {
		var noticeModal = new bootstrap.Modal(noticeModalEl, {});
		if (!localStorage.getItem('isShowPopup')) {
			window.setTimeout(() => {
				noticeModal.show();
			}, 2000)
		} else {
			$('body').addClass('testnet');
			$('.mb-banner-testnet').fadeIn(300);
		}
		noticeModalEl.addEventListener('hidden.bs.modal', function (event) {
			$('body').addClass('testnet');
			$('.mb-banner-testnet').fadeIn(300);
    		sessionStorage.setItem('isShowPopup', true);
		})
	}
})();