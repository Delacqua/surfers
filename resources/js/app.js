
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.


Vue.component('example-component', require('./components/ExampleComponent.vue'));
 */
 
const app = new Vue({
    el: '#app'
});


/**Change Products Description ( Index ) **/ 
$(document).on('click', '#thumbP', function(){
	$('#thumbP.active').removeClass('active');
	$(this).addClass('active');
	var fileName = $(this).attr('src');
	$("#imgMain").attr("src",fileName);
});


/**Change Products Description ( Index ) **/
var currentDescription = "description";

function cleanDescrip () {
	$('#' + currentDescription).removeClass('active');
	$('#' + currentDescription + 'T').addClass('d-none');
	$('#' + currentDescription).find('span').remove();

}

function nextDescrip (selected) {
	var id = '#' + selected;
	$(id).addClass('active');
	$(id).append( '<span class="sr-only">(current)</span>' );
	$(id + 'T').removeClass('d-none');
}

$(document).on('click', '.changeDescrip', function(){
	var idVecchio = '#' + currentDescription + 'T';
	var idNuovo = '#' + $(this).attr('id') + 'T';

	cleanDescrip();
	nextDescrip($(this).attr('id'));

	currentDescription = $(this).attr('id');
});

/** --- **/