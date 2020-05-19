var $select = $('select')

function hideAllColumns() {
    for (var i = 0; i <= 10; i++) {
        columns = my_table.column(i).visible(0);
    }
}

function showAllColumns() {
    for (var i = 0; i <= 10; i++) {
        columns = my_table.column(i).visible(1);
    }
}
jQuery(document).ready(function () {
    jQuery('#my_table').css('width', '100%');
    my_table = jQuery('#my_table').DataTable({
        "scrollX": true,
        responsive: true
    });
    jQuery('#tooggle-column').multipleSelect({
        width: 200,
        onClick: function (view) {
            var selectedItems = $select.multipleSelect("getSelects");
            hideAllColumns();
            for (var i = 0; i < selectedItems.length; i++) {
                var s = selectedItems[i];
                my_table.column(s).visible(1);
            }

            jQuery('#my_table').css('width', '100%');

        },
        onCheckAll: function () {
            showAllColumns();
            jQuery('#my_table').css('width', '100%');
        },
        onUncheckAll: function () {
            hideAllColumns();
            jQuery('#my_table').css('width', '100%');
        }



    });
});
