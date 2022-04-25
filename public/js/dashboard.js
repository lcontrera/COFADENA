/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

  // Graphs
  var base = document.getElementById('myChart');
  var articulos = JSON.parse(document.getElementById('tbArticulos').value);  
  var ejeX=[];
  var ejeY=[]; 
  
  for(var i=0;i<articulos.length;i++){
    ejeX.push(articulos[i]['nombre']);
    ejeY.push(articulos[i]['stock']);
  }
  

  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(base, {
    type: 'line',
    data: {
      labels: ejeX,
      datasets: [{
        data: ejeY,
        lineTension: 0,
        backgroundColor: '#D5F5E3',
        borderColor: '#8080bb',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })

})()



