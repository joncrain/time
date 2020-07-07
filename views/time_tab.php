<div id="time-tab"></div>
<h2 data-i18n="time.title"></h2>

<table id="time-tab-table"></table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/time/get_data/' + serialNumber, function(data){
        var table = $('#time-tab-table');
        $.each(data, function(key,val){
            var th = $('<th>').text(i18n.t('time.column.' + key));
            var td = $('<td>').text(val);
            table.append($('<tr>').append(th, td));
        });
    });
});
</script>
