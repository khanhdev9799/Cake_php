<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Thống kê</h5>

                <!-- Form for selecting date range -->
                <form id="thongKeForm">
                    Ngày <input type="number" name="so_ngay" value="">
                    Tháng <input type="number" name="so_thang" value="">
                    Năm <input type="number" name="so_nam" value="">
                    <button type="button" id="thong_ke_btn" class="btn btn-primary"> Thống kê</button>
                </form>

                <!-- Chart container -->
                <div id="chart_div" class="mt-3"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });

        $(document).ready(function() {
            $('#thong_ke_btn').click(function() {
                $.ajax({
                    type: 'POST',
                    url: 'thongke.php',
                    data: $('#thongKeForm').serialize(),
                    success: function(response) {
                        var data = JSON.parse(response);
                        drawChart(data);
                    }
                });
            });

            function drawChart(data) {
                var chartData = new google.visualization.DataTable();
                chartData.addColumn('string', 'Hàng Hóa');
                chartData.addColumn('number', 'Số lượng bán');

                for (var i = 0; i < data.tenhh.length; i++) {
                    chartData.addRow([data.tenhh[i], parseInt(data.soluongban[i])]);
                }

                var options = {
                    title: 'Thống kê mặt hàng đã bán',
                    width: 600,
                    height: 400,
                    backgroundColor: '#fff',
                    is3D: true,
                };

                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(chartData, options);
            }
        });
    </script>
</body>