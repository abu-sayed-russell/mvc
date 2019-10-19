<?php include "includes/admin_header.php";?>
    <!-- Start Contain Section -->
 <div class="container-fluid right_color">
        <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Default Fields</h2>
                        </div>
                        <div class="section-body">
                            <label>Input fields</label>
                            <div class="form-group">
                                <input class="form-control" type="text" value="Input Fields">
                            </div>

                            <label>Disabled fields</label>
                            <div class="form-group">
                                <input class="form-control" type="text" value="Disabled" disabled>
                            </div>

                            <label>Readonly fields </label>
                            <div class="form-group">
                                <input class="form-control" type="text" value="Readonly" Readonly>
                            </div>

                            <label>Placeholder fields</label>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Placeholder">
                            </div>

                            <label>Round input fields</label>
                            <div class="form-group">
                                <input class="form-control round-input" type="text" value="Round Input">
                            </div>

                            <label>Selectbox fields</label>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>

                            <label>Textarea fields</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Icon Fields</h2>
                        </div>
                        <div class="section-body">
                            <label>Success icon</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon text-success"><i class="fa fa-check-circle"></i></span>
                                    <input class="form-control" type="text" placeholder="Left Icon">
                                </div>
                            </div>

                            <label>Info icon</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon text-info"><i class="fa fa-coffee"></i></span>
                                    <input class="form-control" type="text" placeholder="Left Icon">
                                </div>
                            </div>

                            <label>Warning icon</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Left Icon">
                                    <span class="input-group-addon text-warning"><i class="fa fa-diamond"></i></span>
                                </div>
                            </div>

                            <label>Left icon</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bell"></i></span>
                                    <input class="form-control" type="text" placeholder="Left Icon">
                                </div>
                            </div>

                            <label>Right icon</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Right Icon">
                                    <span class="input-group-addon"><i class="fa fa-smile-o"></i></span>
                                </div>
                            </div>

                            <label>Spinner icon</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Spinner Icon">
                                    <span class="input-group-addon"><i class="fa fa-refresh fa-spin fa-fw"></i></span>
                                </div>
                            </div>

                            <label>Email icon</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" value="Email Address" type="email">
                                </div>
                            </div>

                            <label>Password</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="password" value="hunter2"
                                           id="example-password-input">
                                    <span class="input-group-addon" id="basic-addon1"><i
                                                class="fa fa-key"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Color Fields</h2>
                        </div>
                        <div class="section-body">
                            <label>Primary field</label>
                            <div class="form-group">
                                <div class="input-group primary-input">
                                    <input class="form-control" type="text" placeholder="Primary Field">
                                    <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                                </div>
                            </div>

                            <label>Success field</label>
                            <div class="form-group">
                                <div class="input-group success-input">
                                    <input class="form-control" type="text" placeholder="Success Field">
                                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                </div>
                            </div>

                            <label>Info field</label>
                            <div class="form-group">
                                <div class="input-group info-input">
                                    <input class="form-control" type="text" placeholder="Info Field">
                                    <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
                                </div>
                            </div>

                            <label>Warning field</label>
                            <div class="form-group">
                                <div class="input-group warning-input">
                                    <input class="form-control" type="text" placeholder="Warning Field">
                                    <span class="input-group-addon"><i class="fa fa-exclamation-triangle"></i></span>
                                </div>
                            </div>

                            <label>Danger field</label>
                            <div class="form-group">
                                <div class="input-group danger-input">
                                    <input class="form-control" type="text" placeholder="Danger Field">
                                    <span class="input-group-addon"><i class="fa fa-times-circle"></i></span>
                                </div>
                            </div>

                            <label>Purple field</label>
                            <div class="form-group">
                                <div class="input-group purple-input">
                                    <input class="form-control" type="text" placeholder="Purple Field">
                                    <span class="input-group-addon"><i class="fa fa-ruble"></i></span>
                                </div>
                            </div>

                            <label>Pink field</label>
                            <div class="form-group">
                                <div class="input-group pink-input">
                                    <input class="form-control" type="text" placeholder="Pink Field">
                                    <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Size Fields</h2>
                        </div>
                        <div class="section-body">
                            <label>Large field</label>
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" placeholder="Large Input">
                            </div>

                            <label>Default field</label>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Default Input">
                            </div>

                            <label>Small field</label>
                            <div class="form-group">
                                <input class="form-control input-sm" type="text" placeholder="Small Input">
                            </div>

                            <label>Lengths field</label>
                            <div class="form-group row">
                                <div class="col-xs-5">
                                    <input class="form-control" type="text" placeholder="5">
                                </div>
                                <div class="col-xs-4">
                                    <input class="form-control" type="text" placeholder="4">
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control" type="text" placeholder="3">
                                </div>
                            </div>

                            <label>Large Select</label>
                            <div class="form-group">
                            <select class="form-control input-lg">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                            </div>

                            <label>Default Select</label>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>

                            <label>Large Select</label>
                            <div class="form-group">
                                <select class="form-control input-sm">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Text addons</h2>
                        </div>
                        <div class="section-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input class="form-control" type="text" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Username">
                                    <span class="input-group-addon">@example.com</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input class="form-control" type="text" placeholder="Username">
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Dropdown addons</h2>
                        </div>
                        <div class="section-body">
                            <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <input type="text" class="form-control" aria-label="...">
                            </div>
                            </div>

                            <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="...">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Button addons</h2>
                    </div>
                        <div class="section-body">
                            <div class="form-group">
                            <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-btn">
        <button class="btn btn-default" type="button">Search!</button>
      </span>
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Sizing addons</h2>
                        </div>
                        <div class="section-body">
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">@</span>
                                    <input class="form-control" type="text" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input class="form-control" type="text" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon">@</span>
                                    <input class="form-control" type="text" placeholder="Username">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Checkboxes</h2>
                        </div>
                        <div class="section-body">
                            <div class="control-group">
                                <label class="control control-checkbox">First checkbox
                                    <input type="checkbox" checked="checked"/>
                                    <span class="control-indicator"></span>
                                </label>
                                <label class="control control-checkbox">Second checkbox
                                    <input type="checkbox"/>
                                    <span class="control-indicator"></span>
                                </label>
                                <label class="control control-checkbox">Disabled
                                    <input type="checkbox" disabled="disabled"/>
                                    <span class="control-indicator"></span>
                                </label>
                                <label class="control control-checkbox">Disabled & checked
                                    <input type="checkbox" disabled="disabled" checked="checked"/>
                                    <span class="control-indicator"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Radio buttons</h2>
                        </div>
                        <div class="section-body">
                            <div class="control-group">
                                <label class="control control-radio">First radio
                                    <input type="radio" name="radio" checked="checked"/>
                                    <span class="control-indicator"></span>
                                </label>
                                <label class="control control-radio">Second radio
                                    <input type="radio" name="radio"/>
                                    <span class="control-indicator"></span>
                                </label>
                                <label class="control control-radio">Disabled
                                    <input type="radio" name="radio2" disabled="disabled"/>
                                    <span class="control-indicator"></span>
                                </label>
                                <label class="control control-radio">Disabled & checked
                                    <input type="radio" name="radio2" disabled="disabled" checked="checked"/>
                                    <span class="control-indicator"></span>
                                </label>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <!-- End Contain Section -->
    <?php include "includes/admin_footer.php";?>
