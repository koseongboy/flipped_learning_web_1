<html>
<head>
</head>
<body>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(window).on('beforeunload', function() {
    var msg = "팝업창을 닫으시겠습니까?";
    var ua  = navigator.userAgent.toLowerCase();
    if ((navigator.appName == 'Netscape' && ua.indexOf('trident') != -1) || (ua.indexOf("msie") != -1))
        confirm(msg);
    else
        return confirm(msg);

});
</script>
        
</body>
</html>