
<form class="passion_form_class_edit" id="lifepassion-form-edit" action="" method="">
    <div class="row" style="margin: 1rem 3rem;">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">Title*</label>
                    <input name="passion_title" id="life_event_edit" placeholder="What is this about?" type="text" class="mid js_life_event form-control" value="{{$item['title']}}" maxlength="150">
                    <input type="hidden" name="id" value="{{$item['id']}}">
            </div>
            <div class="form-group">
                <label class="control-label">Short description (max 250 characters)*</label>
                <textarea rows="3" name="passion_description" autocomplete="off" cols="3" class="form-control mt-3 detail" placeholder="Write a brief summary" maxlength="250">{{$item['details']}}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Category (what best describes your passion?)* <span data-tooltip="Once you’ve described your passion, select a category that best represents what your passion is about. For example, if you love to run, it would be under the 'Sport and Physical Activites' category." data-tooltip-location="top"><i class="fa fa-question-circle heading-question-icon" aria-hidden="true"></i></span></label>
                <div class="js_category">
                    <input type="hidden" name="passion_category_id" id="passion_category_id_edit" value="2">
                    <select name="passion_category" id="category_lifepassions_edit" onChange="passionstrengtheditdisplay()" class="form-control mb-3 lifepassions-select category">
                            <option value="" data-id="">Category</option>
                            <option value="1" data-id="1" <?php if($item['category_id']=="1"){ echo "selected";}?>>Brain Power</option>
                            <option value="2" data-id="2" <?php if($item['category_id']=="2"){ echo "selected";}?>>Sport and Physical Activities</option>
                            <option value="3" data-id="3" <?php if($item['category_id']=="3"){ echo "selected";}?>>Social and Cultural Activities</option>
                            <option value="4" data-id="4" <?php if($item['category_id']=="4"){ echo "selected";}?>>Pursuit of Arts and Crafts</option>
                            <option value="5" data-id="5" <?php if($item['category_id']=="5"){ echo "selected";}?>>Caring for Others</option>
                            <option value="6" data-id="6" <?php if($item['category_id']=="6"){ echo "selected";}?>>Making the World a Better Place</option>
                    </select>
                </div>
            </div>
            <div class="form-group signup-section">
                <label class="control-label">LifeStrength (select one LifeStrength this passion reinforces)*</label>
                <div class="lifepassion-strengths-box_edit re-design">
                    <div class="pic-message js_error">
                        <p class="js_error">Pick one strength.</p>
                    </div>
                    <div class="strengths-widget strengths-widget-1">
                        <input type="radio" class="js_radio" value="Problem Solving" name="passion_strength" id="lifepassion-Problem Solving" checked="">
                        <label for="lifepassion-Problem Solving"><i class="hexa_strength"></i>Problem Solving</label>
                    </div>
                    <div class="strengths-widget strengths-widget-1">
                        <input type="radio" class="js_radio" value="Decisiveness" name="passion_strength" id="lifepassion-Decisiveness">
                        <label for="lifepassion-Decisiveness"><i class="hexa_strength"></i>Decisiveness</label>
                    </div>
                    <div class="strengths-widget strengths-widget-1">
                        <input type="radio" class="js_radio" value="Originality" name="passion_strength" id="lifepassion-Originality">
                        <label for="lifepassion-Originality" onclick=""><i class="hexa_strength"></i>Originality</label>
                    </div>
                    <div class="strengths-widget strengths-widget-1">
                        <input type="radio" class="js_radio" value="Simplifying the Complex" name="passion_strength" id="lifepassion-Simplifying the Complex">
                        <label for="lifepassion-Simplifying the Complex" onclick=""><i class="hexa_strength"></i>Simplifying the Complex</label>
                    </div>
                    <div class="strengths-widget strengths-widget-1">
                        <input type="radio" class="js_radio" value="Thinking ahead" name="passion_strength" id="lifepassion-Thinking ahead">
                        <label for="lifepassion-Thinking ahead" onclick=""><i class="hexa_strength"></i>Thinking ahead</label>
                    </div>
                    <div class="strengths-widget strengths-widget-1">
                        <input type="radio" class="js_radio" value="Sense Making" name="passion_strength" id="lifepassion-Sense Making">
                        <label for="lifepassion-Sense Making" onclick=""><i class="hexa_strength"></i>Sense Making</label>
                    </div>
                    <div class="strengths-widget strengths-widget-2">
                        <input type="radio" class="js_radio" value="Drive" name="passion_strength" id="lifepassion-Drive">
                        <label for="lifepassion-Drive" onclick=""><i class="hexa_strength"></i>Drive</label>
                    </div>
                    <div class="strengths-widget strengths-widget-2">
                        <input type="radio" class="js_radio" value="Confidence" name="passion_strength" id="lifepassion-Confidence">
                        <label for="lifepassion-Confidence" onclick=""><i class="hexa_strength"></i>Confidence</label>
                    </div>
                    <div class="strengths-widget strengths-widget-2">
                        <input type="radio" class="js_radio" value="Integrity" name="passion_strength" id="lifepassion-Integrity">
                        <label for="lifepassion-Integrity" onclick=""><i class="hexa_strength"></i>Integrity</label>
                    </div>
                    <div class="strengths-widget strengths-widget-2">
                        <input type="radio" class="js_radio" value="Dependability" name="passion_strength" id="lifepassion-Dependability">
                        <label for="lifepassion-Dependability" onclick=""><i class="hexa_strength"></i>Dependability</label>
                    </div>
                    <div class="strengths-widget strengths-widget-2">
                        <input type="radio" class="js_radio" value="Objectivity" name="passion_strength" id="lifepassion-Objectivity">
                        <label for="lifepassion-Objectivity" onclick=""><i class="hexa_strength"></i>Objectivity</label>
                    </div>
                    <div class="strengths-widget strengths-widget-3">
                        <input type="radio" class="js_radio" value="Engagement" name="passion_strength" id="lifepassion-Engagement">
                        <label for="lifepassion-Engagement" onclick=""><i class="hexa_strength"></i>Engagement</label>
                    </div>
                    <div class="strengths-widget strengths-widget-3">
                        <input type="radio" class="js_radio" value="Diplomacy" name="passion_strength" id="lifepassion-Diplomacy">
                        <label for="lifepassion-Diplomacy" onclick=""><i class="hexa_strength"></i>Diplomacy</label>
                    </div>
                    <div class="strengths-widget strengths-widget-3">
                        <input type="radio" class="js_radio" value="Eloquence" name="passion_strength" id="lifepassion-Eloquence">
                        <label for="lifepassion-Eloquence" onclick=""><i class="hexa_strength"></i>Eloquence</label>
                    </div>
                    <div class="strengths-widget strengths-widget-3">
                        <input type="radio" class="js_radio" value="Social Flexibility" name="passion_strength" id="lifepassion-Social Flexibility">
                        <label for="lifepassion-Social Flexibility" onclick=""><i class="hexa_strength"></i>Social Flexibility</label>
                    </div>
                    <div class="strengths-widget strengths-widget-3">
                        <input type="radio" class="js_radio" value="Being Persuasive" name="passion_strength" id="lifepassion-Being Persuasive">
                        <label for="lifepassion-Being Persuasive" onclick=""><i class="hexa_strength"></i>Being Persuasive</label>
                    </div>
                    <div class="strengths-widget strengths-widget-4">
                        <input type="radio" class="js_radio" value="Curiosity" name="passion_strength" id="lifepassion-Curiosity">
                        <label for="lifepassion-Curiosity" onclick=""><i class="hexa_strength"></i>Curiosity</label>
                    </div>
                    <div class="strengths-widget strengths-widget-4">
                        <input type="radio" class="js_radio" value="Taking Risk" name="passion_strength" id="lifepassion-Taking Risk">
                        <label for="lifepassion-Taking Risk" onclick=""><i class="hexa_strength"></i>Taking Risk</label>
                    </div>
                    <div class="strengths-widget strengths-widget-4">
                        <input type="radio" class="js_radio" value="Entrepreneurship" name="passion_strength" id="lifepassion-Entrepreneurship">
                        <label for="lifepassion-Entrepreneurship" onclick=""><i class="hexa_strength"></i>Entrepreneurship</label>
                    </div>
                    <div class="strengths-widget strengths-widget-4">
                        <input type="radio" class="js_radio" value="Pioneering" name="passion_strength" id="lifepassion-Pioneering">
                        <label for="lifepassion-Pioneering" onclick=""><i class="hexa_strength"></i>Pioneering</label>
                    </div>
                    <div class="strengths-widget strengths-widget-4">
                        <input type="radio" class="js_radio" value="Challenging the Norm" name="passion_strength" id="lifepassion-Challenging the Norm">
                        <label for="lifepassion-Challenging the Norm" onclick=""><i class="hexa_strength"></i>Challenging the Norm</label>
                    </div>
                    <div class="strengths-widget strengths-widget-5">
                        <input type="radio" class="js_radio" value="Empathy" name="passion_strength" id="lifepassion-Empathy">
                        <label for="lifepassion-Empathy" onclick=""><i class="hexa_strength"></i>Empathy</label>
                    </div>
                    <div class="strengths-widget strengths-widget-5">
                        <input type="radio" class="js_radio" value="Self Awareness" name="passion_strength" id="lifepassion-Self Awareness">
                        <label for="lifepassion-Self Awareness" onclick=""><i class="hexa_strength"></i>Self Awareness</label>
                    </div>
                    <div class="strengths-widget strengths-widget-5">
                        <input type="radio" class="js_radio" value="Calmness" name="passion_strength" id="lifepassion-Calmness">
                        <label for="lifepassion-Calmness" onclick=""><i class="hexa_strength"></i>Calmness</label>
                    </div>
                    <div class="strengths-widget strengths-widget-5">
                        <input type="radio" class="js_radio" value="Trust" name="passion_strength" id="lifepassion-Trust">
                        <label for="lifepassion-Trust" onclick=""><i class="hexa_strength"></i>Trust</label>
                    </div>
                    <div class="strengths-widget strengths-widget-5">
                        <input type="radio" class="js_radio" value="Patience" name="passion_strength" id="lifepassion-Patience">
                        <label for="lifepassion-Patience" onclick=""><i class="hexa_strength"></i>Patience</label>
                    </div>
                    <div class="strengths-widget">
                        <input type="radio" class="js_radio strengths-widget-5" value="Gratitude" name="passion_strength" id="lifepassion-Gratitude">
                        <label for="lifepassion-Gratitude" onclick=""><i class="hexa_strength"></i>Gratitude</label>
                    </div>
                    <div class="strengths-widget strengths-widget-5">
                        <input type="radio" class="js_radio" value="Compassion" name="passion_strength" id="lifepassion-Compassion">
                        <label for="lifepassion-Compassion" onclick=""><i class="hexa_strength"></i>Compassion</label>
                    </div>
                    <div class="strengths-widget strengths-widget-6">
                        <input type="radio" class="js_radio" value="Resilience" name="passion_strength" id="lifepassion-Resilience">
                        <label for="lifepassion-Resilience" onclick=""><i class="hexa_strength"></i>Resilience</label>
                    </div>
                    <div class="strengths-widget strengths-widget-6">
                        <input type="radio" class="js_radio" value="Dealing with Adversity" name="passion_strength" id="lifepassion-Dealing with Adversity">
                        <label for="lifepassion-Dealing with Adversity" onclick=""><i class="hexa_strength"></i>Dealing with Adversity</label>
                    </div>
                    <div class="strengths-widget strengths-widget-6">
                        <input type="radio" class="js_radio" value="Self Discipline" name="passion_strength" id="lifepassion-Self Discipline">
                        <label for="lifepassion-Self Discipline" onclick=""><i class="hexa_strength"></i>Self Discipline</label>
                    </div>
                    <div class="strengths-widget strengths-widget-6">
                        <input type="radio" class="js_radio" value="Persistence" name="passion_strength" id="lifepassion-Persistence">
                        <label for="lifepassion-Persistence" onclick=""><i class="hexa_strength"></i>Persistence</label>
                    </div>
                    <div class="strengths-widget strengths-widget-6">
                        <input type="radio" class="js_radio" value="Humility" name="passion_strength" id="lifepassion-Humility">
                        <label for="lifepassion-Humility" onclick=""><i class="hexa_strength"></i>Humility</label>
                    </div>
                    <div class="strengths-widget strengths-widget-6">
                        <input type="radio" class="js_radio" value="Agility" name="passion_strength" id="lifepassion-Agility">
                        <label for="lifepassion-Agility" onclick=""><i class="hexa_strength"></i>Agility</label>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="strength_error_msg" style="display: none;color: #ec0404c2;"></div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                <div class="signup-section" style="padding-bottom: 10px;">
                    <label class="control-label">Upload media (images, videos, links and/or recordings)</label>
                    <div class="life-tools mb-2">
                        <div class="life-media">
                            <input type="radio" value="image" name="passion_media_type" id="picture_00" class="picture"<?php if($item['media_type']!="link"){ echo "checked";}?> onclick="imageurlpaseditfunction('media_main_pas_edit')">
                            <label for="picture_00"><i class="fa fa-image"></i></label>
                        </div>
                        <div class="life-media" style="display: none;">
                            <input type="radio" value="video" name="passion_media_type" id="audio_00" class="audio">
                            <label for="audio_00"><i class="fa fa-file-video-o"></i></label>
                        </div>
                        <div class="life-media">
                            <input type="radio" value="link" name="passion_media_type" id="video_00" class="video"<?php if($item['media_type']=="link"){ echo "checked";}?> onclick="imageurlpaseditfunction('media_main_link_pas_edit')">
                            <label for="video_00"><i class="fa fa-link"></i></label>
                        </div>
                        <div class="life-media" style="display: none;">
                            <input type="radio" value="audio" name="passion_media_type" id="link_00" class="link">
                            <label for="link_00">
                                <i class="fa fa-music"></i> &nbsp;
                            </label>
                        </div>
                    </div>
                    <input type="hidden" name="image_media_type_passion_edit" id="image_media_type_passion_edit" value="">
                    <input type="hidden" name="image_name" id="passion_image_edit" val="">
                    <input type="hidden" name="main_dropzone_number" id="main_dropzone_number" value="1">
                    <input type="hidden" name="main_dropzone_number_flag_passion_edit" id="main_dropzone_number_flag_passion_edit" value="0">
                </div>
                <div class="col-sm-12">
                    <div id="extra_form"></div>
                </div>
                <div class="form-group ">
                    <div class="media_main_pas_edit">
                        <div id="main_dropzone_1">
                            <div class="nniicc-dropzoneParent" style="margin: 0px;">
                                <div class="dropzone" style="width: 300px; height: 100px; border: 2px dashed rgb(204, 204, 204); color: rgb(204, 204, 204); text-align: center; -webkit-box-align: center; -webkit-box-pack: center; z-index: 100; cursor: pointer;">
                                    <input type="file" name="files_passion" multiple="" style="display: none;" id="fileElem" onchange="handleFiles1(this.files_passion)" accept="audio/*|video/*|image/*|"/>
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
                    <div class="media_main_link_pas_edit" style="display: none;">
                        <input type="text" class="form-control" name="media_link" id="media_link" value="{{$item['media']}}" placeholder="Link">
                    </div>
                </div>
                <div class="form-group ">
                    <progress id="progress-bar_1" max=100 value=0 style="display:none;"></progress>
                    <div id="preview_img_list_1"></div>
                    <div id="gallery_1"></div>
                </div>
                <input type="hidden" name="privacy_private" value="1">
                <input type="hidden" name="privacy_everyone" value="1">
                <input type="hidden" name="privacy_recruiters" value="1">
                <input type="hidden" name="privacy_network" value="0">
            </div>
        </div>
    </div>
    <div class="row" style="margin: 1rem 3rem;">
        <div class="col-lg-6">
            <div class="lifepassion_edit_deletee" data-id="10126" style="width: 100%;padding: 10px;border: 1px solid #40C4C1;color: #40C4C1;border-radius: 10px;cursor: pointer;font-size: 20px;text-align: center;margin-top: 5px;margin-bottom: 5px;background: #fff; display: block !important;"><i class="fa fa-trash icon_save"></i> Delete</div>
        </div>
        <div class="col-sm-6">
            <button type="buttom" class="save_add_publish" id="passion_submit_form_edit" style="width: 100%;"><i class="fa fa-save icon_save"></i> Save and publish</button>
        </div>
    </div>
</form>
