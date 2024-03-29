<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê Doanh thu Phim</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #myChart {
            min-width: 400px;
            margin: auto; /* Canh giữa biểu đồ */
        }
    </style>
</head>
<body>
    <h1>Thống kê Doanh thu Phim</h1>
    <canvas id="myChart"></canvas>

    <script>
        // Dữ liệu mẫu (có thể thay thế bằng dữ liệu từ API)
        const movieData = {
            "A": 100,
            "B": 200,
            "C": 400,
            "D": 200,
            "E": 500
        };

        const labels = Object.keys(movieData);
        const data = Object.values(movieData);

        // Vẽ biểu đồ cột
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Biểu đồ doanh thu rạp phim',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
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
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value, index, values) {
                                return value.toLocaleString() + ' triệu đồng'; // Thêm đơn vị tiền tệ vào nhãn
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
