<!-- Header -->
<?php include "includes/Header.php" ?>

<body>
    <div class="position-absolute w-100" style="height: 40vh; background-color: var(--second-color);"></div>
    <div class="d-flex flex-row-reverse gap-3 mx-3" style="height: 100vh;">
        <!-- AssidBar -->
        <div class="col-3 position-relative" id="assidBar">
            <aside class="d-flex flex-column align-items-center" id="assidbar" style="width: 100%; height: 95vh; margin-top: 2.5vh; background-color: var(--white-color); border-radius: 16px;">
                <!-- Logo -->
                <div class="d-flex justify-content-center align-items-center">
                    <img src="../Assets/logo.png" style="width: 38%;" alt="logo">
                </div>
                <hr class="w-75 m-0 p-0">
                <!-- Info Profile -->
                <div class="d-flex flex-column justify-content-center align-items-center py-5 gap-4">
                    <img src="../Assets/avatar.png" style="width: 90%;" alt="logo">
                    <span>اسم المستخدم</span>
                    <span>الرصيد</span>
                    <span class="d-flex gap-1"><span>عملية تجارية</span><span class="fw-bold">0</span></span>
                    <span>البريد الالكتروني</span>
                    <span>رقم الهاتف</span>
                </div>
                <!-- Logout -->
                <hr class="w-75 m-0 p-0">
                <div>
                    <a class="nav-link" href="sign.php">
                        <span class="text-dark">تسجيل الخروج</span>
                    </a>
                </div>
            </aside>
        </div>

        <div class="position-relative w-100">
            <!-- Navbar -->
            <?php include "includes/Navbar.php" ?>

            <!-- Statistiques -->
            <div class="container-fluid py-4">
                <div class="card border-0 shadow-sm overflow-auto" style="min-height: 200px; max-height: 560px; border-radius: 16px;">
                    <div class="d-flex flex-row-reverse justify-content-between align-items-center m-4">
                        <h4>عملياتي  التجارية</h4>
                        <div class="px-5 py-2 fw-bold" type="button" style="background-color: var(--base-color); border: 0px; border-radius: 16px;">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                            تحميل
                        </div>
                    </div>
                    <table class="table mb-0 text-center">
                        <thead>
                            <tr>
                                <th class="col-1 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">العملة</th>
                                <th class="col-1 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">التاريخ</th>
                                <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">البيان</th>
                                <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">الرصيد</th>
                                <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">دائن</th>
                                <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">مدين</th>
                                <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">رقم العملية</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0 ; $i<8 ; $i++): ?>
                            <tr>
                                <td class="col-1"><?php echo "ابت" ;?></td>
                                <td class="col-1"><?php echo "ابت" ;?></td>
                                <td class="col-2"><?php echo "ابت" ;?></td>
                                <td class="col-2"><?php echo "ابت" ;?></td>
                                <td class="col-2"><?php echo "ابت" ;?></td>
                                <td class="col-2"><?php echo "ابت" ;?></td>
                                <td class="col-2"><?php echo "ابت" ;?></td>
                            </tr>
                            <?php endfor ;?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Copyright -->
            <div class="position-fixed bottom-0 start-50 text-center h6">Copyright &copy; SayfCo 2022</div>
        </div>
    </div>
</body>

<style>
    /* Tables */
    th,td{
        height: 50px;
    }
    tbody tr:hover{
        background-color: var(--second-color) !important;
        color: var(--white-color) !important;
    }
    tbody tr:hover a{
        color: var(--white-color) !important;
    }
</style>

<!-- Footer -->
<?php include "includes/Footer.php" ?>