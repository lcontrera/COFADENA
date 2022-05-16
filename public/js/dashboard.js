/* globals Chart:false, feather:false */

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: false
            }
        }
    }
});




/*(function () {
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
*/


