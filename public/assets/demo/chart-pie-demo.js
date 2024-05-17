// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Técnico infraestrutura","Dono de Provedor", "Estudante", "Projetista/Engenheiro",  "Outro", "Comercio", "Projetista-Engenheiro"],
    datasets: [{
      data: [37.14, 24.19, 16.67, 12.86, 6.19, 2.38, 0.48],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', '#6B007B', '#15AEBC', '#E044A7'],
    }],
  },
});
