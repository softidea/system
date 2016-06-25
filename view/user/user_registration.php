<!DOCTYPE HTML>
<html>

    <head>
        <title>User|Registration</title>
        <?php
        include 'assets/include/header.php';
        ?>
        <style>
    <?php
    include 'assets/css/user_registration.css';
    ?>
        </style>

    </head>
    <body>
        <div class="container">
            
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>Service Details</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Service Enpoint Details</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Service Provider</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p>Actions</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                        <p>Email Templates</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                        <p>Preview & Submit</p>
                    </div>
                </div>
            </div>
            <form role="form">
                <div class="row setup-content" id="step-1">

                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Service Details</h3>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="stack_id">Select Stack</label>
                                <div class="col-md-5">
                                    <select id="stack_id" name="stack_id" class="form-control">
                                        <option value="1">Open Source</option>
                                        <option value="2">IBM</option>
                                        <option value="3">Microsoft</option>
                                        <option value="4">Other Services</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="service_name">Service Name</label>  
                                <div class="col-md-5">
                                    <input id="service_name" name="service_name" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="service_architecture">Service Architecture</label>  
                                <div class="col-md-5">
                                    <input id="service_architecture" name="service_architecture" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="service_version">Service Version</label>  
                                <div class="col-md-5">
                                    <input id="service_version" name="service_version" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="service_description">Service Description</label>
                                <div class="col-md-4">                     
                                    <textarea class="form-control" id="service_description" name="service_description"></textarea>
                                </div>
                            </div>
                            <br>
                            <br>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="os_id">Operating System</label>
                                <div class="col-md-5">
                                    <select id="os_id" name="os_id" class="form-control">
                                        <option value="1">Ubuntu</option>
                                        <option value="2">RHEL</option>
                                        <option value="3">Windows</option>
                                    </select>
                                </div>
                            </div>
                            <br><br>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="sl_id">Software License</label>
                                <div class="col-md-5">
                                    <select id="sl_id" name="sl_id" class="form-control">
                                        <option value="1">Licence 1</option>
                                        <option value="2">Licence 2</option>
                                        <option value="3">Licence 3</option>
                                    </select>
                                </div>
                            </div>
                            <br><br>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="sc_id">Service Category</label>
                                <div class="col-md-5">
                                    <select id="sc_id" name="sc_id" class="form-control">
                                        <option value="1">Category 1</option>
                                        <option value="2">Category 2</option>
                                        <option value="3">Category 3</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Service Enpoint Details</h3>
                            <!-- File Button --> 
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="sep_json">SEP JSON File</label>
                                <div class="col-md-4">
                                    <input type="file" id="sep_json" name="sep_json" class="input-file" accept=".txt,.json">
                                    <div id="sep_jsondisplay"></div>
                                </div>
                            </div>
                            <br><br>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="possible_instances">Possible Instances</label>
                                <div class="col-md-5">
                                    <select id="possible_instances" name="possible_instances" class="form-control">
                                        <option value="0">0</option>
                                        <option value="-1">Infinite</option>
                                        <option value=">0">1 or more</option>
                                    </select>
                                </div>
                            </div>
                            <br><br>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="doc_url">Documentation File Location</label>  
                                <div class="col-md-5">
                                    <input id="doc_url" name="doc_url" type="text" placeholder="docs/filename.html" class="form-control input-md">

                                </div>
                            </div>

                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Service Provider</h3>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="sd_modulepath">SD ModulePath</label>  
                                <div class="col-md-5">
                                    <input id="sd_modulepath" name="sd_modulepath" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="sd_filename">SD File Name</label>  
                                <div class="col-md-5">
                                    <input id="sd_filename" name="sd_filename" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            <br>
                            <br>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-4">
                    <div class="col-xs-12">
                        <div class="col-md-12" >
                            <h3> Actions</h3>
                            <div id="field">
                                <div id="field0">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="action_id">Action Id</label>  
                                        <div class="col-md-5">
                                            <input id="action_id" name="action_id" type="text" placeholder="" class="form-control input-md">

                                        </div>
                                    </div>
                                    <br><br>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="action_name">Action Name</label>  
                                        <div class="col-md-5">
                                            <input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md">

                                        </div>
                                    </div>
                                    <br><br>
                                    <!-- File Button --> 
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="action_json">Action JSON File</label>
                                        <div class="col-md-4">
                                            <input type="file" id="action_json" name="action_json" class="input-file" accept=".txt,.json">
                                            <div id="action_jsondisplay"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button id="add-more" name="add-more" class="btn btn-primary">Add More</button>
                                </div>
                            </div>
                            <br><br>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-5">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Email Templates</h3>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="emailType">Email Type</label>  
                                <div class="col-md-5">
                                    <input id="emailType" name="emailType" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <br>
                            <br>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Description</label>  
                                <div class="col-md-5">
                                    <input id="description" name="description" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            <br>
                            <br>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="subject">Subject</label>  
                                <div class="col-md-5">
                                    <input id="subject" name="subject" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            <br>
                            <br>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="body">Body</label>
                                <div class="col-md-4">                     
                                    <textarea class="form-control" id="body" name="body"></textarea>
                                </div>
                            </div>

                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-6">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Preview & Submit</h3>
                            <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <script type="text/javascript">
        
        <?php
                include 'assets/js/customer_registration.js';
        ?>
        
        </script>
        
    </body>

</html>