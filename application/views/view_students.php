<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>bootstarp/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>bootstarp/css/simple-sidebar.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.11/css/dataTables.jqueryui.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="student/dashboard/">
                        Home
                    </a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Student Database</h1>
                        <p>Welcome to my student database.</p>
                        <p></p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

                        <button type="button" class="btn btn-info btn-lg"  style="float:right;" data-toggle="modal" data-target="#myModal">Add Student</button>
                        <hr/>
                    </div>

                    <div class="col-lg-12">
                        <h3>All Students</h3>
                        <br/>
                        

                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>NIC_Number</th>
                                    <th>Registered_Date</th>
                                    <th>Updated_Date</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <!--
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>NIC Number</th>
                                    <th>Registered Date</th>
                                    <th>Updated Date</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                            -->
                            <tbody>
                            <?php foreach($dstudents as $student):?>
                                <tr>
                                    <td><?=$student->id?></td>
                                    <td><?=$student->name?></td>
                                    <td><?=$student->address?></td>
                                    <td><?=$student->nic?></td>
                                    <td><?=$student->created_date?></td>
                                    <td><?=$student->updated_date?></td>
                                    <td><a href="#"><img  class="view_student" data-student-id="<?=$student->id?>" height="30" width="30" data-toggle="modal" data-target="#myViewModal" src="<?php echo base_url(); ?>bootstarp/images/view.png"></a></td>
                                    <td><a href="#"><img class="edit_student" data-student-id="<?=$student->id?>" height="30" width="30" data-toggle="modal" data-target="#myEditModal" src="<?php echo base_url(); ?>bootstarp/images/edit.png"></a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>


                        <hr/>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Student</h4>
              </div>
              <div class="modal-body">
                <form>
                    <table>
                    <p style="color: red;" id="error"></p>
                        <tr >
                            <td>Student Name</td>
                            <td>
                            <input type="text" name="sname" id="sname" placeholder="Enter Student Name" required="required">
                            </td>

                        </tr>

                        <tr>
                            <td>Student Address</td>
                            <td><textarea rows="4" cols="50" name="saddress" id="saddress"> </textarea></td>
                        </tr>

                        <tr>
                            <td>NIC Number</td>
                            <td><input type="text" name="snic" id="snic" placeholder="Enter Nic Number" required="required"></td>
                        </tr>
                    </table>
                </form>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-info btn-lg" id="btn_add_student">Add Student</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>









    <!-- Edit Modal -->
        <div id="myEditModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Student</h4>
              </div>
              <div class="modal-body">
                <form>
                    <table>
                    <p style="color: red;" id="error"></p>
                        <tr 
                            <td>
                            <input type="text" name="Eid" id="Eid" required="required" style="visibility: hidden;">
                            </td>
                        </tr>
                        <tr >
                            <td>Student Name</td>
                            <td>
                            <input type="text" name="Ename" id="Ename" placeholder="Enter Student Name" required="required">
                            </td>
                        </tr>

                        <tr>
                            <td>Student Address</td>
                            <td><textarea rows="4" cols="50" name="Eaddress" id="Eaddress"> </textarea></td>
                        </tr>

                        <tr>
                            <td>NIC Number</td>
                            <td><input type="text" name="Enic" id="Enic" placeholder="Enter Nic Number" required="required"></td>
                        </tr>
                    </table>
                </form>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-info btn-lg" id="btn_edit_student">Edit Student</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>




    <!-- View Modal -->
        <div id="myViewModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">View Student</h4>
              </div>
              <div class="modal-body">
                <form>
                    <table>
                    <p style="color: red;" id="error"></p>
                        <tr> 
                            <td>
                             Student id : <p id="vid"></p>
                            </td>
                        </tr>
                        <tr >
                            <td>
                            Student Name : <p id="vname"></p>
                            </td>
                        </tr>

                        <tr>
                            <td>Student Address : <p id="vaddress"></p>
                            </td>
                          
                        </tr>

                        <tr>
                            <td>NIC Number : <p id="vnic"></p>
                            </td>
                        </tr>
                    </table>
                </form>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-info btn-lg" id="btn_edit_student">Edit Student</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>




    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>bootstarp/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>bootstarp/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>

     <script type="text/javascript">
        $(document).ready (function(){

            $(".view_student").click(function(){
                    var student_id = $(this).data('student-id');
                    console.log("Student ID : "+ student_id);
                      $.ajax({
                              type:"POST",
                              dataType: 'json',
                              url:"<?php echo base_url('student/get_single_student/'); ?>",
                              data: {student_id: student_id},
                              success: function(data) {
                                        console.log(data);
                                        console.log(data.Sstudent);
                                        for (var i = 0; i < data.Sstudent.length; i++) {
                                            $('#vid').html(data.Sstudent[i].id);                  
                                            $('#vname').html(data.Sstudent[i].name);
                                            $('#vaddress').html(data.Sstudent[i].address);
                                            $('#vnic').html(data.Sstudent[i].nic);
                                        }
                                    }
                                });
            });



            $(".edit_student").click(function(){
                    var student_id = $(this).data('student-id');
                    console.log("Student ID : "+ student_id);
                      $.ajax({
                              type:"POST",
                              dataType: 'json',
                              url:"<?php echo base_url('student/get_single_student/'); ?>",
                              data: {student_id: student_id},
                              success: function(data) {
                                        console.log(data);
                                        console.log(data.Sstudent);
                                        for (var i = 0; i < data.Sstudent.length; i++) {
                                            $('#Eid').val(data.Sstudent[i].id);                  
                                            $('#Ename').val(data.Sstudent[i].name);
                                            $('#Eaddress').html(data.Sstudent[i].address);
                                            $('#Enic').val(data.Sstudent[i].nic);
                                        }
                                    }
                                });
            });


        


         $("#btn_edit_student").click( function(){
               var id          = $('form #Eid').val();
               var name        = $('form #Ename').val();
               var address     = $('form #Eaddress').val();
               var nic         = $('form #Enic').val();
               
              if(isValid(name, address, nic)){
                console.log("is valid");
                var stud = [id, name, address, nic];
                console.log(stud);

                $.ajax({
                      type:"POST",
                      dataType: 'json',
                      url:"<?php echo base_url('student/edit_student/'); ?>",
                      data: {stud: stud},
                      success: function(data) {
                                console.log(data);
                            }
                        });
                location.reload();
              }
         });





          $("#btn_add_student").click( function(){
                       
               var name        = $('form #sname').val();
               var address     = $('form #saddress').val();
               var nic         = $('form #snic').val();
               
              if(isValid(name, address, nic)){
                console.log("is valid");
                var stud = [name, address, nic];
                console.log(stud);

                $.ajax({
                      type:"POST",
                      dataType: 'json',
                      url:"<?php echo base_url('student/add_student/'); ?>",
                      data: {stud: stud},
                      success: function(data) {
                                console.log(data);
                            }
                        });
                location.reload();
              }
           });
        });



        function isValid(name, address, nic){

            if(name == "" || name.length < 3){
              $('#error').html("</b>Please enter a valid name.</b>");
              return false;
          }else if(address == "" || address.length < 3 ){
              $('#error').html("</b>Please enter a valid address.</b>");
              return false;
          }else if(nic = "" || nic.length < 10 ){
              $('#error').html("</b>Please enter a valid NIC Number.</b>");
              return false;
          }else{
                 return true;
              
          }
        }


  </script>

</body>

</html>
