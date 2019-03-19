$( document ).ready(function() {

    $(function() {
        $("section").each(function() {
            var hue = 'rgba(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) +  ',' + (0.8) + ')';
            $(this).css("background-color", hue);
        });
    });

});