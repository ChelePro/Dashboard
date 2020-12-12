// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    datasets: [{
      label: "empleo Indep $",
      backgroundColor: "#581845",
      borderColor: "rgba(2,117,216,1)",
      data: [93796.70, 75091.14, 72881.28, 75693.53, 83557.03, 69149.75, 79765.67, 86547.45, 92918.88, 88323.19, 80590.20, 100277.57],
    },
    {
      label: "empleo Dep $",
    backgroundColor: "#1358E1  ",
    borderColor: "rgba(2,117,216,1)",
    data: [208927.54, 206629.10, 197214.61, 211593.29, 220988.54, 177190.81, 172138.33, 171464.16, 190423.25, 174896.36, 194379.83, 184872.35],}],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 12
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 300000,
          maxTicksLimit:9
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: true
    }
  }
});
