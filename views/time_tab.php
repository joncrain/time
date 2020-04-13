<div id="time-tab"></div>
<h2 data-i18n="time.title"></h2>

<table style="width: 550px;">
<tr>
        <th data-i18n="time.listing.timezone">></th>
        <td id="timezone"></td>
    </tr>
    <tr>
        <th data-i18n="time.listing.autotimezone">></th>
        <td id="autotimezone"></td>
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
        
        var autotimezone=data['autotimezone']
        autotimezone = autotimezone == 1 ? i18n.t('yes') :
	    (autotimezone == 0 && autotimezone != null ? i18n.t('no') : '')
        $('#autotimezone').text(autotimezone)

        var status=data['networktime_status']
        status = status == 1 ? i18n.t('yes') :
	    (status == 0 && status != null ? i18n.t('no') : '')
        $('#networktime_status').text(status)

        $('#networktime_server').text(data['networktime_server'])
    });
});
</script>
