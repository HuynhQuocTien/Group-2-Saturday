<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../../../assets/css/QuanLyPhongChieu.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" />
</head>

<body>
    
    <div class="quanlyphongchieu">
        <!-- Thêm combobox góc phải trên cùng -->
    <div class="combobox-wrapper">
        <select id="ds_rap">
            <option >1</option>
        </select>
    </div>
        <div class="qun-l-phng-chiu-wrapper">
            <h2 class="qun-l-phng">Quản lý phòng chiếu</h2>
        </div>
        <section class="f-r-a-m-e">
            <div class="ten-phong-parent">
                <div class="ten-phong">
                    <b class="loai-phong">Tên phòng:</b>
                    <input id="txtten" type="text" class="txtten" />
                </div>
                <div class="ten-phong1">
                    <b class="ten-phong-child">Loại phòng:</b>
                    <select class="txtloai" name="loai-phong-chieu">
                        <option value="2D">2D</option>
                        <option value="3D">3D</option>
                        <option value="4DX">4DX</option>
                    </select>
                </div>

                <div class="txt-loai">
                    <div class="tinh-trang">
                        <b class="tnh-trng">Tình trạng:</b>
                    </div>
                    <div class="danh-gia-trang-thai">
                        <input class="radiodc" type="radio" id="dang-chieu" name="trang-thai" value="dang-chieu"
                            checked>
                        <label for="dang-chieu">Đang chiếu</label>
                    </div>
                    <div class="danh-gia-trang-thai">
                        <input class="radiosp" type="radio" id="sap-chieu" name="trang-thai" value="sap-chieu">
                        <label for="sap-chieu">Sắp chiếu</label>
                    </div>
                    <div class="danh-gia-trang-thai">
                        <input class="radioss" type="radio" id="san-sang" name="trang-thai" value="san-sang">
                        <label for="san-sang">Sẵn sàng</label>
                    </div>

                </div>
            </div>
        </section>

        <section class="ghe-vip">
            <div class="ghe-doi">
                <button class="btnthem" onclick="addRapToDropdown()">Thêm</button>
                <button class="btnsua">Sửa</button>
                <button class="btnxoa">Xóa</button>
                <button class="btnthemhang">Thêm một hàng ghế</button>
                <button class="btnthemcot">Thêm một cột ghế</button>
                <b class="danh-sch-gh">Danh sách ghế</b>
            </div>
            <div class="table-parent">
                <table class="table1">
                    <thead>
                      <tr>
                        <th></th> <!-- Cột trống -->
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>A</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th>B</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th>C</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th>D</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th>E</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th>F</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                  

                
            </div>
        </section>
        <div class="btns-ghe">
            <button class="btnghethuong" onclick="applyColor('blue')">Ghế Thường</button>
            <button class="btnghevip" onclick="applyColor('red')">Ghế VIP</button>
            <button class="btnghedoi" onclick="applyColor('pink')">Ghế Đôi</button>

        </div>
    </div>
    <script>
        // Function to apply color to the clicked cell
        function applyColor(color) {
            // Remove existing event listeners from all cells
            var cells = document.querySelectorAll('.table1 td');
            cells.forEach(function (cell) {
                cell.removeEventListener('click', cellClickHandler);
            });

            // Add event listener to cells when a chair type button is clicked
            cells.forEach(function (cell) {
                cell.addEventListener('click', cellClickHandler);
            });

            // Function to handle cell click event
            function cellClickHandler(event) {
                event.target.style.backgroundColor = color; // Apply the chosen color to the clicked cell
            }
        }

            // Function to add rap to the dropdown
function addRapToDropdown() {
    // Get the value from the input field
    var rapName = document.getElementById('txtten').value.trim();

    // Check if the input field is not empty
    if (rapName !== '') {
        // Add the rap name as an option to the dropdown
        addToDropdown(rapName);

        // Clear the value in the input field
        document.getElementById('txtten').value = '';
    }
}

// Function to add an option to the dropdown
function addToDropdown(rapName) {
    // Create a new option element
    var option = document.createElement('option');
    
    // Set the text of the option to the rap name
    option.text = rapName;
    
    // Add the option to the dropdown with id 'txtloai'
    document.getElementById('ds_rap').appendChild(option);
}


// Function to add a new column to the table
function addColumn() {
    var table = document.querySelector('.table1');
    var rowCount = table.rows.length;

    // Create header row if it doesn't exist
    if (rowCount === 0) {
        var headerRow = table.insertRow(0);
        var headerCell = document.createElement('th');
        headerCell.innerHTML = ''; // Blank header for the first cell
        headerRow.appendChild(headerCell);
    }

    // Loop through existing rows and add cell to each row
    for (var i = 0; i < rowCount; i++) {
        var row = table.rows[i];
        var cell = document.createElement('td');
        if (i === 0) {
            cell.innerHTML = row.cells.length; // Set cell content to the current column count
        } else {
            cell.innerHTML = ''; // Leave other cells blank
        }
        row.appendChild(cell);
    }
}

// Function to add a new row to the table
function addRow() {
    var table = document.querySelector('.table1');
    var row = table.insertRow(-1);
    var rowCount = table.rows.length;
    var alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    for (var i = 0; i < rowCount; i++) {
        var cell = row.insertCell(i);
        if (i === 0) {
            cell.innerHTML = alphabet[rowCount - 2]; // Start from 'A'
        } else {
            cell.innerHTML = ''; // Leave other cells blank
        }
    }
}


// Add event listeners to the buttons
document.querySelector('.btnthemcot').addEventListener('click', addColumn);
document.querySelector('.btnthemhang').addEventListener('click', addRow);

        
    </script>
</body>

</html>