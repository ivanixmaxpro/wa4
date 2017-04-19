<!--   Core JS Files   -->
<script src="view/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="view/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="view/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="view/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="view/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="view/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="view/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

        },{
            type: 'info',
            timer: 4000
        });

    });
</script>

</html>
