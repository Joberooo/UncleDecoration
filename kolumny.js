(function () {
    'use strict';
 
    var container = document.querySelector('.container'),
        boxes = Array.prototype.slice.call(container.querySelectorAll('.box')),
        setFlexboxHeight = function () {
            // lepiej ustawić wartość ratio na trochę więcej niż 50%,
            // dzięki temu jest mniejsze prawdopodobieństwo, że elementy się nie zmieszczą
            // w kontenerze
            var ratio = 0.30,
                boxesHeight = 0,
                boxMaxHeight = 0;
 
            // aby wykonać pomiar, należy tymczasowo ustawić wysokość kontenera na `auto`
            container.style.height = 'auto';
 
            // szukamy najwyższego elementu w kontenerze
            // oraz budujemy sumę wysokości wszystkich elementów
            boxes.forEach(function (box) {
                boxMaxHeight = box.clientHeight > boxMaxHeight ? box.clientHeight : boxMaxHeight;
                boxesHeight += box.clientHeight;
            });
 
            container.style.height = (boxesHeight * ratio) + 'px';
 
            // jeśli elementy ułożyły się tak, że nie mieszczą się w kontenerze
            // powodując widoczny scrollbar to zwiększ wysokość kontenera poprzez
            // powiększenie wysokości kontenera elementów o wysokość najwyższego elementu.
            if (container.offsetWidth < container.scrollWidth) {
                container.style.height = (boxesHeight * ratio) + boxMaxHeight + 'px';
            }
        };
 
    // uruchamiamy pomiar wysokości w dwóch sytuacjach:
    // - po załadowaniu wszystkich elementów na stronie,
    // - po zmianie wielkości okna przeglądarki
    window.addEventListener('load', setFlexboxHeight);
    window.addEventListener('resize', setFlexboxHeight);
})();