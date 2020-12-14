// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("graphExpenses2017");
var myLineChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Poder Ejecutivo, Legislativo',
    'Profesionales cientificos',
    'Tecnicos y profesionales de nivel medio',
    'Empleados de oficina',
    'Trabajadores de servicios y Vendedores',
    'Operadores de instalaciones, maquinarias y montadores',
    'Fuerzas armadas',
    'Oficiales, Operarios y artesanos',
    'No trabaja',
    'Trabajadores no calificados',
    'Agricultores, agropecuarios y pesqueros'],
    datasets: [{
        label: '# of Votes',
        data: [1510.41, 
            1462.53, 
            1031.60, 
            1014.13, 
            991.49, 
            853.30, 
            780.98, 
            722.65, 
            707.68, 
            624.82, 
            412.53 ],
        backgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
        ],
        borderWidth: 1
    }]
},
options: {
    legend: {
      display: true,
      position: 'right'
    },
    tooltips: {
      enabled: true
    }
  }
});
/*
'Poder Ejecutivo, Legislativo, Directores de Administracion Publica',
'Profesionales, cientificos e intelectuales',
'Tecnicos y profesionales de nivel medio',
'Empleados de oficina',
'Trabajadores de servicios y Vendedores de comercios y mercados',
'Operadores de instalaciones, maquinarias y montadores',
'Fuerzas armadas',
'Oficiales, Operarios y artesanos de artes mecanicas y otros',
'No trabaja',
'Trabajadores no calificados',
'Agricultores y trabajadores calificados agropecuarios y pesqueros'

1.510,41, 
1.462,53, 
1.031,60, 
1.014,13, 
991,49, 
853,30, 
780,98, 
722,65, 
707,68, 
624,82, 
412,53 
*/