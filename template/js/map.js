$(function(){
  
ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map("YMapsID", {
                center: [43.202047, 76.661115],
                zoom: 10
            }); 
            
            myPlacemark = new ymaps.Placemark([43.202047, 76.661115], {
                hintContent: 'Алтын ауыл!',
                balloonContent: 'CarWash'
            });
            
            myMap.geoObjects.add(myPlacemark);
        }
      
});