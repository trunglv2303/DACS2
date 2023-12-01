// $(function() {
 
//   'use strict';

//   var areaData = {
//     labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
//     datasets: [{
//       label: '# of Votes',
//       data: [8, 11, 13, 15, 12, 13, 16, 15, 13, 19, 11, 14],
//       backgroundColor: [
//         'rgba(255, 99, 132, 0.2)',
//         'rgba(54, 162, 235, 0.2)',
//         'rgba(255, 206, 86, 0.2)',
//         'rgba(75, 192, 192, 0.2)',
//         'rgba(153, 102, 255, 0.2)',
//         'rgba(255, 159, 64, 0.2)'
//       ],
//       borderColor: [
//         'rgba(255,99,132,1)',
//         'rgba(54, 162, 235, 1)',
//         'rgba(255, 206, 86, 1)',
//         'rgba(75, 192, 192, 1)',
//         'rgba(153, 102, 255, 1)',
//         'rgba(255, 159, 64, 1)'
//       ],
//       borderWidth: 1,
//       fill: true, // 3: no fill
//     }]
//   };

//   var areaOptions = {
//     plugins: {
//       filler: {
//         propagate: true
//       }
//     },
//     scales: {
//       yAxes: [{
//         gridLines: {
//           color: "rgba(204, 204, 204,0.1)"
//         }
//       }],
//       xAxes: [{
//         gridLines: {
//           color: "rgba(204, 204, 204,0.1)"
//         }
//       }]
//     }
//   }


//   if ($("#areaChart").length) {
//     var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
//     var areaChart = new Chart(areaChartCanvas, {
//       type: 'line',
//       data: areaData,
//       options: areaOptions
//     });
//   }

  
// });