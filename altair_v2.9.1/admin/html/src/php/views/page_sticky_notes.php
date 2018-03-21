<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="top_bar">
        <div class="md-top-bar">
            <div class="uk-width-large-8-10 uk-container-center">
                <div class="uk-slidenav-position" data-uk-slider="{infinite: false}">
                    <div class="uk-slider-container">
                        <ul class="uk-slider uk-grid-width-small-1-6 top_bar_nav" id="notes_grid_filter">
                            <li class="uk-active" data-uk-filter="">
                                <a href="#">All</a>
                            </li>
                            <li data-uk-filter="label-1">
                                <a href="#"><span class="uk-badge uk-badge-default">Label 1</span></a>
                            </li>
                            <li data-uk-filter="label-2">
                                <a href="#"><span class="uk-badge uk-badge-warning">Label 2</span></a>
                            </li>
                            <li data-uk-filter="label-3">
                                <a href="#"><span class="uk-badge uk-badge-danger">Label 3</span></a>
                            </li>
                            <li data-uk-filter="label-4">
                                <a href="#"><span class="uk-badge uk-badge-success">Label 4</span></a>
                            </li>
                            <li data-uk-filter="label-5">
                                <a href="#"><span class="uk-badge uk-badge-primary">Label 5</span></a>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
                    <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
                </div>
            </div>
        </div>
    </div>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid">
                <div class="uk-width-medium-3-5 uk-width-large-2-5 uk-container-center">
                    <div class="md-card">
                        <div class="md-card-content">
                            <span class="note_form_text">Add note</span>
                            <div id="note_form"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-4 uk-container-center uk-margin-large-top" data-uk-grid="{gutter: 20, controls: '#notes_grid_filter'}" id="notes_grid"></div>

        </div>
    </div>

    <script id="note_template" type="text/x-handlebars-template">
        {{#each this}}
        <div {{#exists labels}}data-uk-filter="{{#each labels }}{{#ifCond @key '>' 0}},{{/ifCond}}{{ text_safe }}{{/each}}"{{/exists}}>
            <div class="md-card {{#exists color}}{{color}}{{/exists}}">
                <div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-small-top">
                    <a href="#" class="note_action_remove"><i class="md-icon material-icons">&#xE5CD;</i></a>
                    <!--<div class="uk-display-inline-block" data-uk-dropdown="{pos:'bottom-right'}">
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#" class="note_action_edit">Edit</a></li>
                                <li><a href="#" class="note_action_remove">Remove</a></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
                <div class="md-card-content">
                    <h2 class="heading_b uk-margin-large-right">{{ title }}</h2>
                    <p>{{{ content }}}</p>
                    {{#exists checklist}}
                        <ul class="uk-list">
                            {{#each checklist }}
                            <li class="uk-margin-small-top">
                                <input type="checkbox" id="checkbox_{{#if id}}{{id}}{{else}}{{@../index}}_{{@index}}{{/if}}" data-md-icheck {{#if checked}}checked{{/if}}/>
                                <label for="checkbox_{{#if id}}{{id}}{{else}}{{@../index}}_{{@index}}{{/if}}" class="inline-label">{{title}}</label>
                            </li>
                            {{/each}}
                        </ul>
                    {{/exists}}
                    {{#exists labels}}
                    <div class="uk-margin-medium-top">
                        {{#each labels }}
                        <span class="uk-badge uk-badge-{{ type }}">{{ text }}</span>
                        {{/each}}
                    </div>
                    {{/exists}}
                    {{#exists time}}
                        <span class="uk-margin-top uk-text-italic uk-text-muted uk-display-block uk-text-small">{{ dateFormat time format='DD/MM/YYYY' }}</span>
                    {{/exists}}
                </div>
            </div>
        </div>
        {{/each}}
    </script>

    <script id="note_form_template" type="text/x-handlebars-template">
        <form action="">
            <div class="uk-form-row">
                <label>Title</label>
                <input type="text" class="md-input" id="note_f_title"/>
            </div>
            <div class="uk-form-row">
                <label>Note content</label>
                <textarea type="text" class="md-input" placeholder="" id="note_f_content"></textarea>
            </div>
            <div class="uk-form-row uk-hidden" id="notes_checklist">
                <label>Checklist (sortable)</label>
                <ul class="uk-list uk-list-hover uk-sortable-single" data-uk-sortable></ul>
                <div class="uk-input-group">
                    <input type="text" class="md-input" id="checklist_item" placeholder="add item" />
                    <span class="uk-input-group-addon">
                        <a href="#" id="checkbox_add"><i class="material-icons md-24">&#xE145;</i></a>
                    </span>
                </div>
            </div>
            <div class="uk-form-row" id="notes_labels"></div>
            <div class="uk-form-row uk-clearfix">
                <div class="uk-float-left">
                    <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                        <a href="#"><i class="material-icons md-24">&#xE3B7;</i></a>
                        <div class="uk-dropdown uk-dropdown-blank" id="notes_cp"></div>
                    </div><!--
                    --><div class="uk-button-dropdown uk-margin-left" data-uk-dropdown="{mode:'click'}">
                        <a href="#"><i class="material-icons md-24">&#xE892;</i></a>
                        <div class="uk-dropdown uk-dropdown-blank" id="dropdown_labels">
                            {{#each labels }}
                                <div class="uk-margin-small-top">
                                    <input type="checkbox" id="checkbox_{{ text_safe }}" name="labels" data-md-icheck data-label="{{text}}" data-style="{{type}}"/>
                                    <label for="checkbox_{{ text_safe }}" class="inline-label"><span class="uk-badge uk-badge-{{type}}">{{ text }}</span></label>
                                </div>
                            {{/each}}
                        </div>
                    </div><!--
                    --><a href="#" class="uk-margin-left" data-uk-toggle="{target:'#notes_checklist'}"><i class="material-icons md-24">&#xE065;</i></a>
                </div>
                <div class="uk-float-right">
                    <a href="#" class="md-btn md-btn-primary" id="note_add">Add Note</a>
                </div>
            </div>
        </form>
    </script>
    <script id="note_form_checkbox_template" type="text/x-handlebars-template">
        <li class="uk-margin-small-top uk-clearfix">
            <a href="#" class="uk-float-right remove_checklist_item"><i class="material-icons">&#xE5CD;</i></a>
            <div class="uk-nbfc">
                <input type="checkbox" id="checkbox_{{ id }}" name="checkboxes" data-md-icheck data-title="{{ title }}" />
                <label for="checkbox_{{ id }}" class="inline-label">{{ title }}</label>
            </div>
        </li>
    </script>