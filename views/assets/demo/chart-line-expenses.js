// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("graphExpenses");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Gastos Alimenticios", "Otros gastos alimenticios", "Gastos Servicios varios", "Gastos educacion", "Gastos empleo",
       "Gastos salud", "Gastos vivienda", "Gastos Totales"],
    datasets: [{
      label: ["2017"],
      lineTension: 0.3,
      backgroundColor: 'transparent',
      borderColor: "rgba(69, 179, 157,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(69, 179, 157, 1)",
      pointBorderColor: "rgba(69, 179, 157, 0.8)",
      pointHoverRadius: 12,
      pointHoverBackgroundColor: "rgba(33, 47, 60,1)",
      pointHitRadius: 50,
      pointBorderWidth: 10,
      data: [206.71, 148.57, 58.14, 58.51, 43.44, 7.21, 68.18, 384.05],
    },
    {
      label: ["2018"],
      lineTension: 0.3,
      backgroundColor: 'transparent',
      borderColor: "rgba(231, 76, 60,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(231, 76, 60, 1)",
      pointBorderColor: "rgba(231, 76, 60, 0.8)",
      pointHoverRadius: 12,
      pointHoverBackgroundColor: "rgba(33, 47, 60, 1)",
      pointHitRadius: 50,
      pointBorderWidth: 10,
      data: [198.16, 142.60, 55.56, 63.73, 40.94, 8.21, 61.69, 372.72],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'type'
        },
        gridLines: {
          display: true
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