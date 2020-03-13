<div class="col-lg-6">

<div class="panel panel-default" id="timezone_graph-widget">

    <div class="panel-heading">

        <h3 class="panel-title"><i class="fa fa-globe"></i>
            <span data-i18n="time.timezone_widget.title"></span>
            <list-link data-url="/show/listing/time/time"></list-link>
        </h3>

    </div>

    <div class="panel-body">

        <svg style="width:100%"></svg>

    </div>

</div><!-- /panel -->

</div><!-- /col-lg-4 -->

<script>
$(document).on('appReady', function(e, lang) {

	var conf = {
        
		url: appUrl + '/module/time/get_list', // Url for json
		widget: 'timezone_graph-widget', // Widget id
        margin: {top: 20, right: 10, bottom: 20, left: 100},
		elementClickCallback: function(e){
			var label = e.data.timezone;
			window.location.href = appUrl + '/show/listing/time/time#' + label ;
		},
		labelModifier: function(label){
			return label
		}
	};

	mr.addGraph(conf);


    });
</script>
