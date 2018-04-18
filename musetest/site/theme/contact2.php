
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>เครือข่ายพิพิธภัณฑ์อิเล็กทรอนิกส์</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="http://emuseum.in.th/map/gmaps.js"></script>
  <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="http://emuseum.in.th/map/examples/examples.css" />
  <script type="text/javascript">
  
    
    var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        lat: 18.7826448,
        lng: 98.992469
      });
//    	map.addMarker({
//        lat: 18.7826448,
//        lng: 98.992469,
//        icon: 'museum-129.png',
//        title: 'วัดทรายมูลเมือง',
//        infoWindow: {
//          content: '<p><a href=\'http://www.emuseum.in.th/watsaimoon\'>วัดทรายมูลเมือง</a></p>'
//        }
//      });
//        map.addMarker({
//        lat: 18.7883864,
//        lng: 98.9862874,
//        icon: 'museum-129.png',
//        title: 'ศาลาธนารักษ์',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/treasury/emuseum/index.php\'>ศาลาธนารักษ์ </a></p>'
//        }
//      });
//        map.addMarker({
//        lat: 18.7923096,
//        lng: 99.0006008,
//        icon: 'museum-129.png',
//        title: 'วัดเกตุการาม',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/watketkaram\'>วัดเกตุการาม </a></p>'
//        }
//      });
//        map.addMarker({
//        lat: 18.7754833,
//        lng: 100.7725842,
//        icon: 'museum-129.png',
//        title: 'วัดกู่คำ',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/watkukam\'>วัดกู่คำ</a></p>'
//        }
//      });
//        map.addMarker({
//        lat: 18.7754833,
//        lng: 100.7725842,
//        icon: 'museum-129.png',
//        title: 'วัดกู่คำ',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/watkukam\'>วัดกู่คำ</a></p>'
//        }
//      });
//        map.addMarker({
//        lat: 18.0533298,
//        lng: 100.1112921,
//        icon: 'museum-129.png',
//        title: 'วัดสูงเม่น',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/watsungmen\'>วัดสูงเม่น</a></p>'
//        }
//      });
//        map.addMarker({
//        lat: 18.4843499,
//        lng: 98.906211,
//        icon: 'museum-129.png',
//        title: 'วัดหนองเงือก',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/watnong-ngueak\'>วัดหนองเงือก</a></p>'
//        }
//      });
//        map.addMarker({
//        lat: 18.7573089,
//        lng: 99.1552145,
//        icon: 'museum-129.png',
//        title: 'วัดน้ำจำ',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/watnamcham\'>วัดน้ำจำ</a></p>'
//        }
//      });
//        map.addMarker({
//        lat: 18.7452658,
//        lng: 99.1315086,
//        icon: 'museum-129.png',
//        title: 'ศูนย์วัฒนธรรมไทเขิน วัดสันก้างปลา',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/watsankangpla\'>วัดสันก้างปลา</a></p>'
//        }
//      });      
//        map.addMarker({
//        lat: 18.532308,
//        lng: 98.8566798,
//        icon: 'museum-129.png',
//        title: 'พิพิธภัณฑ์วัดมงคล (ทุ่งแป้ง)',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/watmongkol\'>พิพิธภัณฑ์วัดมงคล (ทุ่งแป้ง)</a></p>'
//        }
//      });
//        map.addMarker({
//        lat: 18.8643498,
//        lng: 99.0399232,
//        icon: 'museum-129.png',
//        title: 'ศูนย์การเรียนรู้ภูมิปัญญาไทยไตลื้อ บ้านใบบุญ',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/thailue\'>ศูนย์การเรียนรู้ภูมิปัญญาไทยไตลื้อ บ้านใบบุญ</a></p>'
//        }
//      });
//        map.addMarker({
//        lat: 18.7902697,
//        lng: 98.9902886,
//        icon: 'museum-129.png',
//        title: 'พิพิธภัณฑ์วัดดอกเอื้อง',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/watdokueang\'>พิพิธภัณฑ์วัดดอกเอื้อง</a></p>'
//        }
//      });
//      
//        map.addMarker({
//        lat: 18.7824516,
//        lng: 99.0922639,
//        icon: 'museum-129.png',
//        title: 'พิพิธภัณฑ์วัดป่าบง',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/watpabong\'>พิพิธภัณฑ์วัดป่าบง</a></p>'
//        }
//      });
      
        map.addMarker({
        lat: 18.8619607,
        lng: 98.9629697,
        icon: 'museum-129.png',
        title: 'ศาลาพิพิธภัณฑ์พื้นบ้าน วัดโสภณาราม',
        infoWindow: {
          content: '<p><a href=\'http://emuseum.in.th/watsopanaram\'>ศาลาพิพิธภัณฑ์พื้นบ้าน วัดโสภณาราม</a></p>'
        }
      });
      
//        map.addMarker({
//        lat: 18.808183,
//        lng: 98.9839423,
//        icon: 'museum-129.png',
//        title: 'สำนักศิลปะและวัฒนธรรม มหาวิทยาลัยราชภัฏเชียงใหม่',
//        infoWindow: {
//          content: '<p><a href=\'http://emuseum.in.th/cmru\'>สำนักศิลปะและวัฒนธรรม มหาวิทยาลัยราชภัฏเชียงใหม่</a></p>'
//        }
//      });
      
   /*     map.addMarker({
        lat: 18.808183,
        lng: 98.9839423,
        icon: 'museum-129.png',
        title: 'พิพิธภัณฑ์คุณหลวงจำรัส่',
        infoWindow: {
          content: '<p><a href=\'http://emuseum.in.th/lchouse\'>พิพิธภัณฑ์คุณหลวงจำรัส</a></p>'
        }
      });
      
      
      */
      

      

      
       
      
      /*map.addMarker({
        lat: 18.3828576,
        lng: 98.6863948,
        title: 'Lima',
        details: {
          database_id: 42,
          author: 'HPNeo'
        },
        click: function(e){
          if(console.log)
            console.log(e);
          alert('You clicked in this marker');
        },
        mouseover: function(e){
          if(console.log)
            console.log(e);
        }
      });
      
    map.addMarker({
        lat: 19.3828576,
        lng: 99.6863948,
        title: 'Marker with InfoWindow',
        infoWindow: {
          content: '<p>HTML Content</p>'
        }
      });
      
      map.addMarker({
        lat: 18.775778,
        lng: 100.774762,
        title: 'วัดกู่คำ',
        infoWindow: {
          content: '<p>วัดกู่คำ</p>'
        }
      });
      */
    });
  </script>
</head>
<body>
  
  <div class="row">
<!--    <div class="span11">-->
      <div id="map"></div>
<!--    </div>-->
   <!-- <div class="span6">
      <p>With GMaps.js you can add markers this way:</p>
      <pre>map.addMarker({
  lat: 15.9643841,
        lng: 100.0973559,
  title: 'Lima',
  click: function(e){
    alert('You clicked in this marker');
  }
});</pre>
      <p><strong>latitude</strong> and <strong>longitude</strong> are required. You can also attach additional information with <code>details</code>, which will be passed to Event object (<code>e</code>) in the events previously defined.</p>
      <p><span class="label notice">Note </span>If you want to show an Info Window, you must add:</p>
      <pre>infoWindow: {
        content: '&lt;p&gt;HTML Content&lt;/p&gt;'
      }</pre>
      <p><span class="label notice">Note</span>The Info Windows also can bind these events: <code>closeclick</code>, <code>content_changed</code>, <code>domready</code>, <code>position_changed</code> and <code>zindex_changed</code></p>
    </div>-->
  </div>
</body>
</html>