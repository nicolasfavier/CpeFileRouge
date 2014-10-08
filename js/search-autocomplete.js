$(function(){

$('#autocomplete').autocomplete({
    paramName: 'searchString',
    serviceUrl: 'serveur/controllers/keywordsController.php',
    dataType : 'json',
    transformResult: function(response) {

        return {
            suggestions: $.map(response, function(dataItem) {
                return { value: dataItem.name, data: dataItem.idK };
            })
        };
    },
    onSelect: function (suggestion) {}
});    


});