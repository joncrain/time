<div class="col-lg-4">

<div class="panel panel-default" id="timezone_graph-widget">

    <div class="panel-heading">

        <h3 class="panel-title"><i class="fa fa-globe"></i>
            <span data-i18n="time.timezone_widget.title"></span>
            <list-link data-url="/show/listing/time/time"></list-link>
        </h3>

    </div>

    <div class="panel-body">

<svg style="width:100%; height: 300px"></svg>

</div>

</div><!-- /panel -->

</div><!-- /col-lg-4 -->

<script>
$(document).on('appReady', function(e, lang) {

    var widget = 'timezone_graph-widget' // Widget id
    var svg = '#' + widget + ' svg';
    var chart;

    var drawGraph = function(){
        var url = appUrl + '/module/time/get_list' // Url for json
        d3.json(url, function(data) {
            nv.addGraph(function() {
                var chart = nv.models.pieChart()
                    .x(function(d) { return d.timezone })
                    .y(function(d) { return d.count })
                    .showLegend(true)
                    .showLabels(false);
            d3.select(svg)
                .datum(data)
                .transition().duration(1200)
                .call(chart);

            chart.tooltip.valueFormatter(function(d){return d});
            chart.update();

            });
        });
    };

    drawGraph();

    $(document).on('appUpdate', function(){drawGraph()});

    });
</script>
