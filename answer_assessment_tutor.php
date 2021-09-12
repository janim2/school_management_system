<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';
    require_once 'helpers/functions.php';

    $lecturer_name = $_GET['name'];
    $course_id = $_GET['CourseCode'];
    $lecturer_id = $_GET['iger'];

    $course_code = fetchCourseDetailsUsingID($con,$course_id,'code');
    $course_name = fetchCourseDetailsUsingID($con,$course_id,'name');

?>
<div id="content">
    <div class="container">
        <div class="grid_17">
            <div id="personal_info">
                <div class="well">

                    <h3 style="color:#f00; text-align:center">IMPORTANT</h3>

                    Your answers to the questions would be treated with the strictest confidence, and would not reflect
                    on your performance with the lecturer. This is to assist the University to put measures in place to
                    for improvement.
                    Be assured that your assessment can never be traced back to you. Thank you.

                </div>
                <div id="txt_heading" style="padding-top:30px;float:left;padding:30px;">
                    <p id="pinfo" style="font-size:larger;"><strong> <?= strtoupper($course_code .' - '.$course_name.' - '.$lecturer_name);?> </strong></p>
                </div>
                <div class="img_box" style="margin:auto !important; padding-right:100px;">
                    <img src="assets/img/profile.png"
                        style="height:100px; width:100px; border-radius:100px; float:right;" /> </div>
                <div class="container"></div>
                <hr />

                <form method="post">

                    <div>
                        <div class="validation-summary-errors text-danger">
                            <ul>
                                <li style="display:none"></li>
                            </ul>
                        </div>
                    </div>

                    <input data-val="true" data-val-number="The field Sem must be a number."
                        data-val-required="The Sem field is required." id="Sem" name="Sem" type="hidden" value="2" />
                    <input data-val="true" data-val-number="The field Year must be a number."
                        data-val-required="The Year field is required." id="Year" name="Year" type="hidden"
                        value="2021" />
                    <input class="input-validation-error" data-val="true"
                        data-val-required="The StaffID field is required." id="StaffID" name="StaffID" type="hidden"
                        value="6204037" />
                    <input data-val="true" data-val-required="The CourseCode field is required." id="CourseCode"
                        name="CourseCode" type="hidden" value="DIT 212" />
                    <input data-val="true" data-val-number="The field SetId must be a number."
                        data-val-required="The SetId field is required." id="SetId" name="SetId" type="hidden"
                        value="1" />

                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[0].Answer" data-valmsg-replace="true"></span></div>
                        1. The Lecturer expresses clear expectations for my learning and performance in this course
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_0__Number"
                            name="ChoiceQuestions[0].Number" type="hidden" value="1" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_0__QuestionId"
                            name="ChoiceQuestions[0].QuestionId" type="hidden" value="1" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_0__SetId"
                            name="ChoiceQuestions[0].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required." id="ChoiceQuestions_0__Answer"
                                        name="ChoiceQuestions[0].Answer" type="radio" value="1" /> Very Good </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_0__Answer"
                                        name="ChoiceQuestions[0].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_0__Answer"
                                        name="ChoiceQuestions[0].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_0__Answer"
                                        name="ChoiceQuestions[0].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_0__Answer"
                                        name="ChoiceQuestions[0].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[1].Answer" data-valmsg-replace="true"></span></div>
                        2. The Lecturer creates an atmosphere conducive for learning and good class control
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_1__Number"
                            name="ChoiceQuestions[1].Number" type="hidden" value="2" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_1__QuestionId"
                            name="ChoiceQuestions[1].QuestionId" type="hidden" value="2" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_1__SetId"
                            name="ChoiceQuestions[1].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required." id="ChoiceQuestions_1__Answer"
                                        name="ChoiceQuestions[1].Answer" type="radio" value="1" /> Very Good </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_1__Answer"
                                        name="ChoiceQuestions[1].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_1__Answer"
                                        name="ChoiceQuestions[1].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_1__Answer"
                                        name="ChoiceQuestions[1].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_1__Answer"
                                        name="ChoiceQuestions[1].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[2].Answer" data-valmsg-replace="true"></span></div>
                        3. The Lecturer provides a course outline to facilitate advance reading
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_2__Number"
                            name="ChoiceQuestions[2].Number" type="hidden" value="3" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_2__QuestionId"
                            name="ChoiceQuestions[2].QuestionId" type="hidden" value="3" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_2__SetId"
                            name="ChoiceQuestions[2].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required." id="ChoiceQuestions_2__Answer"
                                        name="ChoiceQuestions[2].Answer" type="radio" value="1" /> Very Good </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_2__Answer"
                                        name="ChoiceQuestions[2].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_2__Answer"
                                        name="ChoiceQuestions[2].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_2__Answer"
                                        name="ChoiceQuestions[2].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_2__Answer"
                                        name="ChoiceQuestions[2].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[3].Answer" data-valmsg-replace="true"></span></div>
                        4. The Lecturer clearly explains concepts
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_3__Number"
                            name="ChoiceQuestions[3].Number" type="hidden" value="4" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_3__QuestionId"
                            name="ChoiceQuestions[3].QuestionId" type="hidden" value="4" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_3__SetId"
                            name="ChoiceQuestions[3].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required." id="ChoiceQuestions_3__Answer"
                                        name="ChoiceQuestions[3].Answer" type="radio" value="1" /> Very Good </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_3__Answer"
                                        name="ChoiceQuestions[3].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_3__Answer"
                                        name="ChoiceQuestions[3].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_3__Answer"
                                        name="ChoiceQuestions[3].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_3__Answer"
                                        name="ChoiceQuestions[3].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[4].Answer" data-valmsg-replace="true"></span></div>
                        5. The Lecturer communicated the subject matter clearly and clarified all confusing issues
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_4__Number"
                            name="ChoiceQuestions[4].Number" type="hidden" value="5" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_4__QuestionId"
                            name="ChoiceQuestions[4].QuestionId" type="hidden" value="5" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_4__SetId"
                            name="ChoiceQuestions[4].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required." id="ChoiceQuestions_4__Answer"
                                        name="ChoiceQuestions[4].Answer" type="radio" value="1" /> Very Good </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_4__Answer"
                                        name="ChoiceQuestions[4].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_4__Answer"
                                        name="ChoiceQuestions[4].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_4__Answer"
                                        name="ChoiceQuestions[4].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_4__Answer"
                                        name="ChoiceQuestions[4].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[5].Answer" data-valmsg-replace="true"></span></div>
                        6. The lecturer uses teaching methods that enhance my learning
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_5__Number"
                            name="ChoiceQuestions[5].Number" type="hidden" value="6" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_5__QuestionId"
                            name="ChoiceQuestions[5].QuestionId" type="hidden" value="6" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_5__SetId"
                            name="ChoiceQuestions[5].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required." id="ChoiceQuestions_5__Answer"
                                        name="ChoiceQuestions[5].Answer" type="radio" value="1" /> Very Good </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_5__Answer"
                                        name="ChoiceQuestions[5].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_5__Answer"
                                        name="ChoiceQuestions[5].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_5__Answer"
                                        name="ChoiceQuestions[5].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_5__Answer"
                                        name="ChoiceQuestions[5].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[6].Answer" data-valmsg-replace="true"></span></div>
                        7. The Lecturer encourages me to ask questions or comment on the topic issues
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_6__Number"
                            name="ChoiceQuestions[6].Number" type="hidden" value="7" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_6__QuestionId"
                            name="ChoiceQuestions[6].QuestionId" type="hidden" value="7" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_6__SetId"
                            name="ChoiceQuestions[6].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required." id="ChoiceQuestions_6__Answer"
                                        name="ChoiceQuestions[6].Answer" type="radio" value="1" /> Very Good </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_6__Answer"
                                        name="ChoiceQuestions[6].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_6__Answer"
                                        name="ChoiceQuestions[6].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_6__Answer"
                                        name="ChoiceQuestions[6].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_6__Answer"
                                        name="ChoiceQuestions[6].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[7].Answer" data-valmsg-replace="true"></span></div>
                        8. The Lecturer is well organized and prepared
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_7__Number"
                            name="ChoiceQuestions[7].Number" type="hidden" value="8" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_7__QuestionId"
                            name="ChoiceQuestions[7].QuestionId" type="hidden" value="8" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_7__SetId"
                            name="ChoiceQuestions[7].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required." id="ChoiceQuestions_7__Answer"
                                        name="ChoiceQuestions[7].Answer" type="radio" value="1" /> Very Good </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_7__Answer"
                                        name="ChoiceQuestions[7].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_7__Answer"
                                        name="ChoiceQuestions[7].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_7__Answer"
                                        name="ChoiceQuestions[7].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_7__Answer"
                                        name="ChoiceQuestions[7].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[8].Answer" data-valmsg-replace="true"></span></div>
                        9. The Lecturer uses appropriate teaching /learning materials.
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_8__Number"
                            name="ChoiceQuestions[8].Number" type="hidden" value="9" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_8__QuestionId"
                            name="ChoiceQuestions[8].QuestionId" type="hidden" value="9" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_8__SetId"
                            name="ChoiceQuestions[8].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required." id="ChoiceQuestions_8__Answer"
                                        name="ChoiceQuestions[8].Answer" type="radio" value="1" /> Very Good </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_8__Answer"
                                        name="ChoiceQuestions[8].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_8__Answer"
                                        name="ChoiceQuestions[8].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_8__Answer"
                                        name="ChoiceQuestions[8].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_8__Answer"
                                        name="ChoiceQuestions[8].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[9].Answer" data-valmsg-replace="true"></span></div>
                        10. The Lecturer completes syllabus on schedule
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_9__Number"
                            name="ChoiceQuestions[9].Number" type="hidden" value="10" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_9__QuestionId"
                            name="ChoiceQuestions[9].QuestionId" type="hidden" value="10" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_9__SetId"
                            name="ChoiceQuestions[9].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required." id="ChoiceQuestions_9__Answer"
                                        name="ChoiceQuestions[9].Answer" type="radio" value="1" /> Very Good </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_9__Answer"
                                        name="ChoiceQuestions[9].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_9__Answer"
                                        name="ChoiceQuestions[9].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_9__Answer"
                                        name="ChoiceQuestions[9].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_9__Answer"
                                        name="ChoiceQuestions[9].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[10].Answer" data-valmsg-replace="true"></span></div>
                        11. The course was intellectually stimulating
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_10__Number"
                            name="ChoiceQuestions[10].Number" type="hidden" value="11" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_10__QuestionId"
                            name="ChoiceQuestions[10].QuestionId" type="hidden" value="11" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_10__SetId"
                            name="ChoiceQuestions[10].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_10__Answer" name="ChoiceQuestions[10].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_10__Answer"
                                        name="ChoiceQuestions[10].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_10__Answer"
                                        name="ChoiceQuestions[10].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_10__Answer"
                                        name="ChoiceQuestions[10].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_10__Answer"
                                        name="ChoiceQuestions[10].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[11].Answer" data-valmsg-replace="true"></span></div>
                        12. The Lecturer is available to assist students in and out of class when the need arises
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_11__Number"
                            name="ChoiceQuestions[11].Number" type="hidden" value="12" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_11__QuestionId"
                            name="ChoiceQuestions[11].QuestionId" type="hidden" value="12" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_11__SetId"
                            name="ChoiceQuestions[11].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_11__Answer" name="ChoiceQuestions[11].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_11__Answer"
                                        name="ChoiceQuestions[11].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_11__Answer"
                                        name="ChoiceQuestions[11].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_11__Answer"
                                        name="ChoiceQuestions[11].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_11__Answer"
                                        name="ChoiceQuestions[11].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[12].Answer" data-valmsg-replace="true"></span></div>
                        13. I attend class regularly and punctually
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_12__Number"
                            name="ChoiceQuestions[12].Number" type="hidden" value="13" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_12__QuestionId"
                            name="ChoiceQuestions[12].QuestionId" type="hidden" value="13" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_12__SetId"
                            name="ChoiceQuestions[12].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_12__Answer" name="ChoiceQuestions[12].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_12__Answer"
                                        name="ChoiceQuestions[12].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_12__Answer"
                                        name="ChoiceQuestions[12].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_12__Answer"
                                        name="ChoiceQuestions[12].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_12__Answer"
                                        name="ChoiceQuestions[12].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[13].Answer" data-valmsg-replace="true"></span></div>
                        14. I come to class prepared
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_13__Number"
                            name="ChoiceQuestions[13].Number" type="hidden" value="14" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_13__QuestionId"
                            name="ChoiceQuestions[13].QuestionId" type="hidden" value="14" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_13__SetId"
                            name="ChoiceQuestions[13].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_13__Answer" name="ChoiceQuestions[13].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_13__Answer"
                                        name="ChoiceQuestions[13].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_13__Answer"
                                        name="ChoiceQuestions[13].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_13__Answer"
                                        name="ChoiceQuestions[13].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_13__Answer"
                                        name="ChoiceQuestions[13].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[14].Answer" data-valmsg-replace="true"></span></div>
                        15. I have been absent from class for up to three sessions
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_14__Number"
                            name="ChoiceQuestions[14].Number" type="hidden" value="15" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_14__QuestionId"
                            name="ChoiceQuestions[14].QuestionId" type="hidden" value="15" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_14__SetId"
                            name="ChoiceQuestions[14].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_14__Answer" name="ChoiceQuestions[14].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_14__Answer"
                                        name="ChoiceQuestions[14].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_14__Answer"
                                        name="ChoiceQuestions[14].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_14__Answer"
                                        name="ChoiceQuestions[14].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_14__Answer"
                                        name="ChoiceQuestions[14].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[15].Answer" data-valmsg-replace="true"></span></div>
                        16. I actively participate in discussions and group assignments/projects
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_15__Number"
                            name="ChoiceQuestions[15].Number" type="hidden" value="16" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_15__QuestionId"
                            name="ChoiceQuestions[15].QuestionId" type="hidden" value="16" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_15__SetId"
                            name="ChoiceQuestions[15].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_15__Answer" name="ChoiceQuestions[15].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_15__Answer"
                                        name="ChoiceQuestions[15].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_15__Answer"
                                        name="ChoiceQuestions[15].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_15__Answer"
                                        name="ChoiceQuestions[15].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_15__Answer"
                                        name="ChoiceQuestions[15].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[16].Answer" data-valmsg-replace="true"></span></div>
                        17. I have put a great deal of effort into advancing my learning in this course
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_16__Number"
                            name="ChoiceQuestions[16].Number" type="hidden" value="17" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_16__QuestionId"
                            name="ChoiceQuestions[16].QuestionId" type="hidden" value="17" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_16__SetId"
                            name="ChoiceQuestions[16].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_16__Answer" name="ChoiceQuestions[16].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_16__Answer"
                                        name="ChoiceQuestions[16].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_16__Answer"
                                        name="ChoiceQuestions[16].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_16__Answer"
                                        name="ChoiceQuestions[16].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_16__Answer"
                                        name="ChoiceQuestions[16].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[17].Answer" data-valmsg-replace="true"></span></div>
                        18. In this course I have been challenged to learn more than I expected
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_17__Number"
                            name="ChoiceQuestions[17].Number" type="hidden" value="18" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_17__QuestionId"
                            name="ChoiceQuestions[17].QuestionId" type="hidden" value="18" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_17__SetId"
                            name="ChoiceQuestions[17].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_17__Answer" name="ChoiceQuestions[17].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_17__Answer"
                                        name="ChoiceQuestions[17].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_17__Answer"
                                        name="ChoiceQuestions[17].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_17__Answer"
                                        name="ChoiceQuestions[17].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_17__Answer"
                                        name="ChoiceQuestions[17].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[18].Answer" data-valmsg-replace="true"></span></div>
                        19. I am working up to my potential in this course
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_18__Number"
                            name="ChoiceQuestions[18].Number" type="hidden" value="19" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_18__QuestionId"
                            name="ChoiceQuestions[18].QuestionId" type="hidden" value="19" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_18__SetId"
                            name="ChoiceQuestions[18].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_18__Answer" name="ChoiceQuestions[18].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_18__Answer"
                                        name="ChoiceQuestions[18].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_18__Answer"
                                        name="ChoiceQuestions[18].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_18__Answer"
                                        name="ChoiceQuestions[18].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_18__Answer"
                                        name="ChoiceQuestions[18].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[19].Answer" data-valmsg-replace="true"></span></div>
                        20. I have made my best effort to participate in this course
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_19__Number"
                            name="ChoiceQuestions[19].Number" type="hidden" value="20" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_19__QuestionId"
                            name="ChoiceQuestions[19].QuestionId" type="hidden" value="20" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_19__SetId"
                            name="ChoiceQuestions[19].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_19__Answer" name="ChoiceQuestions[19].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_19__Answer"
                                        name="ChoiceQuestions[19].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_19__Answer"
                                        name="ChoiceQuestions[19].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_19__Answer"
                                        name="ChoiceQuestions[19].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_19__Answer"
                                        name="ChoiceQuestions[19].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[20].Answer" data-valmsg-replace="true"></span></div>
                        21. I spend several hours per week doing work outside of class.
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_20__Number"
                            name="ChoiceQuestions[20].Number" type="hidden" value="21" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_20__QuestionId"
                            name="ChoiceQuestions[20].QuestionId" type="hidden" value="21" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_20__SetId"
                            name="ChoiceQuestions[20].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_20__Answer" name="ChoiceQuestions[20].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_20__Answer"
                                        name="ChoiceQuestions[20].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_20__Answer"
                                        name="ChoiceQuestions[20].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_20__Answer"
                                        name="ChoiceQuestions[20].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_20__Answer"
                                        name="ChoiceQuestions[20].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[21].Answer" data-valmsg-replace="true"></span></div>
                        22. The assignments/practical aspects in this course have enhanced my learning
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_21__Number"
                            name="ChoiceQuestions[21].Number" type="hidden" value="22" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_21__QuestionId"
                            name="ChoiceQuestions[21].QuestionId" type="hidden" value="22" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_21__SetId"
                            name="ChoiceQuestions[21].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_21__Answer" name="ChoiceQuestions[21].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_21__Answer"
                                        name="ChoiceQuestions[21].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_21__Answer"
                                        name="ChoiceQuestions[21].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_21__Answer"
                                        name="ChoiceQuestions[21].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_21__Answer"
                                        name="ChoiceQuestions[21].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[22].Answer" data-valmsg-replace="true"></span></div>
                        23. The tests accurately assess what I have learned in this course
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_22__Number"
                            name="ChoiceQuestions[22].Number" type="hidden" value="23" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_22__QuestionId"
                            name="ChoiceQuestions[22].QuestionId" type="hidden" value="23" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_22__SetId"
                            name="ChoiceQuestions[22].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_22__Answer" name="ChoiceQuestions[22].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_22__Answer"
                                        name="ChoiceQuestions[22].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_22__Answer"
                                        name="ChoiceQuestions[22].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_22__Answer"
                                        name="ChoiceQuestions[22].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_22__Answer"
                                        name="ChoiceQuestions[22].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[23].Answer" data-valmsg-replace="true"></span></div>
                        24. The assignments are discussed with the students
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_23__Number"
                            name="ChoiceQuestions[23].Number" type="hidden" value="24" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_23__QuestionId"
                            name="ChoiceQuestions[23].QuestionId" type="hidden" value="24" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_23__SetId"
                            name="ChoiceQuestions[23].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_23__Answer" name="ChoiceQuestions[23].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_23__Answer"
                                        name="ChoiceQuestions[23].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_23__Answer"
                                        name="ChoiceQuestions[23].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_23__Answer"
                                        name="ChoiceQuestions[23].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_23__Answer"
                                        name="ChoiceQuestions[23].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[24].Answer" data-valmsg-replace="true"></span></div>
                        25. The feedback I have received on my work has enhanced my learning
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_24__Number"
                            name="ChoiceQuestions[24].Number" type="hidden" value="25" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_24__QuestionId"
                            name="ChoiceQuestions[24].QuestionId" type="hidden" value="25" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_24__SetId"
                            name="ChoiceQuestions[24].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_24__Answer" name="ChoiceQuestions[24].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_24__Answer"
                                        name="ChoiceQuestions[24].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_24__Answer"
                                        name="ChoiceQuestions[24].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_24__Answer"
                                        name="ChoiceQuestions[24].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_24__Answer"
                                        name="ChoiceQuestions[24].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[25].Answer" data-valmsg-replace="true"></span></div>
                        26. The assignments provide clear evaluation criteria in his questions
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_25__Number"
                            name="ChoiceQuestions[25].Number" type="hidden" value="26" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_25__QuestionId"
                            name="ChoiceQuestions[25].QuestionId" type="hidden" value="26" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_25__SetId"
                            name="ChoiceQuestions[25].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_25__Answer" name="ChoiceQuestions[25].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_25__Answer"
                                        name="ChoiceQuestions[25].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_25__Answer"
                                        name="ChoiceQuestions[25].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_25__Answer"
                                        name="ChoiceQuestions[25].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_25__Answer"
                                        name="ChoiceQuestions[25].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[26].Answer" data-valmsg-replace="true"></span></div>
                        27. The assignments encourage students to critically think for themselves
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_26__Number"
                            name="ChoiceQuestions[26].Number" type="hidden" value="27" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_26__QuestionId"
                            name="ChoiceQuestions[26].QuestionId" type="hidden" value="27" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_26__SetId"
                            name="ChoiceQuestions[26].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_26__Answer" name="ChoiceQuestions[26].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_26__Answer"
                                        name="ChoiceQuestions[26].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_26__Answer"
                                        name="ChoiceQuestions[26].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_26__Answer"
                                        name="ChoiceQuestions[26].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_26__Answer"
                                        name="ChoiceQuestions[26].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[27].Answer" data-valmsg-replace="true"></span></div>
                        28. The lecturer provides a reading list
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_27__Number"
                            name="ChoiceQuestions[27].Number" type="hidden" value="28" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_27__QuestionId"
                            name="ChoiceQuestions[27].QuestionId" type="hidden" value="28" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_27__SetId"
                            name="ChoiceQuestions[27].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_27__Answer" name="ChoiceQuestions[27].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_27__Answer"
                                        name="ChoiceQuestions[27].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_27__Answer"
                                        name="ChoiceQuestions[27].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_27__Answer"
                                        name="ChoiceQuestions[27].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_27__Answer"
                                        name="ChoiceQuestions[27].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[28].Answer" data-valmsg-replace="true"></span></div>
                        29. I learned a great deal from this course
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_28__Number"
                            name="ChoiceQuestions[28].Number" type="hidden" value="29" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_28__QuestionId"
                            name="ChoiceQuestions[28].QuestionId" type="hidden" value="29" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_28__SetId"
                            name="ChoiceQuestions[28].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_28__Answer" name="ChoiceQuestions[28].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_28__Answer"
                                        name="ChoiceQuestions[28].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_28__Answer"
                                        name="ChoiceQuestions[28].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_28__Answer"
                                        name="ChoiceQuestions[28].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_28__Answer"
                                        name="ChoiceQuestions[28].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[29].Answer" data-valmsg-replace="true"></span></div>
                        30. This course has increased my interest in this field of study
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_29__Number"
                            name="ChoiceQuestions[29].Number" type="hidden" value="30" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_29__QuestionId"
                            name="ChoiceQuestions[29].QuestionId" type="hidden" value="30" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_29__SetId"
                            name="ChoiceQuestions[29].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_29__Answer" name="ChoiceQuestions[29].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_29__Answer"
                                        name="ChoiceQuestions[29].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_29__Answer"
                                        name="ChoiceQuestions[29].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_29__Answer"
                                        name="ChoiceQuestions[29].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_29__Answer"
                                        name="ChoiceQuestions[29].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[30].Answer" data-valmsg-replace="true"></span></div>
                        31. The Lecturer shows respect and concern for students
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_30__Number"
                            name="ChoiceQuestions[30].Number" type="hidden" value="31" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_30__QuestionId"
                            name="ChoiceQuestions[30].QuestionId" type="hidden" value="31" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_30__SetId"
                            name="ChoiceQuestions[30].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_30__Answer" name="ChoiceQuestions[30].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_30__Answer"
                                        name="ChoiceQuestions[30].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_30__Answer"
                                        name="ChoiceQuestions[30].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_30__Answer"
                                        name="ChoiceQuestions[30].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_30__Answer"
                                        name="ChoiceQuestions[30].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[31].Answer" data-valmsg-replace="true"></span></div>
                        32. The Lecturer was genuinely interested in helping students and devoid of any biases
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_31__Number"
                            name="ChoiceQuestions[31].Number" type="hidden" value="32" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_31__QuestionId"
                            name="ChoiceQuestions[31].QuestionId" type="hidden" value="32" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_31__SetId"
                            name="ChoiceQuestions[31].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_31__Answer" name="ChoiceQuestions[31].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_31__Answer"
                                        name="ChoiceQuestions[31].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_31__Answer"
                                        name="ChoiceQuestions[31].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_31__Answer"
                                        name="ChoiceQuestions[31].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_31__Answer"
                                        name="ChoiceQuestions[31].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[32].Answer" data-valmsg-replace="true"></span></div>
                        33. Overall the Lecturer has been really effective
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_32__Number"
                            name="ChoiceQuestions[32].Number" type="hidden" value="33" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_32__QuestionId"
                            name="ChoiceQuestions[32].QuestionId" type="hidden" value="33" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_32__SetId"
                            name="ChoiceQuestions[32].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_32__Answer" name="ChoiceQuestions[32].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_32__Answer"
                                        name="ChoiceQuestions[32].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_32__Answer"
                                        name="ChoiceQuestions[32].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_32__Answer"
                                        name="ChoiceQuestions[32].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_32__Answer"
                                        name="ChoiceQuestions[32].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[33].Answer" data-valmsg-replace="true"></span></div>
                        34. Overall the course has been really effective in advancing my learning
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_33__Number"
                            name="ChoiceQuestions[33].Number" type="hidden" value="34" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_33__QuestionId"
                            name="ChoiceQuestions[33].QuestionId" type="hidden" value="34" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_33__SetId"
                            name="ChoiceQuestions[33].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_33__Answer" name="ChoiceQuestions[33].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_33__Answer"
                                        name="ChoiceQuestions[33].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_33__Answer"
                                        name="ChoiceQuestions[33].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_33__Answer"
                                        name="ChoiceQuestions[33].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_33__Answer"
                                        name="ChoiceQuestions[33].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="line-height:25px; margin-bottom:20px">
                        <div><span class="field-validation-valid text-danger"
                                data-valmsg-for="ChoiceQuestions[34].Answer" data-valmsg-replace="true"></span></div>
                        35. Overall I will rate this Lecturer on the scale of 1-5 as
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="ChoiceQuestions_34__Number"
                            name="ChoiceQuestions[34].Number" type="hidden" value="35" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="ChoiceQuestions_34__QuestionId"
                            name="ChoiceQuestions[34].QuestionId" type="hidden" value="35" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="ChoiceQuestions_34__SetId"
                            name="ChoiceQuestions[34].SetId" type="hidden" value="1" />
                        <div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" data-val="true"
                                        data-val-number="The field Answer must be a number."
                                        data-val-required="The Answer field is required."
                                        id="ChoiceQuestions_34__Answer" name="ChoiceQuestions[34].Answer" type="radio"
                                        value="1" /> Very Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_34__Answer"
                                        name="ChoiceQuestions[34].Answer" type="radio" value="2" /> Good </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_34__Answer"
                                        name="ChoiceQuestions[34].Answer" type="radio" value="3" /> Average </Label>
                            </div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_34__Answer"
                                        name="ChoiceQuestions[34].Answer" type="radio" value="4" /> Poor </Label></div>
                            <div style="display: inline; padding-right:5px"><Label style="font-weight:normal"><input
                                        class="radio-control" id="ChoiceQuestions_34__Answer"
                                        name="ChoiceQuestions[34].Answer" type="radio" value="5" /> Very Poor </Label>
                            </div>
                        </div>
                    </div> -->

                    <div class="form-group" style="padding-top:1%">
                        <div> <span class="field-validation-valid text-danger"
                                data-valmsg-for="CommentQuestions[0].Answer" data-valmsg-replace="true"></span></div>
                        11. Please provide any other comments you have.
                        <input data-val="true" data-val-number="The field Number must be a number."
                            data-val-required="The Number field is required." id="CommentQuestions_0__Number"
                            name="CommentQuestions[0].Number" type="hidden" value="36" />
                        <input data-val="true" data-val-number="The field QuestionId must be a number."
                            data-val-required="The QuestionId field is required." id="CommentQuestions_0__QuestionId"
                            name="CommentQuestions[0].QuestionId" type="hidden" value="36" />
                        <input data-val="true" data-val-number="The field SetId must be a number."
                            data-val-required="The SetId field is required." id="CommentQuestions_0__SetId"
                            name="CommentQuestions[0].SetId" type="hidden" value="1" />
                        <div><textarea class="form-control" cols="20" id="CommentQuestions_0__Answer"
                                name="CommentQuestions[0].Answer" rows="2">
                        </textarea></div>
                    </div> 
                    <div style="padding-top:1%">
                        <button class="btn btn-lg btn-success" onclick="assess()"> Submit Assessment </button>
                    </div>
            </div>
        </div>

    </form>

    </div>
</div>
<script>
    function assess(){
        $.ajax({
            url: 'database/assessment/assess_lecturer.php',
            method: "POST", 
            data:{
                "lecturer_id" : <?= $lecturer_id; ?>,
                "course_id"   : <?= $course_id; ?>,
            },
            success: function(data){
                if(data.includes("success")){
                    swal({
                        title: 'Success',
                        text: "Lecturer assessment complete",
                        icon: 'success',
                        buttons: ["OK"],
                        closeOnClickOutside: true,
                    });
                    location.href="select_lecturer_to_access.php";
                }
                else{
                    swal({
                        title: 'Error',
                        text: data,
                        icon: 'error',
                        buttons: ["OK"],
                        closeOnClickOutside: true,
                    })
                }
            }
        });
       
    }
</script>
<?php
    include_once 'partials/footer.php';
?>