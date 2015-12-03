
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




    //Basic Example
    $("#data-table-basic").bootgrid({
        css: {
            icon: 'zmdi icon',
            iconColumns: 'zmdi-view-module',
            iconDown: 'zmdi-expand-more',
            iconRefresh: 'zmdi-refresh',
            iconUp: 'zmdi-expand-less'
        },
    });

    //Selection
    $("#data-table-selection").bootgrid({
        css: {
            icon: 'zmdi icon',
            iconColumns: 'zmdi-view-module',
            iconDown: 'zmdi-expand-more',
            iconRefresh: 'zmdi-refresh',
            iconUp: 'zmdi-expand-less'
        },
        selection: true,
        multiSelect: true,
        rowSelect: true,
        keepSelection: true
    });

    //Command Buttons
    $("#data-table-command").bootgrid({
        css: {
            icon: 'zmdi icon',
            iconColumns: 'zmdi-view-module',
            iconDown: 'zmdi-expand-more',
            iconRefresh: 'zmdi-refresh',
            iconUp: 'zmdi-expand-less'
        },
        formatters: {
            "commands": function(column, row) {
                return "<button type=\"button\" class=\"btn btn-icon command-edit\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " +
                "<button type=\"button\" class=\"btn btn-icon command-delete\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
            }
        }
    });

});
