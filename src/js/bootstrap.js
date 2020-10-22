window.$ = window.jQuery = require('jquery')

require('jquery-easing');

try {
    window.Popper = require('popper.js').default
    require('bootstrap');
} catch (error) {
    console.log(error);
}