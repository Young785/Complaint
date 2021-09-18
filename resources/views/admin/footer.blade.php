<!--right sidebar start-->
<div class="right-sidebar">
    <div class="search-row">
        <input type="text" placeholder="Search" class="form-control">
    </div>
    <div class="right-stat-bar">
    <ul class="right-side-accordion">
    <li class="widget-collapsible">
        <a href="#" class="head widget-head red-bg active clearfix">
            <span class="pull-left">work progress (5)</span>
            <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
        </a>
        <ul class="widget-container">
            <li>
                <div class="prog-row side-mini-stat clearfix">
                    <div class="side-graph-info">
                        <h4>Target sell</h4>
                        <p>
                            25%, Deadline 12 june 13
                        </p>
                    </div>
                    <div class="side-mini-graph">
                        <div class="target-sell">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </li>
    </ul>
    </div>
    </div>
    <!--right sidebar end-->
    
    </section>
<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="/admin/js/jquery.js"></script>
<script src="/admin/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/admin/js/jquery.scrollTo.min.js"></script>
<script src="/admin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="/admin/js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="/admin/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="/admin/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="/admin/js/flot-chart/jquery.flot.js"></script>
<script src="/admin/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="/admin/js/flot-chart/jquery.flot.resize.js"></script>
<script src="/admin/js/flot-chart/jquery.flot.pie.resize.js"></script>

<!--common script init for all pages-->
<script src="/admin/js/scripts.js"></script>

<script>
    function markRead() {
        $.get("/markAsRead")
    }

    setTimeout(() => {
        var alertId = document.getElementById('remove')
        alertId.classList.add('modal')
    }, 3000);

</script>

</body>
</html>
