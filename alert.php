              <?php if(isset($_SESSION['errors'])) { ?>
                <?php 
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                          position: 'top-end',
                          title: 'Please Enter Your Student ID.',
                          text: ' ',
                          icon:  'question',
                          showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                        });
                    });
                    </script>";
                    
                    unset($_SESSION['errors']);
                ?>
              <?php } ?>


              
              <?php if(isset($_SESSION['errorp'])) { ?>
                <?php 
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                          position: 'top-end',
                            icon: 'warning',
                            title: 'Please Enter Your Password.',
                            text:'',
                            showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true
                          });
                    });
                    </script>";
                    
                    unset($_SESSION['errorp']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['errorpw'])) { ?>
                <?php 
                     echo "<script>
                     $(document).ready(function() {
                         Swal.fire({
                          position: 'top-end',
                             icon: 'error',
                             title: 'Wrong password!',
                             text: ' ',
                             showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                           });
                     });
                 </script>";
                    
                    unset($_SESSION['errorpw']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['errorpin'])) { ?>
                <?php 
                     echo "<script>
                     $(document).ready(function() {
                         Swal.fire({
                          position: 'top-end',
                             icon: 'error',
                             title: 'INCORRECT!',
                             text: 'Student ID OR Password',
                             showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                           });
                     });
                 </script>";
                    
                    unset($_SESSION['errorpin']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['errornone'])) { ?>
                <?php 
                     echo "<script>
                     $(document).ready(function() {
                      Swal.fire({
                        position: 'top-end',
                          icon: 'question',
                          title: 'ไม่มีข้อมูลในระบบ',
                          text: '',
                          showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                        });
                  });
                 </script>";
                    
                    unset($_SESSION['errornone']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['errora'])) { ?>
                <?php 
                      echo "<script>
                      $(document).ready(function() {
                        Swal.fire({
                          position: 'top-end',
                            icon: 'warning',
                            title: 'กรุณาเข้าสู่ระบบ!',
                            text: '',
                            showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                          });
                      });
                      </script>";
                    
                    unset($_SESSION['errora']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['errorpro'])) { ?>
                <?php 
                      echo "<script>
                      $(document).ready(function() {
                        Swal.fire({
                          position: 'top-end',
                          icon: 'warning',
                          title: 'กรุณาเข้าสู่ระบบ!',
                          text: '',
                          showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                        });
                      });
                      </script>";
                    
                    unset($_SESSION['errorpro']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['errorstu'])) { ?>
                <?php 
                       echo "<script>
                       $(document).ready(function() {
                        Swal.fire({
                          position: 'top-end',
                          icon: 'warning',
                          title: 'กรุณาเข้าสู่ระบบ!',
                          text: '',
                          showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                        });
                       });
                   </script>";
                    
                    unset($_SESSION['errorstu']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['successl'])) { ?>
                <?php 
                     echo "<script>
                     $(document).ready(function() {
                      Swal.fire({
                        icon: 'success',
                        title: 'Logout Successfully',
                        text: '',
                          timer: 3000,
                          timerProgressBar: true,
                      });
                     });
                 </script>";
                    
                    unset($_SESSION['successl']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['errorv'])) { ?>
                <?php 
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                          position: 'top-end',
                            icon: 'warning',
                            title: 'มีบางอย่างผิดปกติ',
                            text:'',
                            showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true
                          });
                    });
                    </script>";
                    
                    unset($_SESSION['errorv']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['success01'])) { ?>
                <?php 
                
                     echo "<script>
         
                         $(document).ready(function() {
                             Swal.fire({
                                 title: 'ท่านเลือกโหวต หมายเลข 1',
                                 text: 'ลงคะแนนสำเรจแล้ว',
                                 icon: 'success',
                                 timer: 5000,
                                 timerProgressBar: true,
                             });
                         });
                     </script>";
                    
                    unset($_SESSION['success01']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['success02'])) { ?>
                <?php 
                
                     echo "<script>
         
                         $(document).ready(function() {
                             Swal.fire({
                                 title: 'ท่านเลือกโหวต หมายเลข 2',
                                 text: 'ลงคะแนนสำเรจแล้ว',
                                 icon: 'success',
                                 timer: 5000,
                                 timerProgressBar: true,
                             });
                         });
                     </script>";
                    
                    unset($_SESSION['success02']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['success03'])) { ?>
                <?php 
                
                     echo "<script>
         
                         $(document).ready(function() {
                             Swal.fire({
                                 title: 'ท่านเลือกโหวต หมายเลข 3',
                                 text: 'ลงคะแนนสำเรจแล้ว',
                                 icon: 'success',
                                 timer: 5000,
                                 timerProgressBar: true,
                             });
                         });
                     </script>";
                    
                    unset($_SESSION['success03']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['success04'])) { ?>
                <?php 
                
                     echo "<script>
         
                         $(document).ready(function() {
                             Swal.fire({
                                 title: 'ท่านเลือกโหวต หมายเลข 4',
                                 text: 'ลงคะแนนสำเรจแล้ว',
                                 icon: 'success',
                                 timer: 5000,
                                 timerProgressBar: true,
                             });
                         });
                     </script>";
                    
                    unset($_SESSION['success04']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['successn'])) { ?>
                <?php 
                
                     echo "<script>
         
                         $(document).ready(function() {
                             Swal.fire({
                                 title: 'ท่านเลือกโหวต NONE',
                                 text: 'ลงคะแนนสำเรจแล้ว',
                                 icon: 'success',
                                 timer: 5000,
                                 timerProgressBar: true,
                             });
                         });
                     </script>";
                    
                    unset($_SESSION['successn']);
                ?>
              <?php } ?>

              <?php if(isset($_SESSION['successr'])) { ?>
                <?php 
                
                     echo "<script>
         
                         $(document).ready(function() {
                             Swal.fire({
                                 title: 'Successfully Reset',
                                 text: '',
                                 icon: 'success',
                                 timer: 1000,
                                 timerProgressBar: true,
                             });
                         });
                     </script>";
                    
                    unset($_SESSION['successr']);
                ?>
              <?php } ?>

             