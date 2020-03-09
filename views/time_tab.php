<div id="time-tab"></div>
<h2 data-i18n="time.title"></h2>

<table>
    <tr>
        <th data-i18n="time.listing.timezone">></th>
        <td id="timezone"></td>
    </tr>
</table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/time/get_data/' + serialNumber, function(data){
        $('#timezone').text(data['timezone'])
    });
});
</script>
