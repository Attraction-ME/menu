@extends('dashboard.master')
@section('title', 'Edit Profile')
@section('body')

    <section class="users-edit">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs mb-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                            <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Information</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->
                        <div class="media mb-2">
                            <a class="mr-2" href="#">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-26.png" alt="users avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Avatar</h4>
                                <div class="col-12 px-0 d-flex">
                                    <a href="#" class="btn btn-sm btn-primary mr-25">Change</a>
                                    <a href="#" class="btn btn-sm btn-secondary">Reset</a>
                                </div>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form novalidate="">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Username" value="dean3004" required="" data-validation-required-message="This username field is required">
                                            <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Name" value="Dean Stanley" required="" data-validation-required-message="This name field is required">
                                            <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" placeholder="Email" value="deanstanley@gmail.com" required="" data-validation-required-message="This email field is required">
                                            <div class="help-block"></div></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group validate">
                                        <label>Role</label>
                                        <select class="form-control" aria-invalid="false">
                                            <option>User</option>
                                            <option>Staff</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control">
                                            <option>Active</option>
                                            <option>Banned</option>
                                            <option>Close</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" placeholder="Company name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table mt-1">
                                            <thead>
                                            <tr>
                                                <th>Module Permission</th>
                                                <th>Read</th>
                                                <th>Write</th>
                                                <th>Create</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Users</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox1" class="custom-control-input" checked="">
                                                        <label class="custom-control-label" for="users-checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox2" class="custom-control-input"><label class="custom-control-label" for="users-checkbox2"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox3" class="custom-control-input"><label class="custom-control-label" for="users-checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox4" class="custom-control-input" checked="">
                                                        <label class="custom-control-label" for="users-checkbox4"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Articles</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox5" class="custom-control-input"><label class="custom-control-label" for="users-checkbox5"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox6" class="custom-control-input" checked="">
                                                        <label class="custom-control-label" for="users-checkbox6"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox7" class="custom-control-input"><label class="custom-control-label" for="users-checkbox7"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox8" class="custom-control-input" checked="">
                                                        <label class="custom-control-label" for="users-checkbox8"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Staff</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox9" class="custom-control-input" checked="">
                                                        <label class="custom-control-label" for="users-checkbox9"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox10" class="custom-control-input" checked="">
                                                        <label class="custom-control-label" for="users-checkbox10"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox11" class="custom-control-input"><label class="custom-control-label" for="users-checkbox11"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox12" class="custom-control-input"><label class="custom-control-label" for="users-checkbox12"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                        changes</button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit account form ends -->
                    </div>
                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                        <!-- users edit Info form start -->
                        <form novalidate="">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <h5 class="mb-1"><i class="feather icon-link mr-25"></i>Social Links</h5>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input class="form-control" type="text" value="https://www.twitter.com/">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input class="form-control" type="text" value="https://www.facebook.com/">
                                    </div>
                                    <div class="form-group">
                                        <label>Google+</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>LinkedIn</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input class="form-control" type="text" value="https://www.instagram.com/">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                    <h5 class="mb-1"><i class="feather icon-user mr-25"></i>Personal Info</h5>
                                    <div class="form-group">
                                        <div class="controls position-relative">
                                            <label>Birth date</label>
                                            <input type="text" class="form-control birthdate-picker picker__input" required="" placeholder="Birth date" data-validation-required-message="This birthdate field is required" readonly="" id="P1398368355" aria-haspopup="true" aria-readonly="false" aria-owns="P1398368355_root"><div class="picker" id="P1398368355_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__month">October</div><div class="picker__year">2023</div><div class="picker__nav--prev" data-nav="-1" tabindex="0" role="button" aria-controls="P1398368355_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" tabindex="0" role="button" aria-controls="P1398368355_table" title="Next month"> </div></div><table class="picker__table" id="P1398368355_table" role="grid" aria-controls="P1398368355" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td><div class="picker__day picker__day--infocus" data-pick="1696107600000" id="P1398368355_1696107600000" tabindex="0" role="gridcell" aria-label="October, 1, 2023">1</div></td><td><div class="picker__day picker__day--infocus" data-pick="1696194000000" id="P1398368355_1696194000000" tabindex="0" role="gridcell" aria-label="October, 2, 2023">2</div></td><td><div class="picker__day picker__day--infocus" data-pick="1696280400000" id="P1398368355_1696280400000" tabindex="0" role="gridcell" aria-label="October, 3, 2023">3</div></td><td><div class="picker__day picker__day--infocus" data-pick="1696366800000" id="P1398368355_1696366800000" tabindex="0" role="gridcell" aria-label="October, 4, 2023">4</div></td><td><div class="picker__day picker__day--infocus" data-pick="1696453200000" id="P1398368355_1696453200000" tabindex="0" role="gridcell" aria-label="October, 5, 2023">5</div></td><td><div class="picker__day picker__day--infocus" data-pick="1696539600000" id="P1398368355_1696539600000" tabindex="0" role="gridcell" aria-label="October, 6, 2023">6</div></td><td><div class="picker__day picker__day--infocus" data-pick="1696626000000" id="P1398368355_1696626000000" tabindex="0" role="gridcell" aria-label="October, 7, 2023">7</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1696712400000" id="P1398368355_1696712400000" tabindex="0" role="gridcell" aria-label="October, 8, 2023">8</div></td><td><div class="picker__day picker__day--infocus" data-pick="1696798800000" id="P1398368355_1696798800000" tabindex="0" role="gridcell" aria-label="October, 9, 2023">9</div></td><td><div class="picker__day picker__day--infocus" data-pick="1696885200000" id="P1398368355_1696885200000" tabindex="0" role="gridcell" aria-label="October, 10, 2023">10</div></td><td><div class="picker__day picker__day--infocus" data-pick="1696971600000" id="P1398368355_1696971600000" tabindex="0" role="gridcell" aria-label="October, 11, 2023">11</div></td><td><div class="picker__day picker__day--infocus" data-pick="1697058000000" id="P1398368355_1697058000000" tabindex="0" role="gridcell" aria-label="October, 12, 2023">12</div></td><td><div class="picker__day picker__day--infocus" data-pick="1697144400000" id="P1398368355_1697144400000" tabindex="0" role="gridcell" aria-label="October, 13, 2023">13</div></td><td><div class="picker__day picker__day--infocus" data-pick="1697230800000" id="P1398368355_1697230800000" tabindex="0" role="gridcell" aria-label="October, 14, 2023">14</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1697317200000" id="P1398368355_1697317200000" tabindex="0" role="gridcell" aria-label="October, 15, 2023">15</div></td><td><div class="picker__day picker__day--infocus" data-pick="1697403600000" id="P1398368355_1697403600000" tabindex="0" role="gridcell" aria-label="October, 16, 2023">16</div></td><td><div class="picker__day picker__day--infocus" data-pick="1697490000000" id="P1398368355_1697490000000" tabindex="0" role="gridcell" aria-label="October, 17, 2023">17</div></td><td><div class="picker__day picker__day--infocus" data-pick="1697576400000" id="P1398368355_1697576400000" tabindex="0" role="gridcell" aria-label="October, 18, 2023">18</div></td><td><div class="picker__day picker__day--infocus" data-pick="1697662800000" id="P1398368355_1697662800000" tabindex="0" role="gridcell" aria-label="October, 19, 2023">19</div></td><td><div class="picker__day picker__day--infocus" data-pick="1697749200000" id="P1398368355_1697749200000" tabindex="0" role="gridcell" aria-label="October, 20, 2023">20</div></td><td><div class="picker__day picker__day--infocus" data-pick="1697835600000" id="P1398368355_1697835600000" tabindex="0" role="gridcell" aria-label="October, 21, 2023">21</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1697922000000" id="P1398368355_1697922000000" tabindex="0" role="gridcell" aria-label="October, 22, 2023">22</div></td><td><div class="picker__day picker__day--infocus" data-pick="1698008400000" id="P1398368355_1698008400000" tabindex="0" role="gridcell" aria-label="October, 23, 2023">23</div></td><td><div class="picker__day picker__day--infocus" data-pick="1698094800000" id="P1398368355_1698094800000" tabindex="0" role="gridcell" aria-label="October, 24, 2023">24</div></td><td><div class="picker__day picker__day--infocus" data-pick="1698181200000" id="P1398368355_1698181200000" tabindex="0" role="gridcell" aria-label="October, 25, 2023">25</div></td><td><div class="picker__day picker__day--infocus" data-pick="1698267600000" id="P1398368355_1698267600000" tabindex="0" role="gridcell" aria-label="October, 26, 2023">26</div></td><td><div class="picker__day picker__day--infocus" data-pick="1698357600000" id="P1398368355_1698357600000" tabindex="0" role="gridcell" aria-label="October, 27, 2023">27</div></td><td><div class="picker__day picker__day--infocus" data-pick="1698444000000" id="P1398368355_1698444000000" tabindex="0" role="gridcell" aria-label="October, 28, 2023">28</div></td></tr><tr><td><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1698530400000" id="P1398368355_1698530400000" tabindex="0" role="gridcell" aria-label="October, 29, 2023" aria-activedescendant="1698530400000">29</div></td><td><div class="picker__day picker__day--infocus" data-pick="1698616800000" id="P1398368355_1698616800000" tabindex="0" role="gridcell" aria-label="October, 30, 2023">30</div></td><td><div class="picker__day picker__day--infocus" data-pick="1698703200000" id="P1398368355_1698703200000" tabindex="0" role="gridcell" aria-label="October, 31, 2023">31</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1698789600000" id="P1398368355_1698789600000" tabindex="0" role="gridcell" aria-label="November, 1, 2023">1</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1698876000000" id="P1398368355_1698876000000" tabindex="0" role="gridcell" aria-label="November, 2, 2023">2</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1698962400000" id="P1398368355_1698962400000" tabindex="0" role="gridcell" aria-label="November, 3, 2023">3</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1699048800000" id="P1398368355_1699048800000" tabindex="0" role="gridcell" aria-label="November, 4, 2023">4</div></td></tr><tr><td><div class="picker__day picker__day--outfocus" data-pick="1699135200000" id="P1398368355_1699135200000" tabindex="0" role="gridcell" aria-label="November, 5, 2023">5</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1699221600000" id="P1398368355_1699221600000" tabindex="0" role="gridcell" aria-label="November, 6, 2023">6</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1699308000000" id="P1398368355_1699308000000" tabindex="0" role="gridcell" aria-label="November, 7, 2023">7</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1699394400000" id="P1398368355_1699394400000" tabindex="0" role="gridcell" aria-label="November, 8, 2023">8</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1699480800000" id="P1398368355_1699480800000" tabindex="0" role="gridcell" aria-label="November, 9, 2023">9</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1699567200000" id="P1398368355_1699567200000" tabindex="0" role="gridcell" aria-label="November, 10, 2023">10</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1699653600000" id="P1398368355_1699653600000" tabindex="0" role="gridcell" aria-label="November, 11, 2023">11</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1698530400000" disabled="" aria-controls="P1398368355">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="P1398368355">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="P1398368355">Close</button></div></div></div></div></div></div>
                                            <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control" id="accountSelect">
                                            <option>USA</option>
                                            <option>India</option>
                                            <option>Canada</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Languages</label>
                                        <select class="form-control select2-hidden-accessible" id="users-language-select2" multiple="" data-select2-id="users-language-select2" tabindex="-1" aria-hidden="true">
                                            <option value="English" selected="" data-select2-id="2">English</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="French">French</option>
                                            <option value="Russian">Russian</option>
                                            <option value="German">German</option>
                                            <option value="Arabic" selected="" data-select2-id="3">Arabic</option>
                                            <option value="Sanskrit">Sanskrit</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="English" data-select2-id="4"><span class="select2-selection__choice__remove" role="presentation">×</span>English</li><li class="select2-selection__choice" title="Arabic" data-select2-id="5"><span class="select2-selection__choice__remove" role="presentation">×</span>Arabic</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" required="" placeholder="Phone number" value="(+656) 254 2568" data-validation-required-message="This phone number field is required">
                                            <div class="help-block"></div></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address" data-validation-required-message="This Address field is required">
                                            <div class="help-block"></div></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control" placeholder="Website address">
                                    </div>
                                    <div class="form-group">
                                        <label>Favourite Music</label>
                                        <select class="form-control select2-hidden-accessible" id="users-music-select2" multiple="" data-select2-id="users-music-select2" tabindex="-1" aria-hidden="true">
                                            <option value="Rock">Rock</option>
                                            <option value="Jazz" selected="" data-select2-id="7">Jazz</option>
                                            <option value="Disco">Disco</option>
                                            <option value="Pop">Pop</option>
                                            <option value="Techno">Techno</option>
                                            <option value="Folk" selected="" data-select2-id="8">Folk</option>
                                            <option value="Hip hop">Hip hop</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Jazz" data-select2-id="9"><span class="select2-selection__choice__remove" role="presentation">×</span>Jazz</li><li class="select2-selection__choice" title="Folk" data-select2-id="10"><span class="select2-selection__choice__remove" role="presentation">×</span>Folk</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Favourite movies</label>
                                        <select class="form-control select2-hidden-accessible" id="users-movies-select2" multiple="" data-select2-id="users-movies-select2" tabindex="-1" aria-hidden="true">
                                            <option value="The Dark Knight" selected="" data-select2-id="12">The Dark Knight
                                            </option>
                                            <option value="Harry Potter" selected="" data-select2-id="13">Harry Potter</option>
                                            <option value="Airplane!">Airplane!</option>
                                            <option value="Perl Harbour">Perl Harbour</option>
                                            <option value="Spider Man">Spider Man</option>
                                            <option value="Iron Man" selected="" data-select2-id="14">Iron Man</option>
                                            <option value="Avatar">Avatar</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="The Dark Knight
                                                            " data-select2-id="15"><span class="select2-selection__choice__remove" role="presentation">×</span>The Dark Knight
                                                            </li><li class="select2-selection__choice" title="Harry Potter" data-select2-id="16"><span class="select2-selection__choice__remove" role="presentation">×</span>Harry Potter</li><li class="select2-selection__choice" title="Iron Man" data-select2-id="17"><span class="select2-selection__choice__remove" role="presentation">×</span>Iron Man</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                        changes</button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit Info form ends -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
