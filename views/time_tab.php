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

                // Format Yes booleans
                if((prop == 'autotimezone' || prop == 'networktime_status') && data[prop] == 1){
                   rows = rows + '<tr><th>'+i18n.t('time.'+prop)+'</th><td>'+i18n.t('yes')+'</td></tr>';
                // Format No booleans
                } else if((prop == 'autotimezone' || prop == 'networktime_status') && data[prop] == 0){
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
