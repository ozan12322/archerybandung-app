<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Menyisipkan library Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVsKsyQ581z3IUyFugbIxH--HXHqbCcag&callback=initMap"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-7.0215829,107.5865058,21),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta); 

        // membuat Marker
  		var marker=new google.maps.Marker({
      		position: new google.maps.LatLng(-7.0215829,107.5865058,21),
      		map: peta,
      		animation: google.maps.Animation.BOUNCE
  		});

        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/bootstrap4/bootstrap.min.css">
<link href="<?= base_url() ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/contact_responsive.css">
</head>
<body>
