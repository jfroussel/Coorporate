
$(document).ready(function() {
    $( "#page-builder" ).resizable({
        helper: "ui-resizable-helper"
    });

    $( "#page-header" ).resizable({
        helper: "ui-resizable-helper"
    });

    $( "#page-sidebar" ).resizable({
        helper: "ui-resizable-helper"
    });

    $( "#page-content" ).resizable({
        helper: "ui-resizable-helper"
    });
    $( "#page-content" ).droppable({

        drop: function( event, ui ) {
            $( this )
                .addClass( "ui-state-highlight" )
                .find( "p" );

        }
    });

    $( "#pull-left" ).draggable({
        appendTo: "p",
        helper: "clone"


    });

    $( "#page-footer" ).resizable({
        helper: "ui-resizable-helper"
    });

});
