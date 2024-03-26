<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý lịch chiếu</title>
    <link rel="stylesheet" href="../../../assets/css/QuanLyLichChieu.css" />
    
</head>

<body>
    <div class="container">
        <h1>Quản lý lịch chiếu</h1>

        <form>
            
            <div>
            <label class="lbPhim" for="movieSelect">Chọn phim:</label>
            <select  class="cbbPhim" id="movieSelect">
                <option value="phim1">Phim 1</option>
                <option value="phim2">Phim 2</option>
                <!-- Thêm các tùy chọn khác nếu cần -->
            </select>
            </div>

            <div>
            <label class="lbtime" for="startTime">Thời gian bắt đầu:</label>
            <input class="dulieutime" type="time" id="startTime">
            </div>
            


            
            <div>
            <label class="lbPhong" for="roomSelect">Chọn phòng chiếu:</label>
            <select class="cbbPhong" id="roomSelect">
                <option value="room1">Phòng 1</option>
                <option value="room2">Phòng 2</option>
                <!-- Thêm các tùy chọn khác nếu cần -->
            </select>
            </div>
            
        </form>
        <div class="actions">
            <button onclick="addSchedule()">Thêm</button>
            <button onclick="editSchedule()">Sửa</button>
            <button onclick="deleteSchedule()">Xóa</button>
            <button style="width: 200px; margin-left: 160px;" onclick="selectWorkHours()">Xét giờ hoạt động rạp</button>
        </div>
        <div class="table-container">
            <table id="scheduleTable">
                <thead>
                    <tr>
                        <th>Phim</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Phòng chiếu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Phim 1</td>
                        <td>09:30</td>
                        <td>Phòng 1</td>
                    </tr>
                    <tr>
                        <td>Phim 2</td>
                        <td>11:00</td>
                        <td>Phòng 2</td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>
    <script>
        // JavaScript
        function addSchedule() {
            var movie = document.getElementById("movieSelect").value;
            var startTime = document.getElementById("startTime").value;
            var room = document.getElementById("roomSelect").value;

            var table = document.getElementById("scheduleTable").getElementsByTagName('tbody')[0];
            var newRow = table.insertRow(table.rows.length);
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            cell1.innerHTML = movie;
            cell2.innerHTML = startTime;
            cell3.innerHTML = room;
        }

        function editSchedule() {
            // Code để chỉnh sửa lịch chiếu
        }

        function deleteSchedule() {
            // Code để xóa lịch chiếu
        }

        // Hiển thị thời lượng phim khi chọn phim từ danh sách
        document.getElementById('movieSelect').addEventListener('change', function() {
            var selectedMovie = this.value;
            var durationDiv = document.getElementById('duration');
            // Tính toán và hiển thị thời lượng phim, có thể thay đổi tùy theo logic của bạn
            if (selectedMovie === 'phim1') {
                durationDiv.textContent = 'Thời lượng: 2 giờ';
            } else if (selectedMovie === 'phim2') {
                durationDiv.textContent = 'Thời lượng: 1 giờ 30 phút';
            }
            // Thêm các trường hợp khác nếu cần
        });


        function selectWorkHours() {
    // Hiển thị hộp thoại hoặc giao diện cho phép người dùng chọn giờ bắt đầu và kết thúc
    var workStartHour = prompt("Nhập giờ bắt đầu mở rạp chiếu (số từ 1 đến 24):", "8");
    var workEndHour = prompt("Nhập giờ đóng rạp chiếu (số từ 1 đến 24):", "22");

    // Kiểm tra xem giờ bắt đầu và kết thúc làm việc có hợp lệ không và hiển thị thông báo tương ứng
    if (workStartHour != null && workEndHour != null && !isNaN(workStartHour) && !isNaN(workEndHour)) {
        workStartHour = parseInt(workStartHour);
        workEndHour = parseInt(workEndHour);

        if (workStartHour >= 1 && workStartHour <= 24 && workEndHour >= 1 && workEndHour <= 24 && workEndHour>workStartHour) {
            alert('Đã cập nhật giờ hoạt động rạp chiếu phim: Bắt đầu từ ' + workStartHour + 'h và kết thúc vào ' + workEndHour + 'h');
        } else {
            alert('Giờ không hợp lệ. Vui lòng nhập giờ từ 1 đến 24 và đảm bảo giờ kết thúc lớn hơn giờ bắt đầu.');
        }
    } else {
        alert('Vui lòng nhập giờ mở cửa và đóng rạp.');
    }
}

    </script>
</body>

</html>