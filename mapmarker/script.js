let map;
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 24.8615, lng: 67.0654 },
    zoom: 18,
    mapTypeId: "satellite"
  });
  const marker = new google.maps.Marker({
    position: { lat: 24.8615, lng: 67.0654 },
    map: map,
    title: "Title 1",
    // icon: {
    //   url: "map.png",
    //   scaledSize: new google.maps.Size(50, 50),
    // },
  });

  const marker2 = new google.maps.Marker({
    position: { lat: 24.8602, lng: 67.0643 },
    map: map,
    title: "Title 2",
    // icon: {
    //   url: "map.png",
    //   scaledSize: new google.maps.Size(50, 50),
    // },
  });

  const infoWindow = new google.maps.InfoWindow({
    content: "<p>This is From 1st Marker</p>",
  });
  const infoWindow2 = new google.maps.InfoWindow({
    content: "<p>This is From 2nd Marker</p>",
  });
  marker.addListener("click", () => {
    infoWindow.open(map, marker);
  });
  marker2.addListener("click", () => {
    infoWindow2.open(map, marker2);
  });
}
