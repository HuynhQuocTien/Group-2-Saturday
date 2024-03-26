<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../../../assets/css/QuanLyPhim.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
    <form class="quanlyphim">
        <section class="movie-manager">
            <div class="qun-l-phim-wrapper">
                <h2 class="qun-l-phim">Quản lý phim</h2>
            </div>
            <div class="thumbnail-container-parent">
                <div class="thumbnail-container">
                    <img class="hinhanhsp" src="path/to/your/image.jpg" alt="Hình ảnh phim">
                </div>
                <div class="info-panel">
                    <div class="movie-code">
                        <div class="time-display">
                            <b class="m-phim">Mã phim:</b>
                        </div>
                        <input class="txtma" type="text" />

                        <div class="thi-lng-wrapper">
                            <b class="thi-lng">Thời lượng:</b>
                        </div>
                    </div>
                    <div class="genre-label-parent">
                        <div class="genre-label">
                            <b class="tn-phim">Tên phim:</b>
                        </div>
                        <div class="production-info-panel">
                            <input class="txtten" type="text" />
                        </div>
                        <div class="ngy-kc-wrapper">
                            <b class="ngy-kc">Ngày KC:</b>

                        </div>
                    </div>
                    <div class="add-edit-delete-buttons-parent">
                        <div class="add-edit-delete-buttons">
                            <b class="m-t">DV:</b>
                        </div>
                        <div class="txtmota-parent">
                            <input class="txtmota" type="text" />
                            <b class="thumbnail">Ngày KT:</b>
                        </div>
                    </div>
                    <div class="genre-container">
                        <div class="description-field">
                            <b class="th-loi">Thể loại:</b>
                        </div>
                        <div class="theloai">
                            <label><input type="checkbox" name="theloai[]" value="Hành động"> Hành động</label>
                            <label><input type="checkbox" name="theloai[]" value="Hoạt hình"> Hoạt hình</label>
                            <label><input type="checkbox" name="theloai[]" value="Hài hước"> Hài hước</label>
                            <label><input type="checkbox" name="theloai[]" value="Viễn Tưởng"> Viễn Tưởng</label>
                            <label><input type="checkbox" name="theloai[]" value="Phiêu Lưu"> Phiêu Lưu</label>
                            <label><input type="checkbox" name="theloai[]" value="Gia đình"> Gia đình</label>
                            <label><input type="checkbox" name="theloai[]" value="Tình cảm"> Tình cảm</label>
                            <label><input type="checkbox" name="theloai[]" value="Tâm lý"> Tâm lý</label>
                            <label><input type="checkbox" name="theloai[]" value="Kinh dị"> Kinh dị</label>
                        </div>



                        <div class="genre-container-inner">
                            <div class="sn-xut-parent">
                                <b class="sn-xut">Sản xuất:</b>
                                <b class="o-din">Đạo diễn:</b>
                                <b class="nm-sx">Năm SX:</b>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="details-panel">
                    <input class="txtthoiluong" type="text" />
                    <input class="txtkc" type="date" />
                    <input class="txtkt" type="date" />

                    <input class="txtkt1" type="text" />

                    <input class="txtkt2" type="text" />

                    <input class="txtkt3" type="text" />

                </div>


            </div>
        </section>
        <div class="adjustment-label-wrapper">
            <input type="file" id="file-input" style="display: none;" />
            <label for="file-input" class="adjustment-label">
                <img class="btnchinhanh-icon" alt="" src="./public/btnchinhanh.svg" />
                <div class="chnh-nh">Chỉnh ảnh</div>
            </label>

        </div>

        <div class="additional-details">
            <div>
                <label class="age-label" for="age-input">Giới hạn độ tuổi:</label>
                <input id="age-input" class="age-input" type="number" min="0" max="100" value="18" />
            </div>
            <div>
                <label class="description-label" for="description-input">Nội dung:</label>
                <textarea id="description-input" class="description-input"></textarea>

            </div>
        </div>

        <!-- Buttons for CRUD operations -->
        <div class="crud-buttons">
            <button class="btn-add"><i class="fas fa-plus"></i> Thêm</button>
            <button class="btn-edit"><i class="fas fa-pencil-alt"></i> Sửa</button>
            <button class="btn-delete"><i class="fas fa-trash-alt"></i> Xóa</button>
        </div>

        <!-- Table to display movie data -->
        <div class="movie-table">
            <!-- Movie data table content -->
            <table>
                <thead>
                    <tr>
                        <th>Mã phim</th>
                        <th>Tên phim</th>
                        <th>Thể loại</th>
                        <th>Thời lượng</th>
                        <th>Ngày KC</th>
                        <th>Ngày KT</th>
                        <!-- Add more table headers if needed -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample movie data row -->
                    <tr>
                        <td>001</td>
                        <td>Batman Begins</td>
                        <td>Hành động, Phiêu lưu</td>
                        <td>140 phút</td>
                        <td>2023-07-15</td>
                        <td>2023-07-30</td>
                        <!-- Add more table data cells if needed -->
                    </tr>
                </tbody>
                <tbody>
                    <!-- Sample movie data row -->
                    <tr>
                        <td>001</td>
                        <td>Batman Begins</td>
                        <td>Hành động, Phiêu lưu</td>
                        <td>140 phút</td>
                        <td>2023-07-15</td>
                        <td>2023-07-30</td>
                        <!-- Add more table data cells if needed -->
                    </tr>
                </tbody>
                <tbody>
                    <!-- Sample movie data row -->
                    <tr>
                        <td>001</td>
                        <td>Batman Begins</td>
                        <td>Hành động, Phiêu lưu</td>
                        <td>140 phút</td>
                        <td>2023-07-15</td>
                        <td>2023-07-30</td>
                        <!-- Add more table data cells if needed -->
                    </tr>
                </tbody>
                <tbody>
                    <!-- Sample movie data row -->
                    <tr>
                        <td>001</td>
                        <td>Batman Begins</td>
                        <td>Hành động, Phiêu lưu</td>
                        <td>140 phút</td>
                        <td>2023-07-15</td>
                        <td>2023-07-30</td>
                        <!-- Add more table data cells if needed -->
                    </tr>
                </tbody>

            </table>
        </div>

    </form>
</body>

</html>