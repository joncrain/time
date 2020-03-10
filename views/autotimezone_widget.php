<div class="col-lg-4 col-md-6">

    <div class="panel panel-default" id="autotimezone-widget">

        <div class="panel-heading" data-container="body" >

            <h3 class="panel-title"><i class="fa fa-globe"></i> <span data-i18n="time.autotimezone_widget.title"></span></h3>

        </div>

        <div class="list-group scroll-box">
            <span class="list-group-item" data-i18n="loading"></span>
        </div>

    </div><!-- /panel -->

</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

    var box = $('#autotimezone-widget div.scroll-box');

    $.getJSON( appUrl + '/module/time/get_autolist', function( data ) {

        box.empty();
        if(data.length){
            $.each(data, function(i,d){
                var badge = '<span class="badge pull-right">'+d.count+'</span>';
                var status=d.autotimezone
                status = status == 1 ? i18n.t('yes') :
                (status == 0 && status != '' ? i18n.t('no') : '')
                box.append('<a href="'+appUrl+'/show/listing/time/time/" class="list-group-item">'+status+badge+'</a>')
            });
        }
        else{
            box.append('<span class="list-group-item">'+i18n.t('no_data')+'</span>');
        }
    });
});
</script>
