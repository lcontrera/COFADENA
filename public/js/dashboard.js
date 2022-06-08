
(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico')
    var base = document.getElementById('myChart');
    var ejecucion_gastoss = JSON.parse(document.getElementById('tbejecucion_gastos').value);
    var ejeX = [];
    var ejeY = [];
    console.log(ejecucion_gastoss)
    for (var i = 0; i < ejecucion_gastoss.length; i++) {
        ejeX.push(ejecucion_gastoss[i]['mes']);
        ejeY.push(ejecucion_gastoss[i]['ganancia']);
    }


    console.log(ejeX)
    console.log(ejeY)


    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(base, {
        type: 'bar',
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
          indexAxis: 'y',
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





    // segundo grafico


    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico')
    var base = document.getElementById('upab_eje');
    var ejeX = [];
    var ejeY = [];
    console.log(ejecucion_gastoss)
    for (var i = 0; i < ejecucion_gastoss.length; i++) {
        ejeX.push(ejecucion_gastoss[i]['mes']);
        ejeY.push(ejecucion_gastoss[i]['ganancia']);
    }


    console.log(ejeX)
    console.log(ejeY)


    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(base, {
        type: 'bar',
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
          indexAxis: 'y',
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





    // segundo grafico


    console.log('inicia metodo grafico upab')
    var base = document.getElementById('est_recursos_corrientes_upab');
    var presupuestogasta = JSON.parse(document.getElementById('tbpresupuestogasta').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()

/*
//UNIDAD PRODUCTIVA AGRÍCOLA BERMEJO


(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico')
    var base = document.getElementById('myChart');
    var ejeX = [];
    var ejeY = [];
    console.log(ejecucion_gastoss)
    for (var i = 0; i < ejecucion_gastoss.length; i++) {
        ejeX.push(ejecucion_gastoss[i]['mes']);
        ejeY.push(ejecucion_gastoss[i]['ganancia']);
    }


    console.log(ejeX)
    console.log(ejeY)


    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(base, {
        type: 'bar',
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
          indexAxis: 'y',
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





    // segundo grafico


    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()

(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()

//UNIDAD GANADERA CAMPO 23 DE MARZO


(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico')
    var base = document.getElementById('myChart');
    var ejecucion_gastoss = JSON.parse(document.getElementById('tbejecucion_gastos').value);
    var ejeX = [];
    var ejeY = [];
    console.log(ejecucion_gastoss)
    for (var i = 0; i < ejecucion_gastoss.length; i++) {
        ejeX.push(ejecucion_gastoss[i]['mes']);
        ejeY.push(ejecucion_gastoss[i]['ganancia']);
    }


    console.log(ejeX)
    console.log(ejeY)


    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(base, {
        type: 'bar',
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
          indexAxis: 'y',
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





    // segundo grafico


    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })
     console.log('inicia metodo grafico')
    var base = document.getElementById('myChart');
    var ejecucion_gastoss = JSON.parse(document.getElementById('tbejecucion_gastos').value);
    var ejeX = [];
    var ejeY = [];
    console.log(ejecucion_gastoss)
    for (var i = 0; i < ejecucion_gastoss.length; i++) {
        ejeX.push(ejecucion_gastoss[i]['mes']);
        ejeY.push(ejecucion_gastoss[i]['ganancia']);
    }


    console.log(ejeX)
    console.log(ejeY)


    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(base, {
        type: 'bar',
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
          indexAxis: 'y',
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





    // segundo grafico


    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()

(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()

//EMPRESA NACIONAL AUTOMOTRIZ

(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico')
    var base = document.getElementById('myChart');
    var ejecucion_gastoss = JSON.parse(document.getElementById('tbejecucion_gastos').value);
    var ejeX = [];
    var ejeY = [];
    console.log(ejecucion_gastoss)
    for (var i = 0; i < ejecucion_gastoss.length; i++) {
        ejeX.push(ejecucion_gastoss[i]['mes']);
        ejeY.push(ejecucion_gastoss[i]['ganancia']);
    }


    console.log(ejeX)
    console.log(ejeY)


    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(base, {
        type: 'bar',
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
          indexAxis: 'y',
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





    // segundo grafico


    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()

(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()

//FABRICA BOLIVIANA DE MUNICION

(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico')
    var base = document.getElementById('myChart');
    var ejecucion_gastoss = JSON.parse(document.getElementById('tbejecucion_gastos').value);
    var ejeX = [];
    var ejeY = [];
    console.log(ejecucion_gastoss)
    for (var i = 0; i < ejecucion_gastoss.length; i++) {
        ejeX.push(ejecucion_gastoss[i]['mes']);
        ejeY.push(ejecucion_gastoss[i]['ganancia']);
    }


    console.log(ejeX)
    console.log(ejeY)


    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(base, {
        type: 'bar',
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
          indexAxis: 'y',
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





    // segundo grafico


    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()

(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()

//UNIDAD DE EJECUCION DE INFRAESTRUCTURA E INGENIERIA


(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico')
    var base = document.getElementById('myChart');
    var ejecucion_gastoss = JSON.parse(document.getElementById('tbejecucion_gastos').value);
    var ejeX = [];
    var ejeY = [];
    console.log(ejecucion_gastoss)
    for (var i = 0; i < ejecucion_gastoss.length; i++) {
        ejeX.push(ejecucion_gastoss[i]['mes']);
        ejeY.push(ejecucion_gastoss[i]['ganancia']);
    }


    console.log(ejeX)
    console.log(ejeY)


    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(base, {
        type: 'bar',
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
          indexAxis: 'y',
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





    // segundo grafico


    console.log('inicia metodo grafico triiii')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()

(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    console.log('inicia metodo grafico jhihh')
    var base = document.getElementById('est_recursos_corrientes');
    var presupuestogastad = JSON.parse(document.getElementById('tbpresupuestogastad').value);
    var ejeX = ['1er Trimestre', '2do Trimestre', '3er Trimestre', '4to Trimestre'];
    var ejeY = [];

    ejeY.push(presupuestogastad[0]['pri_tri']);
    ejeY.push(presupuestogastad[0]['seg_tri']);
    ejeY.push(presupuestogastad[0]['ter_tri']);
    ejeY.push(presupuestogastad[0]['cua_tri']);

    console.log(presupuestogastad)


    console.log(ejeX)
    console.log(ejeY)


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
            responsive: true,

            scales: {

                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month',
                        color: '#911',
                        font: {
                            family: 'Comic Sans MS',
                            size: 20,
                            weight: 'bold',
                            lineHeight: 1.2,
                        },
                        padding: { top: 20, left: 0, right: 0, bottom: 0 }
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                        font: {
                            family: 'Times',
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: { top: 30, left: 0, right: 0, bottom: 0 }
                    }
                }
            },
            legend: {
                display: false
            }
        }
    })

})()*/

