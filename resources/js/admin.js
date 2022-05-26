require('./bootstrap');

const deleteForms = document.querySelectorAll('.delete-form');

deleteForms.forEach(form => {
	form.addEventListener('submit', function(e) {
		e.preventDefault();
		if ( window.confirm(`Do you want to cancel ${this.getAttribute('post-title')}?`) ) {
			this.submit();
		}
	})
})