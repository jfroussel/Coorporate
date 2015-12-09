<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPOnline</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="{{ URL::asset('material/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('material/vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('material/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('material/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ URL::asset('material/css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('material/css/app.min.2.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('material/css/app.css') }}" rel="stylesheet">



</head>
<body>

@include('header')

@include('footer')



    <div class="container-fluid" style="padding-left: 0px; padding-right:0px">
        @yield('content')
    </div>


      <!-- Javascript Libraries -->
            <script src="{{ URL::asset('material/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/flot/jquery.flot.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/flot.curvedlines/curvedLines.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/sparklines/jquery.sparkline.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/moment/min/moment.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js') }}"></script>


            <!-- Placeholder for IE9 -->
            <!--[if IE 9 ]>
                <script src="{{ URL::asset('material/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
            <![endif]-->
            <script src="{{URL::asset('material/vendors/bootgrid/jquery.bootgrid.min.js')}}"></script>
            <script src="{{ URL::asset('material/js/flot-charts/curved-line-chart.js') }}"></script>
            <script src="{{ URL::asset('material/js/flot-charts/line-chart.js') }}"></script>
            <script src="{{ URL::asset('material/js/charts.js') }}"></script>
            <script src="{{ URL::asset('material/js/charts.js') }}"></script>
            <script src="{{ URL::asset('material/js/functions.js') }}"></script>
            <script src="{{ URL::asset('material/js/demo.js') }}"></script>
            <script src="{{ URL::asset('material/js/app.js') }}"></script>

            <script type='text/javascript'>var fc_CSS=document.createElement('link');fc_CSS.setAttribute('rel','stylesheet');var isSecured = (window.location && window.location.protocol == 'https:');var lang = document.getElementsByTagName('html')[0].getAttribute('lang'); var rtlLanguages = ['ar','he']; var rtlSuffix = (rtlLanguages.indexOf(lang) >= 0) ? '-rtl' : '';fc_CSS.setAttribute('type','text/css');fc_CSS.setAttribute('href',((isSecured)? 'https://d36mpcpuzc4ztk.cloudfront.net':'http://assets1.chat.freshdesk.com')+'/css/visitor'+rtlSuffix+'.css');document.getElementsByTagName('head')[0].appendChild(fc_CSS);var fc_JS=document.createElement('script'); fc_JS.type='text/javascript';fc_JS.src=((isSecured)?'https://d36mpcpuzc4ztk.cloudfront.net':'http://assets.chat.freshdesk.com')+'/js/visitor.js';(document.body?document.body:document.getElementsByTagName('head')[0]).appendChild(fc_JS);window.freshchat_setting= 'eyJ3aWRnZXRfc2l0ZV91cmwiOiJkZXNpY28uZnJlc2hkZXNrLmNvbSIsInByb2R1Y3RfaWQiOm51bGwsIm5hbWUiOiJkZXNpY28iLCJ3aWRnZXRfZXh0ZXJuYWxfaWQiOm51bGwsIndpZGdldF9pZCI6ImFjMTc4ZmJkLTI2NjQtNDE3Ni1iMGMwLWZhOTAyMzIzNzAzMyIsInNob3dfb25fcG9ydGFsIjpmYWxzZSwicG9ydGFsX2xvZ2luX3JlcXVpcmVkIjpmYWxzZSwiaWQiOjkwMDAwMTcwOTQsIm1haW5fd2lkZ2V0Ijp0cnVlLCJmY19pZCI6IjFhNWQ2NDFkMzY2OWUzZDY5NjkwNWQ2ZjRmNGMxMDFiIiwic2hvdyI6MSwicmVxdWlyZWQiOjIsImhlbHBkZXNrbmFtZSI6ImRlc2ljbyIsIm5hbWVfbGFiZWwiOiJOb20iLCJtYWlsX2xhYmVsIjoiQWRyZXNzZSBlLW1haWwiLCJtZXNzYWdlX2xhYmVsIjoiTWVzc2FnZSIsInBob25lX2xhYmVsIjoiTnVtw6lybyBkZSB0w6lsw6lwaG9uZSIsInRleHRmaWVsZF9sYWJlbCI6IkNoYW1wIGRlIHRleHRlIiwiZHJvcGRvd25fbGFiZWwiOiJNZW51IGTDqXJvdWxhbnQiLCJ3ZWJ1cmwiOiJkZXNpY28uZnJlc2hkZXNrLmNvbSIsIm5vZGV1cmwiOiJjaGF0LmZyZXNoZGVzay5jb20iLCJkZWJ1ZyI6MSwibWUiOiJNb2kiLCJleHBpcnkiOjE0NTIxNzQ0NDMwMDAsImVudmlyb25tZW50IjoicHJvZHVjdGlvbiIsImRlZmF1bHRfd2luZG93X29mZnNldCI6MzAsImRlZmF1bHRfbWF4aW1pemVkX3RpdGxlIjoiVGNoYXQgZW4gY291cnMiLCJkZWZhdWx0X21pbmltaXplZF90aXRsZSI6IkRpc2N1dG9uc8KgISIsImRlZmF1bHRfdGV4dF9wbGFjZSI6IlZvdHJlIG1lc3NhZ2UiLCJkZWZhdWx0X2Nvbm5lY3RpbmdfbXNnIjoiRW4gYXR0ZW50ZSBkJ3VuIGFnZW50IiwiZGVmYXVsdF93ZWxjb21lX21lc3NhZ2UiOiJCb25qb3VywqAhIFF1ZSBwdWlzLWplIGZhaXJlIHBvdXIgdm91c8KgPyIsImRlZmF1bHRfd2FpdF9tZXNzYWdlIjoiTCd1biBkZSBub3VzIHZhIHZvdXMgcsOpcG9uZHJlIHRvdXQgZGUgc3VpdGUuIFZldWlsbGV6IHBhdGllbnRlci4iLCJkZWZhdWx0X2FnZW50X2pvaW5lZF9tc2ciOiJ7e2FnZW50X25hbWV9fSBhIHJlam9pbnQgbGUgY2hhdCIsImRlZmF1bHRfYWdlbnRfbGVmdF9tc2ciOiJ7e2FnZW50X25hbWV9fSBhIHF1aXR0w6kgbGUgY2hhdCIsImRlZmF1bHRfYWdlbnRfdHJhbnNmZXJfbXNnX3RvX3Zpc2l0b3IiOiJWb3RyZSBjaGF0IGEgw6l0w6kgdHJhbnNmw6lyw6kgdmVycyB7e2FnZW50X25hbWV9fSIsImRlZmF1bHRfdGhhbmtfbWVzc2FnZSI6Ik1lcmNpIGQnYXZvaXIgZGlzY3V0w6kgYXZlYyBub3VzLiBTaSB2b3VzIGF2ZXogZCdhdXRyZXMgcXVlc3Rpb25zLCBuJ2jDqXNpdGV6IHBhcyDDoCBub3VzIGZhaXJlIHNpZ25lwqAhIiwiZGVmYXVsdF9ub25fYXZhaWxhYmlsaXR5X21lc3NhZ2UiOiJOb3VzIHNvbW1lcyBkw6lzb2zDqXMsIHRvdXMgbm9zIGFnZW50cyBzb250IG9jY3Vww6lzLiBWZXVpbGxleiBub3VzIGxhaXNzZXIgdW4gbWVzc2FnZSBldCBub3VzIHZvdXMgY29udGFjdGVyb25zIGTDqHMgcXVlIHBvc3NpYmxlLiIsImRlZmF1bHRfcHJlY2hhdF9tZXNzYWdlIjoiTm91cyBzb21tZXMgaW1wYXRpZW50cyBkZSBkaXNjdXRlciBhdmVjIHZvdXMuIE1haXMgZCdhYm9yZCwgcHJlbmV6IHF1ZWxxdWVzIGluc3RhbnRzIHBvdXIgbm91cyBwYXJsZXIgZGUgdm91cy4iLCJhZ2VudF90cmFuc2ZlcmVkX21zZyI6IlZvdHJlIGNoYXQgYSDDqXTDqSB0cmFuc2bDqXLDqSB2ZXJzIHt7YWdlbnRfbmFtZX19IiwiYWdlbnRfcmVvcGVuX2NoYXRfbXNnIjoie3thZ2VudF9uYW1lfX0gYSByw6lvdXZlcnQgbGUgY2hhdCIsInZpc2l0b3Jfc2lkZV9pbmFjdGl2ZV9tc2ciOiJDZSBjaGF0IGVzdCBpbmFjdGlmIGRlcHVpcyAyMCBtaW51dGVzLiIsImFnZW50X2Rpc2Nvbm5lY3RfbXNnIjoie3thZ2VudF9uYW1lfX0gYSDDqXTDqSBkw6ljb25uZWN0w6kiLCJzaXRlX2lkIjoiMWE1ZDY0MWQzNjY5ZTNkNjk2OTA1ZDZmNGY0YzEwMWIiLCJhY3RpdmUiOnRydWUsIndpZGdldF9wcmVmZXJlbmNlcyI6eyJ3aW5kb3dfY29sb3IiOiIjNzc3Nzc3Iiwid2luZG93X3Bvc2l0aW9uIjoiQm90dG9tIFJpZ2h0Iiwid2luZG93X29mZnNldCI6IjMwIiwibWluaW1pemVkX3RpdGxlIjoiRGlzY3V0b25zwqAhIiwibWF4aW1pemVkX3RpdGxlIjoiVGNoYXQgZW4gY291cnMiLCJ0ZXh0X3BsYWNlIjoiVm90cmUgbWVzc2FnZSIsIndlbGNvbWVfbWVzc2FnZSI6IkJvbmpvdXLCoCEgUXVlIHB1aXMtamUgZmFpcmUgcG91ciB2b3VzwqA/IiwidGhhbmtfbWVzc2FnZSI6Ik1lcmNpIGQnYXZvaXIgZGlzY3V0w6kgYXZlYyBub3VzLiBTaSB2b3VzIGF2ZXogZCdhdXRyZXMgcXVlc3Rpb25zLCBuJ2jDqXNpdGV6IHBhcyDDoCBub3VzIGZhaXJlIHNpZ25lwqAhIiwid2FpdF9tZXNzYWdlIjoiTCd1biBkZSBub3VzIHZhIHZvdXMgcsOpcG9uZHJlIHRvdXQgZGUgc3VpdGUuIFZldWlsbGV6IHBhdGllbnRlci4iLCJhZ2VudF9qb2luZWRfbXNnIjoie3thZ2VudF9uYW1lfX0gYSByZWpvaW50IGxlIGNoYXQiLCJhZ2VudF9sZWZ0X21zZyI6Int7YWdlbnRfbmFtZX19IGEgcXVpdHTDqSBsZSBjaGF0IiwiYWdlbnRfdHJhbnNmZXJfbXNnX3RvX3Zpc2l0b3IiOiJWb3RyZSBjaGF0IGEgw6l0w6kgdHJhbnNmw6lyw6kgdmVycyB7e2FnZW50X25hbWV9fSIsImNvbm5lY3RpbmdfbXNnIjoiRW4gYXR0ZW50ZSBkJ3VuIGFnZW50In0sInJvdXRpbmciOm51bGwsInByZWNoYXRfZm9ybSI6dHJ1ZSwicHJlY2hhdF9tZXNzYWdlIjoiTm91cyBzb21tZXMgaW1wYXRpZW50cyBkZSBkaXNjdXRlciBhdmVjIHZvdXMuIE1haXMgZCdhYm9yZCwgcHJlbmV6IHF1ZWxxdWVzIGluc3RhbnRzIHBvdXIgbm91cyBwYXJsZXIgZGUgdm91cy4iLCJwcmVjaGF0X2ZpZWxkcyI6eyJuYW1lIjp7InRpdGxlIjoiTm9tIiwic2hvdyI6IjIifSwiZW1haWwiOnsidGl0bGUiOiJBZHJlc3NlIGUtbWFpbCIsInNob3ciOiIyIn0sInBob25lIjp7InRpdGxlIjoiTnVtw6lybyBkZSB0w6lsw6lwaG9uZSIsInNob3ciOiIwIn0sInRleHRmaWVsZCI6eyJ0aXRsZSI6IkNoYW1wIGRlIHRleHRlIiwic2hvdyI6IjAifSwiZHJvcGRvd24iOnsidGl0bGUiOiJNZW51IGTDqXJvdWxhbnQiLCJzaG93IjoiMCIsIm9wdGlvbnMiOlsibGlzdDEiLCJsaXN0MiIsImxpc3QzIl19fSwiYnVzaW5lc3NfY2FsZW5kYXIiOm51bGwsIm5vbl9hdmFpbGFiaWxpdHlfbWVzc2FnZSI6eyJ0ZXh0IjoiTm91cyBzb21tZXMgZMOpc29sw6lzLCB0b3VzIG5vcyBhZ2VudHMgc29udCBvY2N1cMOpcy4gVmV1aWxsZXogbm91cyBsYWlzc2VyIHVuIG1lc3NhZ2UgZXQgbm91cyB2b3VzIGNvbnRhY3Rlcm9ucyBkw6hzIHF1ZSBwb3NzaWJsZS4iLCJ0aWNrZXRfbGlua19vcHRpb24iOiIwIiwiY3VzdG9tX2xpbmtfdXJsIjoiIn0sInByb2FjdGl2ZV9jaGF0IjpmYWxzZSwicHJvYWN0aXZlX3RpbWUiOjE1LCJzaXRlX3VybCI6ImRlc2ljby5mcmVzaGRlc2suY29tIiwiZXh0ZXJuYWxfaWQiOm51bGwsImRlbGV0ZWQiOmZhbHNlLCJvZmZsaW5lX2NoYXQiOnsic2hvdyI6IjEiLCJmb3JtIjp7Im5hbWUiOiJOb20iLCJlbWFpbCI6IkFkcmVzc2UgZS1tYWlsIiwibWVzc2FnZSI6Ik1lc3NhZ2UifSwibWVzc2FnZXMiOnsidGl0bGUiOiJMYWlzc2V6LW5vdXMgdW4gbWVzc2FnZSAhIiwidGhhbmsiOiJNZXJjaSBwb3VyIHZvdHJlIG1lc3NhZ2UuIE5vdXMgdm91cyBjb250YWN0ZXJvbnMgZGFucyBsZXMgbWVpbGxldXJzIGTDqWxhaXMuIiwidGhhbmtfaGVhZGVyIjoiTWVyY2kgISJ9fSwibW9iaWxlIjp0cnVlLCJjcmVhdGVkX2F0IjoiMjAxNS0xMi0wN1QxMzo1NDozMy4wMDBaIiwidXBkYXRlZF9hdCI6IjIwMTUtMTItMDdUMTM6NTQ6NDEuMDAwWiJ9';</script>

</body>
</html>
