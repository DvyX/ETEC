//maps

var map

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: {
      lat: -23.56104624638896,
      lng: -46.656422863007386
    },
    zoom: 3,
  });
  new google.maps.Marker({
    position:{lat: -23.56104624638896, lng: -46.656422863007386},
    map,
    title: "Sede 1 Avenida Paulista - SP",
  });
  new google.maps.Marker({
    position:{lat: -1.4368929291557058, lng: -48.45873244966877},
    map,
    title: "Sede 2 Belém - PA",
  });
  new google.maps.Marker({
    position:{lat: -15.586873657723249, lng: -56.07698846022912},
    map,
    title: "Sede 3 Cuiabá - MT",
  });
  new google.maps.Marker({
    position:{lat: -25.439831386999792, lng: -49.276734929356095},
    map,
    title: "Sede 4 Curitiba - PR",
  });
  new google.maps.Marker({
    position:{lat: -5.760338847863996, lng: -35.27047307383967},
    map,
    title: "Sede 5 Natal - RN",
  });
}
 




