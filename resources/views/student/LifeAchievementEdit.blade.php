<form class="achievement_submit_form_class_edit" id="lifeachievement-form-edit" action="" method="">
    @csrf
    <div class="row" style="margin: 1rem 3rem;">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label class="control-label">Title*</label>
                        <input name="professional_title" id="life_event" placeholder="What is this about?" type="text" class="mid js_life_event form-control" value="{{$item['title']}}" maxlength="150">
                        <input type="hidden" name="id" value="{{$item['id']}}">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <div class="signup-section" style="padding-bottom: 0px; border-radius: 6px 0 0 6px;">
                            <label class="control-label">Select a tag*</label>
                            <div class="life-tools mb-2">
                                <div class="life-media" style="border: 1px solid #ced4da;">
                                    <input type="radio" value="3" name="professional_tag" id="tag_3" class="picture" onclick="categoryeditfunction('2')" <?php if($item['type']=="3"){ echo "checked";}?>>
                                    <label for="tag_3" style="width: 100%;margin: 0 auto;font-size: 10px; display: block!important; border-radius: 6px 0 0 6px;"><i style="margin: 0 10px;" class="fa fa-trophy"></i><br>Curricular</label>
                                </div>
                                <div class="life-media" style="border: 1px solid #ced4da; border-radius: 0 6px 6px 0;">
                                    <input type="radio" value="2" name="professional_tag" id="tag_4" class="audio" onclick="categoryeditfunction('1')" <?php if($item['type']=="2"){ echo "checked";}?>>
                                    <label for="tag_4" style="width: 100%;margin: 0 auto;font-size: 10px; display: block!important; border-radius: 0 6px 6px 0;"><i class="fa fa-briefcase"></i><br>Extra-Curricular</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="professional_category_id" id="professional_category_id_edit" value="15">
            </div>
            <div class="form-group">
                <label class="control-label">Short description (max 250 characters)*</label>
                <textarea rows="3" name="professional_detail" autocomplete="off" cols="3" class="form-control mt-3 detail" placeholder="Write a brief summary" maxlength="250" value="{{$item['details']}}">{{$item['details']}}</textarea>
            </div>
            <div class="form-group" id="category_categories_professional_edit" style="display: none;">
                <label id="head_professional_que" class="control-label">Category (what best describes your achievement?)* <span data-tooltip="LifeAchievements are the accomplishments that matter to you and highlight your successes in your life journey. They can be curricular or extra-curricular accomplishments." data-tooltip-location="top"><i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i></span> </label>
                <div class="js_category">
                    <select name="professional_category" onchange="strengtheditdisplay('category_0_edit')" id="category_0_edit" data-id="0" class="form-control mb-3 lifeachievements-select-professional category">
                        <option value="" data-id="">Category</option>
                        <option value="7" data-id="7" <?php if($item['category_id']=="7"){ echo "selected";}?>>Mental Ability Achievement</option>
                        <option value="8" data-id="8" <?php if($item['category_id']=="8"){ echo "selected";}?>>Leadership Achievement</option>
                        <option value="9" data-id="9" <?php if($item['category_id']=="9"){ echo "selected";}?>>Teamwork Achievement</option>
                        <option value="10" data-id="10" <?php if($item['category_id']=="10"){ echo "selected";}?>>Creative / Artistic / Design Achievement</option>
                        <option value="11" data-id="11" <?php if($item['category_id']=="11"){ echo "selected";}?>>Community Service / Social Work Achievement</option>
                        <option value="12" data-id="12" <?php if($item['category_id']=="12"){ echo "selected";}?>>Self-Improvement / Self-Development Achievement </option>
                    </select>
                </div>
            </div>
            <div class="form-group" id="category_categories_personal_edit">
                <label id="head_personal_que" class="control-label">Category (what best describes your achievement?)* <span data-tooltip="Once you’ve described your achievement, select a category that best represents what your achievement is about. For example, if you've volunteered for NGOs, charities etc, it would be under the 'Community Service / Social Work Achievement' category." data-tooltip-location="top"><i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i></span> </label>
                <div class="js_category">
                    <select name="professional_category" onchange="strengtheditdisplay('category_1_edit')" id="category_1_edit" data-id="0" class="form-control mb-3 lifeachievements-select-personal category">
                        <option value="" data-id="">Category</option>
                            <option value="13" data-id="13" <?php if($item['category_id']=="13"){ echo "selected";}?>>Academic Achievement</option>
                            <option value="14" data-id="14" <?php if($item['category_id']=="14"){ echo "selected";}?>>Sports / Physical Achievement</option>
                            <option value="15" data-id="15" <?php if($item['category_id']=="15"){ echo "selected";}?>>Teamwork Achievement</option>
                            <option value="16" data-id="16" <?php if($item['category_id']=="16"){ echo "selected";}?>>Creative / Artistic / Design Achievement</option>
                            <option value="17" data-id="17" <?php if($item['category_id']=="17"){ echo "selected";}?>>Community Service / Social Work Achievement</option>
                            <option value="18" data-id="18" <?php if($item['category_id']=="18"){ echo "selected";}?>>Self-Improvement / Self-Development Achievement </option>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Standard*</label>
                <div class="js_category">
                    <select name="standard" id="standard" data-id="0" class="form-control mb-3 Standard">
                        <option value="" data-id="">Standard</option>
                        <option value="<6" <?php if($item['standard']=="<6"){ echo "selected";}?>>&lt;6th</option>
                        <option value="6" <?php if($item['standard']=="6"){ echo "selected";}?>>6th</option>
                        <option value="7" <?php if($item['standard']=="7"){ echo "selected";}?>>7th</option>
                        <option value="8" <?php if($item['standard']=="8"){ echo "selected";}?>>8th</option>
                        <option value="9" <?php if($item['standard']=="9"){ echo "selected";}?>>9th</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group signup-section">
                <label class="control-label">LifeStrength (select one LifeStrength this achievement reinforces)*</label>
                <div class="lifeachievements-strengths-box re-design">
                    <div class="lifeachievements-strengths-box re-design">
                        <div class="pic-message js_error"><p class="js_error">Pick one strength.</p></div>
                        <div class="strengths-widget strength-widget-8 strength-widget-14">
                            <input type="radio" class="js_radio " value="Drive" name="professional_strength" id="undefinedDrive" checked="">
                            <label for="undefinedDrive" onclick=""><i class="hexa_strength"></i>Drive</label>
                        </div>
                        <div class="strengths-widget strength-widget-8 strength-widget-14">
                            <input type="radio" class="js_radio" value="Confidence" name="professional_strength" id="undefinedConfidence">
                            <label for="undefinedConfidence" onclick=""><i class="hexa_strength"></i>Confidence</label>
                        </div>
                        <div class="strengths-widget strength-widget-8 strength-widget-14">
                            <input type="radio" class="js_radio" value="Integrity" name="professional_strength" id="undefinedIntegrity">
                            <label for="undefinedIntegrity" onclick=""><i class="hexa_strength"></i>Integrity</label>
                        </div>
                        <div class="strengths-widget strength-widget-8 strength-widget-14">
                            <input type="radio" class="js_radio" value="Dependability" name="professional_strength" id="undefinedDependability">
                            <label for="undefinedDependability" onclick=""><i class="hexa_strength"></i>Dependability</label>
                        </div>
                        <div class="strengths-widget strength-widget-8 strength-widget-14">
                            <input type="radio" class="js_radio" value="Objectivity" name="professional_strength" id="undefinedObjectivity">
                            <label for="undefinedObjectivity" onclick=""><i class="hexa_strength"></i>Objectivity</label>
                        </div>
                        <div class="strengths-widget strength-widget-7 strength-widget-13">
                            <input type="radio" class="js_radio" value="Problem Solving" name="professional_strength" id="undefinedProblem Solving">
                            <label for="undefinedProblem Solving" onclick=""><i class="hexa_strength"></i>Problem Solving</label>
                        </div>
                        <div class="strengths-widget strength-widget-7 strength-widget-13">
                            <input type="radio" class="js_radio" value="Decisiveness" name="professional_strength" id="undefinedDecisiveness">
                            <label for="undefinedDecisiveness" onclick=""><i class="hexa_strength"></i>Decisiveness</label>
                        </div>
                        <div class="strengths-widget strength-widget-7 strength-widget-13">
                            <input type="radio" class="js_radio" value="Originality" name="professional_strength" id="undefinedOriginality">
                            <label for="undefinedOriginality" onclick=""><i class="hexa_strength"></i>Originality</label>
                        </div>
                        <div class="strengths-widget strength-widget-7 strength-widget-13">
                            <input type="radio" class="js_radio" value="Simplifying the Complex" name="professional_strength" id="undefinedSimplifying the Complex">
                            <label for="undefinedSimplifying the Complex" onclick=""><i class="hexa_strength"></i>Simplifying the Complex</label>
                        </div>
                        <div class="strengths-widget strength-widget-7 strength-widget-13">
                            <input type="radio" class="js_radio" value="Thinking ahead" name="professional_strength" id="undefinedThinking ahead">
                            <label for="undefinedThinking ahead" onclick=""><i class="hexa_strength"></i>Thinking ahead</label>
                        </div>
                        <div class="strengths-widget strength-widget-7 strength-widget-13">
                            <input type="radio" class="js_radio" value="Sense Making" name="professional_strength" id="undefinedSense Making">
                            <label for="undefinedSense Making" onclick=""><i class="hexa_strength"></i>Sense Making</label>
                        </div>
                        <div class="strengths-widget strength-widget-9 strength-widget-15">
                            <input type="radio" class="js_radio " value="Engagement" name="professional_strength" id="undefinedEngagement">
                            <label for="undefinedEngagement" onclick=""><i class="hexa_strength"></i>Engagement</label>
                        </div>
                        <div class="strengths-widget strength-widget-9 strength-widget-15">
                            <input type="radio" class="js_radio" value="Diplomacy" name="professional_strength" id="undefinedDiplomacy">
                            <label for="undefinedDiplomacy" onclick=""><i class="hexa_strength"></i>Diplomacy</label>
                        </div>
                        <div class="strengths-widget strength-widget-9 strength-widget-15">
                            <input type="radio" class="js_radio" value="Eloquence" name="professional_strength" id="undefinedEloquence">
                            <label for="undefinedEloquence" onclick=""><i class="hexa_strength"></i>Eloquence</label>
                        </div>
                        <div class="strengths-widget strength-widget-9 strength-widget-15">
                            <input type="radio" class="js_radio" value="Social Flexibility" name="professional_strength" id="undefinedSocial Flexibility">
                            <label for="undefinedSocial Flexibility" onclick=""><i class="hexa_strength"></i>Social Flexibility</label>
                        </div>
                        <div class="strengths-widget strength-widget-9 strength-widget-15">
                            <input type="radio" class="js_radio" value="Being Persuasive" name="professional_strength" id="undefinedBeing Persuasive">
                            <label for="undefinedBeing Persuasive" onclick=""><i class="hexa_strength"></i>Being Persuasive</label>
                        </div>
                        <div class="strengths-widget strength-widget-10 strength-widget-16">
                            <input type="radio" class="js_radio" value="Curiosity" name="professional_strength" id="undefinedCuriosity">
                            <label for="undefinedCuriosity" onclick=""><i class="hexa_strength"></i>Curiosity</label>
                        </div>
                        <div class="strengths-widget strength-widget-10 strength-widget-16">
                            <input type="radio" class="js_radio" value="Taking Risk" name="professional_strength" id="undefinedTaking Risk">
                            <label for="undefinedTaking Risk" onclick=""><i class="hexa_strength"></i>Taking Risk</label>
                        </div>
                        <div class="strengths-widget strength-widget-10 strength-widget-16">
                            <input type="radio" class="js_radio" value="Entrepreneurship" name="professional_strength" id="undefinedEntrepreneurship">
                            <label for="undefinedEntrepreneurship" onclick=""><i class="hexa_strength"></i>Entrepreneurship</label>
                        </div>
                        <div class="strengths-widget strength-widget-10 strength-widget-16">
                            <input type="radio" class="js_radio" value="Pioneering" name="professional_strength" id="undefinedPioneering">
                            <label for="undefinedPioneering" onclick=""><i class="hexa_strength"></i>Pioneering</label>
                        </div>
                        <div class="strengths-widget strength-widget-10 strength-widget-16">
                            <input type="radio" class="js_radio" value="Challenging the Norm" name="professional_strength" id="undefinedChallenging the Norm">
                            <label for="undefinedChallenging the Norm" onclick=""><i class="hexa_strength"></i>Challenging the Norm</label>
                        </div>
                        <div class="strengths-widget strength-widget-11 strength-widget-17">
                            <input type="radio" class="js_radio" value="Empathy" name="professional_strength" id="undefinedEmpathy">
                            <label for="undefinedEmpathy" onclick=""><i class="hexa_strength"></i>Empathy</label>
                        </div>
                        <div class="strengths-widget  strength-widget-11 strength-widget-17">
                            <input type="radio" class="js_radio" value="Self Awareness" name="professional_strength" id="undefinedSelf Awareness">
                            <label for="undefinedSelf Awareness" onclick=""><i class="hexa_strength"></i>Self Awareness</label>
                        </div>
                        <div class="strengths-widget  strength-widget-11 strength-widget-17">
                            <input type="radio" class="js_radio" value="Calmness" name="professional_strength" id="undefinedCalmness">
                            <label for="undefinedCalmness" onclick=""><i class="hexa_strength"></i>Calmness</label>
                        </div>
                        <div class="strengths-widget  strength-widget-11 strength-widget-17">
                            <input type="radio" class="js_radio" value="Trust" name="professional_strength" id="undefinedTrust">
                            <label for="undefinedTrust" onclick=""><i class="hexa_strength"></i>Trust</label>
                        </div>
                        <div class="strengths-widget  strength-widget-11 strength-widget-17">
                            <input type="radio" class="js_radio" value="Patience" name="professional_strength" id="undefinedPatience">
                            <label for="undefinedPatience" onclick=""><i class="hexa_strength"></i>Patience</label>
                        </div>
                        <div class="strengths-widget  strength-widget-11 strength-widget-17">
                            <input type="radio" class="js_radio" value="Gratitude" name="professional_strength" id="undefinedGratitude">
                            <label for="undefinedGratitude" onclick=""><i class="hexa_strength"></i>Gratitude</label>
                        </div>
                        <div class="strengths-widget  strength-widget-11 strength-widget-17">
                            <input type="radio" class="js_radio" value="Compassion" name="professional_strength" id="undefinedCompassion">
                            <label for="undefinedCompassion" onclick=""><i class="hexa_strength"></i>Compassion</label>
                        </div>
                        <div class="strengths-widget strength-widget-12 strength-widget-18">
                            <input type="radio" class="js_radio" value="Resilience" name="professional_strength" id="undefinedResilience">
                            <label for="undefinedResilience" onclick=""><i class="hexa_strength"></i>Resilience</label>
                        </div>
                        <div class="strengths-widget strength-widget-12 strength-widget-18">
                            <input type="radio" class="js_radio" value="Dealing with Adversity" name="professional_strength" id="undefinedDealing with Adversity">
                            <label for="undefinedDealing with Adversity" onclick=""><i class="hexa_strength"></i>Dealing with Adversity</label>
                        </div>
                        <div class="strengths-widget strength-widget-12 strength-widget-18">
                            <input type="radio" class="js_radio" value="Self Discipline" name="professional_strength" id="undefinedSelf Discipline">
                            <label for="undefinedSelf Discipline" onclick=""><i class="hexa_strength"></i>Self Discipline</label>
                        </div>
                        <div class="strengths-widget strength-widget-12 strength-widget-18">
                            <input type="radio" class="js_radio" value="Persistence" name="professional_strength" id="undefinedPersistence">
                            <label for="undefinedPersistence" onclick=""><i class="hexa_strength"></i>Persistence</label>
                        </div>
                        <div class="strengths-widget strength-widget-12 strength-widget-18">
                            <input type="radio" class="js_radio" value="Humility" name="professional_strength" id="undefinedHumility">
                            <label for="undefinedHumility" onclick=""><i class="hexa_strength"></i>Humility</label>
                        </div>
                        <div class="strengths-widget strength-widget-12 strength-widget-18">
                            <input type="radio" class="js_radio" value="Agility" name="professional_strength" id="undefinedAgility">
                            <label for="undefinedAgility" onclick=""><i class="hexa_strength"></i>Agility</label>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
                <div class="strength_error_msg" style="display: none;color: #ec0404c2;"></div>
            <div class="form-group ">
                <div class="signup-section" style="padding-bottom: 10px;">
                    <label class="control-label">Upload media (images, videos, links and/or recordings)</label>
                    <div class="life-tools mb-2">
                        <div class="life-media">
                            <input type="radio" value="image" name="passion_media_type" id="picture_000" class="picture" <?php if($item['media_type']!="link"){ echo "checked";}?> onclick="imageurlachedit('media_main_ach_edit')">
                            <label for="picture_000"><i class="fa fa-upload"></i></label>
                        </div>
                        <div class="life-media" style="display: none;">
                            <input type="radio" value="video" name="passion_media_type" id="audio_000" class="audio">
                            <label for="audio_000"><i class="fa fa-file-video-o"></i></label>
                        </div>
                        <div class="life-media">
                            <input type="radio" value="link" name="passion_media_type" id="video_000" class="video" <?php if($item['media_type']=="link"){ echo "checked";}?> onclick="imageurlachedit('media_main_link_ach_edit')">
                            <label for="video_000"><i class="fa fa-link"></i></label>
                        </div>
                        <div class="life-media" style="display: none;">
                            <input type="radio" value="audio" name="passion_media_type" id="link_000" class="link">
                            <label for="link_000">
                                <i class="fa fa-music"></i> &nbsp;
                            </label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="image_media_type_edit" id="image_media_type_edit" value="image">
                <input type="hidden" name="image_name" value="2021-10-08-06-26-34609649.png" id="achievement_image_edit">
                <input type="hidden" name="main_dropzone_number_flag_edit" id="main_dropzone_number_flag_edit" value="0">
            <div class="col-sm-12">
                <div id="extra_form_1"></div>
            </div>
            <div class="form-group ">
                    <div class="media_main_ach_edit">
                        <div id="main_dropzone">
                            <div class="nniicc-dropzoneParent" style="margin: 0px;">
                                <div class="dropzone" style="width: 300px; height: 100px; border: 2px dashed rgb(204, 204, 204); color: rgb(204, 204, 204); text-align: center; -webkit-box-align: center; -webkit-box-pack: center; z-index: 100; cursor: pointer;">
                                    <input type="file" name="files" multiple="" style="display: none;" id="fileElem" onchange="handleFiles(this.files)" accept="audio/*|video/*|image/*|"/>
                                    <label class="button" for="fileElem" style="color:black;">Select some files</label>
                                    Drag and drop your file or browse your folders
                                </div>
                            </div>
                        </div>
                    </div>
                    <p style="font-size: 10px;margin-bottom: 2px;">*Optimal image size is 210px by 130px</p>
                    <p style="font-size: 10px;margin-bottom: 2px;">*Maximum file size is 5MB</p>
                    <p style="font-size: 10px;">*we are accepting only "jpg", "jpeg", "png", "mp3", "wav", "mov", "avi", "mp4" file formats.</p>
                    <p style="font-size: 13px;color: red;display: none;" id="ach_dropzone_msg"></p>
                    <div class="media_main_link_ach_edit" style="display: none;">
                        <input type="text" class="form-control" name="media_link" id="media_link" value="{{$item['media']}}" placeholder="Link">
                    </div>
                </div>
                <div class="form-group ">
                    <progress id="progress-bar" max=100 value=0 style="display:none;"></progress>
                    <div id="preview_img_list"></div>
                    <div id="gallery"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin: 1rem 3rem;">
        <div class="col-lg-6">
            <div class="lifeachievement_edit_deletee" data-id="9312" style="width: 100%;padding: 13px;border: 1px solid #40C4C1;color: #40C4C1;border-radius: 10px;cursor: pointer;font-size: 20px;text-align: center;margin-top: 5px;margin-bottom: 5px;background: #fff; display: block !important;"><i class="fa fa-trash icon_save"></i> Delete</div>
        </div>
        <div class="col-sm-6">
            <button type="buttom" class="save_add_publish" id="achievement_submit_form_edit" style="width: 100%;"><i class="fa fa-save icon_save"></i> Save and publish</button>
        </div>
    </div>
</form>
