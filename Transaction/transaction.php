<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Catshop Admin | Transaction</title>
</head>
<body>
   <div class="sidebar">
	<div class="logo-details">
	   <i class="bx bx-category"></i>
	   <span class="logo_name">CatShop</span>
	</div>
	<ul class="nav-links">
	   <li>
		<a href="../admin.php">
		   <i class="bx bx-grid-alt"></i>
		   <span class="links_name">Dashboard</span>
		</a>
	   </li>
	   <li>
		<a href="../categories/categories.php">
		   <i class="bx bx-box"></i>
		   <span class="links_name">Categories</span>
		</a>
	   </li>
	   <li>
		<a href="../transaction/transaction.php" class="active">
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Transaction</span>
		</a>
	   </li>
	   <li>
		<a href="../logout.php">
		   <i class="bx bx-log-out"></i>
		   <span class="links_name">Log out</span>
		</a>
	   </li>
	</ul>
   </div>
   <section class="home-section">
	<nav>
	   <div class="sidebar-button">
		<i class="bx bx-menu sidebarBtn"></i>
	   </div>
	   <div class="profile-details">
		<span class="admin_name">Catshop Admin</span>
	   </div>
	</nav>
	<div class="home-content">
 	   <h3>Transaction</h3>
	   <button type="button" class="btn btn-tambah">
		<a href="transaction-entry.php">Tambah Data</a>
	   </button>
	   <table class="table-data">
            <thead>
              <tr>
                <th style="width: 20%">Nama</th>
                <th>Jenis Kucing</th>
                <th style="width: 20%">Harga</th>
                <th style="width: 20%">Tanggal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                include '../koneksi.php';
                $sql = "SELECT * FROM tb_transaction";
                $result = mysqli_query($koneksi, $sql);
		    if(mysqli_num_rows($result) == 0) {
			echo "
			   <tr>
				<td colspan='5' style='text-align: center'>Tidak ada data</td>
			   </tr>
			     ";
			} else {
			   while($data = mysqli_fetch_assoc($result)) {
				echo "
				  <tr>
				     <td>$data[nama]</td>
				     <td>$data[jenis]</td>
				     <td>$data[harga]</td>
				     <td>$data[tanggal]</td>
				     <td>
<a href=transaction-edit.php?id=$data[id]>Edit</a> | 
<a href=transaction-hapus.php?id=$data[id]>Hapus</a>
                             </td>
				   </tr>
				   ";
			    }
			}
              ?>
            </tbody>
          </table>
	 </div>
   </section>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	   sidebarBtn.onclick = function () {
		sidebar.classList.toggle("active");
		if (sidebar.classList.contains("active")) {
		   sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
		} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};
   </script>
</body>
</html>
