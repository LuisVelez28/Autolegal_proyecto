function consumirApi() {
    var placa=[];
    var capacidad=[];
    fetch('http://127.0.0.1:8000/api/Vehiculos')
        .then(response => response.json())
        .then(function (datos_obtenidos) {
            datos_obtenidos.array.forEach(element => {
                if(element.placa != undefined && element.capacidad != undefined){
                    placa.push(element.placa);
                    capacidad.push(element.capacidad);
                }
            });
            var graf1 = {
                x: placa,
                y: capacidad,
                type: 'bar'
            }
            var datosGraficas = [graf1];

            var layout = {
                title: 'Capacidad de los vehiculos',
                barmode: 'stack'
            };
            Plotly.newPlot('grafica', datosGraficas, layout);
        });
}
consumirApi();