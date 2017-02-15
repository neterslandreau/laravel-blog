require('./bootstrap');
require('selectize');
require('./jquery.tagcloud');

$( document ).ready(function() {
    if (window.location.pathname.match(/create|edit/)) {
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
    $('#tagcloud a').tagcloud({
        color: { start: '#3498db', end: '#46cfb0' }
    });
});