<div class="col-lg-4 col-md-6">

    <div class="panel panel-default" id="networktime-widget">

        <div class="panel-heading" data-container="body" >

            <h3 class="panel-title"><i class="fa fa-globe"></i> <span data-i18n="time.networktime_widget.title"></span></h3>

        </div>

        <div class="panel-body text-center"></div>

    </div><!-- /panel -->

</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

    var box = $('#networktime-widget div.panel-body');

    $.getJSON( appUrl + '/module/time/get_netlist', function( data ) {

        box.empty();
        if(data.length){
            $.each(data, function(i,d){
                var badge = '<span class="badge pull-right">'+d.count+'</span>';
                var status=d.networktime_status
                status = status == 1 ? 
                box.append(' <a href="'+appUrl+'/show/listing/time/time/" class="btn btn-success"><span class="bigger-150">'+d.count+'</span><br>&nbsp;&nbsp;'+i18n.t('yes')+'&nbsp;&nbsp;</a>')
                 :
                (status == 0 ? box.append(' <a href="'+appUrl+'/show/listing/time/time/" class="btn btn-warning"><span class="bigger-150">'+d.count+'</span><br>&nbsp;&nbsp;'+i18n.t('no')+'&nbsp;&nbsp;</a>') : '')
            });
        }
        else{
            box.append('<span class="btn btn-warning">'+i18n.t('no_data')+'</span>');
        }
    });
});
</script>