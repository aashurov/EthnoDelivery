$(function () {
    'use strict';
    var CountSelect = $('.countries'),
        myCountries = ['Россия', 'Узбекистан', 'Казахстан'],
        Russia = ['Москва', 'Санк Петербург', 'Екатеринбург'],
        Uzbekistan = ['Ташкент', 'Самарканд'],
        Kazakhstan = ['Астана', 'Алма-ата', 'Павлодар', 'Атрау'];
    // Function Create Option    

    function CreateOption(valriable, elementToAppend) {
        var i;
        for (i = 0; i < valriable.length; i += 1) {
            $('<option>', {
                    value: valriable[i],
                    text: valriable[i],
                    id: valriable[i]
                })
                .appendTo(elementToAppend);
        }
    }

    // Create Option myCountries
    CreateOption(myCountries, $('.countries'));
    // Create Option Russia
    CreateOption(Russia, $('.Russia'));
    // Create Option Uzbekistan
    CreateOption(Uzbekistan, $('.Uzbekistan'));
    // Create Option Kazakhstan
    CreateOption(Kazakhstan, $('.Kazakhstan'));
    // Hide All Select
    $('.option select').hide();
    // Show First Selected
    $('.Russia').show().css('display', 'inline-block');

    // Show List Option City Whene user Chosse Countries

    CountSelect.on('change', function () {

        // get Id option 
        var myId = $(this).find(':selected').attr('id');
        console.log($(this).val());
        // Show Select Has class = Id And Hide Siblings
        $('.option select').filter('.' + myId).fadeIn(400).siblings('select').hide();

    });

});
