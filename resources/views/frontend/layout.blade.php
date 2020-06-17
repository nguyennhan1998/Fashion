
<!DOCTYPE html>
<html lang="zxx">
<x-frontend.head/>
<body>
<!-- Page Preloder -->
<x-frontend.loader/>

<!-- Header section -->
@yield("header")
<!-- Header section end -->


@yield("content")



<x-frontend.footer/>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<x-frontend.scripts/>
</body>
</html>
