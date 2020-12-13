// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    datasets: [{
      label: " Monto ingresos empleo Indep $",
      lineTension: 0.3,
      backgroundColor: 'transparent',
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [95760.14, 90990.64, 91886.01, 82297.31, 79670.57, 102832.53, 85825.23, 76622.90, 62928.77, 84547.91, 78912.92, 66318.28],
    },
    {
      label: " Monto ingresos empleo Dep $",
      lineTension: 0.3,
      backgroundColor: 'transparent',
      borderColor: "#28a745",
      pointRadius: 5,
      pointBackgroundColor: "#28a745",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "#28a745",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [248180.10, 224275.75, 285047.75, 214379.80, 182564.09, 238833.51, 205357.78, 216895.53, 183631.39, 207521.55, 175990.53, 179017.01],
    }
  ],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: true
        },
        ticks: {
          maxTicksLimit: 12
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 300000,
          maxTicksLimit: 12
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: true,
    },
  }
});
