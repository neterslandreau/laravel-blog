window.$ = window.jQuery = require('jquery')
require('selectize');
var bootstrap = require('bootstrap-sass');

$( document ).ready(function() {
    if (window.location.pathname.match(/create/)) {
        $('#tags').selectize({
            delimiter: ',',
            persist: false,
            valueField: 'tag',
            labelField: 'tag',
            searchField: 'tag',
            options: tags,
            create: function(input) {
                return {
                    tag: input
                }
            }
        });
    }
});