var objects = [];

$(document).ready(function() {
    $('span').each(function( index ) {
        var a = {
            item: $(this)
        };
        objects.push(a);
    });

    doItem();
});


function doItem()
{
    if ( objects.length !== 0 )
    {
        doAjax( objects[0].item );
        objects.remove(0);
    }
}

// Array Remove - By John Resig (MIT Licensed)
// http://ejohn.org/blog/javascript-array-remove/
Array.prototype.remove = function (from, to) {
    var rest = this.slice((to || from) + 1 || this.length);
    this.length = from < 0 ? this.length + from : from;
    return this.push.apply(this, rest);
};

function doAjax(item)
{
    $( item ).addClass("label-info").text("Loading...");

    $.ajax({
        type:       'POST',
        url:        'delay.php',
        data:       'id=' + $( item ).attr('id'),
        dataType:   'text',
        timeout:    3000,
        success: function(response) {
            $( item ).removeClass("label-info").addClass("label-success").text("Success!");
            doItem();
        },
        error: function(x, t, m) {
            if( t === 'timeout' ) {
                $( item ).removeClass("label-info").addClass("label-warning").text("Timeout");
                doItem();
            } else {
                console.log(t);
                $( item ).removeClass("label-info").addClass("label-important").text("Error");
                doItem();
            }
        }
    });
}
