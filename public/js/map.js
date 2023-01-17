ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
        center: [41.291732, 69.280219],
        zoom: 18,
    }, {
        searchControlProvider: 'yandex#search'
    },
);
myMap.geoObjects
.add(new ymaps.Placemark([41.291732, 69.280219], {
}, {
    iconLayout: 'default#image',
    iconImageHref: 'img/marker.svg',
    iconImageSize: [80, 100],
}))

    myMap.behaviors.disable('scrollZoom')


        
     myMap.panes.get('ground').getElement().style.filter = 'grayscale(100%)';
}


