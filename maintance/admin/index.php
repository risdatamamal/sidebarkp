<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MAINTANCE ADMIN</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="admin.css">
        <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="sidebar close">
            <div class="logo-details">
                <span class="logo_name">JOB DESCRIPTION</span>
            </div>
            <ul class="nav-links">
                <li>
                <a href="../../index.php">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link_name">DASHBOARD</span>
                </a>
                </li>
                <li>
                    <a href="../../plan_manager/">
                    <i class='bx bx-book-alt' ></i>
                    <span class="link_name">PLAN MANAGER</span>
                    </a>
                </li>
                <li>
                <div class="iocn-link">
                    <a href="#">
                    <i class='bx bx-book-alt' ></i>
                    <span class="link_name">PRODUCTION</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>

                <ul class="sub-menu">
                    <li><a class="link_name" href="#">PRODUCTION</a></li>
                    <li><a href="../../production/manager/">Manager</a></li>
                    <li><a href="../../production/spv/">SPV</a></li>
                    <li><a href="../../production/leader/">Leader</a></li>
                </ul>
                </li>
                <li>
                <div class="iocn-link">
                    <a href="#">
                    <i class='bx bx-book-alt' ></i>
                    <span class="link_name">ESQ/QUALITY</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">ESQ/QUALITY</a></li>
                    <li><a href="../../esq_quality/manager/">Manager</a></li>
                    <li><a href="../../esq_quality/spv/">SPV</a></li>
                    <li><a href="../../esq_quality/staff/">Staff</a></li>
                    <li><a href="../../esq_quality/leader/">Leader</a></li>
                    <li><a href="../../esq_quality/admin/">Admin</a></li>
                </ul>
                </li>
                <li>
                <div class="iocn-link">
                    <a href="#">
                    <i class='bx bx-book-alt' ></i>
                    <span class="link_name">MAINTANCE</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">MAINTANCE</a></li>
                    <li><a href="../manager/">Manager</a></li>
                    <li><a href="../spv/">SPV</a></li>
                    <li><a href="../staff/">Staff</a></li>
                    <li><a href="../leader/">Leader</a></li>
                    <li><a href="index.php">Admin</a></li>
                </ul>
                </li>
            <li>
            <div class="iocn-link">
                <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">WAREHOUSE</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">WAREHOUSE</a></li>
                <li><a href="#">Manager</a></li>
                <li><a href="#">SPV</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Leader</a></li>
                <li><a href="#">Admin</a></li>
            </ul>
            </li>
            <li>
            <div class="iocn-link">
                <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">WTP</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">WTP</a></li>
                <li><a href="#">Manager</a></li>
                <li><a href="#">SPV</a></li>
                <li><a href="#">Leader</a></li>
                <li><a href="#">Admin</a></li>
            </ul>
            </li>
            <li>
            <div class="iocn-link">
                <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">HR</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">HR</a></li>
                <li><a href="#">Manager</a></li>
                <li><a href="#">SPV</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Leader</a></li>
                <li><a href="#">Admin</a></li>
            </ul>
            </li>
            <li>
            <div class="iocn-link">
                <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">FINANCE</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">FINANCE</a></li>
                <li><a href="#">Finance Manager</a></li>
                <li><a href="#">Finance Analisis</a></li>
            </ul>
            </li>
            <li>
            <div class="profile-details">
                <a href="logout.php" class="btn"><i class='bx bx-log-out'>Logout</i></a>
            </div>
            </li>
            </ul>
        </div>

        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu' ></i>
                <span class="text">PT. KRAFT HEINZ ABC</span>
            </div>
            
            <div class="upload-content">
                <h1>Upload File PDF MAINTANCE ADMIN</h1>
                <hr>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <table width="600" border="0">
                        <tr>
                            <td width="100">Judul File</td>
                            <td><input type="text" name="judul" placeholder="Judul" required></td>
                        </tr>
                        <tr>
                            <td width="100">File PDF</td>
                            <td><input type="file" name="nama_file" required></td>
                        </tr>
                        <tr>
                            <td width="100"></td>
                            <td><input type="submit" value="Upload File"></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="list-upload-content">
                <hr>
                <h1>List File PDF</h1>
                <table width="800" border='0' cellpadding="2" cellspacing="1" bgcolor="#000000">
                    <tr>
                        <th bgcolor="#ffffff">Judul</th>
                        <th bgcolor="#ffffff" width="100">View</th>
                        <th bgcolor="#ffffff" width="100">Hapus</th>
                    </tr>
                <?php
                $query = mysqli_query($koneksi,"SELECT * FROM data_file ORDER BY id DESC");
                while($data=mysqli_fetch_array($query))
                {
                ?>
                    <tr>
                        <td bgcolor="#ffffff"><?php echo $data['judul'];?></td>
                        <th bgcolor="#ffffff"><a href="view.php?id=<?php echo $data['id'];?>">Lihat File</a></th>
                        <th bgcolor="#ffffff"><a href="hapus.php?id=<?php echo $data['id'];?>">Hapus File</a></th>
                    </tr>
                <?php
                }
                ?>
                </table>
            </div>

        </section>

        <script>
            let arrow = document.querySelectorAll(".arrow");
            for (var i = 0; i < arrow.length; i++) {
                arrow[i].addEventListener("click", (e)=>{
            let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
                });
            }
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".bx-menu");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("close");
            });
        </script>
    </body>

</html>