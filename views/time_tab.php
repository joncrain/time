<div id="time-tab"></div>
<h2 data-i18n="time.title"></h2>

<table>
    <tr>
        <th data-i18n="time.listing.timezone">></th>
        <td id="timezone"></td>
    </tr>
    <tr>
        <th data-i18n="time.listing.networktime_status">></th>
        <td id="networktime_status"></td>
    </tr>
    <tr>
        <th data-i18n="time.listing.networktime_server">></th>
        <td id="networktime_server"></td>
    </tr>
</table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/time/get_data/' + serialNumber, function(data){
        $('#timezone').text(data['timezone'])
        $('#networktime_status').text(data['networktime_status'])
        $('#networktime_server').text(data['networktime_server'])
    });
});
</script>
