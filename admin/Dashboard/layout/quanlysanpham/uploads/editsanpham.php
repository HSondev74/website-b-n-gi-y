<?php
$id = $_GET['id'];
$sql_sua = "SELECT * FROM sanpham WHERE sanpham_id = '$id' LIMIT 1";
$row_sua = mysqli_query($conn, $sql_sua);

?>
<h1 style="font-size: 36px;
     font-weight: 600;
     margin: 10px 30px;
     color: var(--dark);">Sửa sản phẩm</h1>
<ul class="breadcrumb" style="display: flex;
     align-items: center;
     grid-gap: 16px;
     margin: 20px 30px;">
      <li>
            <a href="index.php" style="color: var(--dark-grey);">Dashboard</a>
      </li>
      <li><i class='bx bx-chevron-right'></i></li>
      <li>
            <a class="active" href="" style="pointer-events: none;
color: var(--blue);">Sửa sản phẩm</a>
      </li>
</ul>

<div class="container" style=" width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
      <h2 style="text-align: center;">Sửa Sản Phẩm</h2>
      <form action="Dashboard/layout/quanlysanpham/xuly.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
            <?php while ($row = mysqli_fetch_array($row_sua)) {
                  $gia_co_dau = number_format($row['gia'], 0, ',', '.');
            ?>
                  <label for="tensanpham" style="display: block;
            margin-bottom: 10px;">Tên Sản Phẩm:</label>
                  <input style=" width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;" type="text" id="tensanpham" name="tensanpham" required value="<?php echo $row['tensanpham']; ?>">

                  <label for="gia" style="display: block;
            margin-bottom: 10px;">Giá:</label>
                  <input style=" width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;" type="text" id="gia" name="gia" required value="<?php echo $gia_co_dau; ?>">

                  <label for="hinhanh" style="display: block;
            margin-bottom: 10px;">Hình Ảnh:</label><br>
                  <img src="http://localhost/BanGiay/admin/Dashboard/layout/quanlysanpham/uploads/<?php echo $row['hinhanh']; ?>" alt="Product Image" class="product-image"><br>
                  <input style=" width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;" type="file" id="hinhanh" name="hinhanh">

                  <label for="tonkho" style="display: block;
            margin-bottom: 10px;">Tồn Kho:</label>
                  <input style=" width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;" type="number" id="tonkho" name="tonkho" required value="<?php echo $row['tonkho']; ?>">

                  <label for="danhmuc_id" style="display: block;
            margin-bottom: 10px;">Danh Mục ID:</label>
                  <input style=" width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;" type="number" id="danhmuc_id" name="danhmuc_id" required value="<?php echo $row['danhmuc_id']; ?>">

                  <label for="mota" style=" display: block;
            margin-bottom: 10px;">Mô Tả:</label>
                  <textarea id="mota" name="mota" rows="4" style="width:100%; margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;resize: none;" required><?php echo $row['mota']; ?></textarea>

                  <div>
                        <button name="editsp" style="background-color: var(--blue);
                 color: white;
                 padding: 10px 40px;
                 border: none;
                 border-radius: 4px;
                 cursor: pointer;">Lưu</button>
                  </div>

            <?php } ?>
      </form>
</div>