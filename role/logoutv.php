<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

    session_start();
    unset($_SESSION['super_admin_login']);
    unset($_SESSION['student_login']);
    unset($_SESSION['professor_admin_login']);
    unset($_SESSION['professor_login']);
    unset($_SESSION['complete_login']);
    $_SESSION['success'] = 'ออกจากระบบสำเร็จ';

    header("location: ../index.php");


?>