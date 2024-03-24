<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đồ ăn</title>
    <link rel="stylesheet" href="/assets/css/managefood.css"> <!-- Import file CSS -->
</head>
<body>
    <div class="container">
        <div class="foods-table">
            <h2>Danh sách đồ ăn</h2>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã đồ ăn</th>
                        <th>Tên đồ ăn</th>
                        <th>Trạng thái</th>
                        <th>Loại đồ ăn</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="food-details">
            <h2>Chi tiết đồ ăn</h2>
            <form action="" method="post">
                <div class="input-group">
                    <label for="size">Kích cỡ:</label>
                    <input type="text" id="size" name="size">
                </div>
                <div class="input-group">
                    <label for="price">Đơn giá:</label>
                    <input type="text" id="price" name="price">
                </div>
                <div class="input-group">
                    <label for="status">Trạng thái:</label>
                    <select id="status" name="status">
                        <option value="1">Đang được bán</option>
                        <option value="0">Ngưng bán</option>
                    </select>
                </div>
                <button type="submit" name="add_food">Thêm đồ ăn</button>
                <button type="submit" name="update_food">Cập nhật đồ ăn</button>
                <button type="submit" name="delete_food">Xóa đồ ăn</button>
                <button type="submit" name="add_size">Thêm kích cỡ</button>
                <button type="submit" name="update_size">Cập nhật kích cỡ</button>
            </form>
        </div>
    </div>
</body>
</html>
