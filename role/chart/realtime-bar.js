document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('realTimeBarChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['No.1', 'No.2', 'No.3', 'No.4', 'None'],
            datasets: [{
                label: 'VOTE REAL TIME',
                data: [],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    function fetchData() {
        fetch('data-bar.php')
            .then(response => response.json())
            .then(data => {
                // Clear existing data
                chart.data.datasets[0].data = data;

                // Update the chart
                chart.update();

                // Fetch new data every 1000ms (1 second)
                setTimeout(fetchData, 1000);
            });
    }

    // Initial data fetch
    fetchData();
});
