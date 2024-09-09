<div id="time-tab"></div>
<h2 data-i18n="time.title"></h2>

<div id="time-msg" data-i18n="listing.loading" class="col-lg-12 text-center"></div>
<div id="time-table"></div>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/time/get_data/' + serialNumber, function(data){

        // Check if we have Time data
        if (data.length == 0){
            $('#time-msg').text(i18n.t('no_data'));
        } else {
            // Hide loading message
            $('#time-msg').text('');

            var rows = ''

            for (var prop in data){

                // Do nothing for empty values to blank them
                if ((data[prop] == '' || data[prop] == null) && data[prop] !== 0){
                    rows = rows

                // Format Yes booleans
                } else if((prop == 'autotimezone' || prop == 'networktime_status' || prop == 'location_enabled' || prop == 'automatic_time_only_enabled' || prop == 'automatic_time_zone_enabled') && data[prop] == 1){
                   rows = rows + '<tr><th>'+i18n.t('time.'+prop)+'</th><td>'+i18n.t('yes')+'</td></tr>';
                // Format No booleans
                } else if((prop == 'autotimezone' || prop == 'networktime_status' || prop == 'location_enabled' || prop == 'automatic_time_only_enabled' || prop == 'automatic_time_zone_enabled') && data[prop] == 0){
                   rows = rows + '<tr><th>'+i18n.t('time.'+prop)+'</th><td>'+i18n.t('no')+'</td></tr>';

                } else {
                    rows = rows + '<tr><th>'+i18n.t('time.'+prop)+'</th><td>'+data[prop]+'</td></tr>';
                }
            }

            $('#time-table')
            .append($('<div style="max-width:450px;">')
                .append($('<table>')
                    .addClass('table table-striped table-condensed')
                    .append($('<tbody>')
                        .append(rows))))
        }
    });
});
</script>
