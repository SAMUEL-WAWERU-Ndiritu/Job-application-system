$(document).ready(function(){
    $('#get_first').click(function(){
        $('#first').show();
        $('#second').hide();
        $('#third').hide();
        $('#four').hide();
        $('#five').hide();
        $('#six').hide();


    });
    $('#get_second').click(function(){
        $('#first').hide();
        $('#second').show();
        $('#third').hide();
        $('#four').hide();
        $('#five').hide();
        $('#six').hide();
    })
    $('#get_third').click(function(){
        $('#first').hide();
        $('#second').hide();
        $('#third').show();
        $('#four').hide();
        $('#five').hide();
        $('#six').hide();
    })
    $('#get_fourth').click(function(){
        $('#first').hide();
        $('#second').hide();
        $('#third').hide();
        $('#four').show();
        $('#five').hide();
        $('#six').hide();
    })
    $('#get_fivth').click(function(){
        $('#first').hide();
        $('#second').hide();
        $('#third').hide();
        $('#four').hide();
        $('#five').show();
        $('#six').hide();
    })
    $('#get_sixth').click(function(){
        $('#first').hide();
        $('#second').hide();
        $('#third').hide();
        $('#four').hide();
        $('#five').hide();
        $('#six').show();
    })
})

