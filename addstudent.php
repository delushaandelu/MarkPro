<!DOCTYPE html>
<html lang="en">
    <?php include ('include/header.php'); ?>
    <body>
        <?php include('include/dash.php');?>                  
            
    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="POST" action="classstudent.php">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Register Student!</strong> Basic Information</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">First Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="fname" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Enter the first name of the student</span>
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Last Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="lname" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Enter the last name of the student</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Gender</label>
                                         <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                            <span class="help-block">Select one</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Address</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="address" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Student present address</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Telephone</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="number" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Telephone Number of the student</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Mother Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="mother" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Student mother name</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Father Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="father" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Student father name</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Guardian Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="guardian" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Student guardian name</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Register Date</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" name="date" class="form-control datepicker" value="2014-11-01">                                            
                                            </div>                                            
                                            <span class="help-block">Date of register</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Grade</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <select class="form-control select" name="grade">
                                                    <option>Grade 1</option>
                                                    <option>Grade 2</option>
                                                    <option>Grade 3</option>
                                                    <option>Grade 4</option>
                                                    <option>Grade 5</option>
                                                    <option>Grade 6</option>
                                                    <option>Grade 7</option>
                                                    <option>Grade 8</option>
                                                    <option>Grade 9</option>
                                                    <option>Grade 10</option>
                                                    <option>Grade 11</option>
                                                    <option>Grade 12</option>
                                                    <option>Grade 13</option>
                                                </select>
                                            </div>                                            
                                            <span class="help-block">Register grade</span>
                                        </div>
                                    </div>
                                        
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
               
        <?php include('include/footer.php'); ?>
    </body>
</html>






