<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-3-5">
                    <div class="md-card">
                        <div class="md-card-content">
                            <form action="" data-parsley-validate>

                                <div class="uk-grid uk-grid-medium form_section form_section_separator" id="d_form_section" data-uk-grid-match>
                                    <div class="uk-width-9-10">
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <label>First Name</label>
                                                    <input type="text" class="md-input" name="d_form_fname" required>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <label>Last Name</label>
                                                    <input type="text" class="md-input" name="d_form_lname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="parsley-row">
                                                    <label>Company</label>
                                                    <input type="text" class="md-input" name="d_form_company" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <label>Gender:</label>
                                                    <div class="dynamic_radio uk-margin-small-top">
                                                        <span class="icheck-inline">
                                                            <input type="radio" name="d_form_gender" id="d_form_gender_m" data-md-icheck required />
                                                            <label for="d_form_gender_m" class="inline-label">Man</label>
                                                        </span>
                                                        <span class="icheck-inline">
                                                            <input type="radio" name="d_form_gender" id="d_form_gender_f" data-md-icheck required />
                                                            <label for="d_form_gender_f" class="inline-label">Women</label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2">
                                                <label>Contact:</label>
                                                <div class="uk-margin-small-top">
                                                    <div class="parsley-row">
                                                        <input type="checkbox" data-switchery id="d_form_mail" />
                                                        <label for="d_form_mail" class="inline-label">Email</label>
                                                    </div>
                                                    <div class="parsley-row">
                                                        <input type="checkbox" data-switchery id="d_form_phone" />
                                                        <label for="d_form_phone" class="inline-label">Phone</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <select id="d_form_select_country" data-md-selectize required>
                                                        <option value="">Country...</option>
                                                        <option value="a">country A</option>
                                                        <option value="b">country B</option>
                                                        <option value="c">country C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <select id="d_form_select_city" data-md-selectize required>
                                                        <option value="">City...</option>
                                                        <option value="1">City 1</option>
                                                        <option value="2">City 2</option>
                                                        <option value="3">City 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-10 uk-text-center">
                                        <div class="uk-vertical-align uk-height-1-1">
                                            <div class="uk-vertical-align-middle">
                                                <a href="#" class="btnSectionClone" data-section-clone="#d_form_section"><i class="material-icons md-36">&#xE146;</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <button type="submit" href="#" class="md-btn md-btn-primary">Validate</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-2-5">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-grid form_section" id="d_form_row">
                                <div class="uk-width-1-1">
                                    <div class="uk-input-group">
                                        <label>Company Name</label>
                                        <input type="text" class="md-input" name="d_form_company">
                                        <span class="uk-input-group-addon">
                                            <a href="#" class="btnSectionClone" data-section-clone="#d_form_row"><i class="material-icons md-24">&#xE146;</i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>