// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("graphExpenses");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Gastos Alimenticios", "Gastos otros alimentos", "Gastos Servicios varios", "Gastos educacion", "Gastos empleo", "Gastos salud", "Gastos vivienda", "Gastos Totales"],
    datasets: [{
      label: ["2017"],
      lineTension: 0.3,
      backgroundColor: "rgba(199,21,133,1)",
      borderColor: "rgba(255,0,255,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(199,21,133,1)",
      pointBorderColor: "rgba(255,0,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(220,20,60,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [203.71, 148.57, 58.14, 58.51, 43.44, 7.21, 68.18, 384.05],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'type'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 8
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 400,
          maxTicksLimit: 8
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: true
    }
  }
});