<div id="time-tab"></div>
<h2 data-i18n="time.title"></h2>

<table id="time-tab-table"></table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/time/get_data/' + serialNumber, function(data){
        var table = $('#time-tab-table');
        $.each(data, function(key,val){
            if (key == "autotimezone" || key == "networktime_status") {
                val = val == 1 ? i18n.t('yes') :
         		(val == 0 && val != null ? i18n.t('no') : '')
            }
            var th = $('<th>').text(i18n.t('time.column.' + key));
            var td = $('<td>').text(val);
            table.append($('<tr>').append(th, td));
        });
    });
});
</script>
