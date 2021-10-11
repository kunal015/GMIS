@foreach( $Achievement as $item)
    @if($item['type']==2 || $item['type']==3)
            <?php $name=0;
            foreach($Categories as $category)
            {
                if($category['id']==$item['category_id'])
                {
                    $name=$category['school_name'];
                }
            }
        ?>
        <?php $strcat=0;
            foreach($Strengthslist as $stngs)
            {
                if($stngs['achievements_strength']==$item['strength'])
                {
                    $strcat=$stngs['strength_category'];
                }
            }
        ?>
        <div class="profile_outerline achievements_overview_outerlinee" data-id="9306" draggable="true" role="option" aria-grabbed="false">
            <div class="row">
                <div class="col-lg-12 achievements_image_icon">
                    <div class="achievements_icon">@if($item['type']==3) Curricular @endif @if($item['type']==2) Extra-Curricular @endif<i style="margin: 0 10px;" class="fa fa-trophy"></i></div>
                </div><br/>
                @if($item['media_type']==NULL || $item['media_type']=="link" || $item['media']==NULL)
                    <div class="col-lg-12">
                        <div class="passion_title">{{$item['title']}}
                            @if($item['school_approved']==1)   <i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i> @endif
                        </div>
                        <div class="achievements_title_category">{{$name}}</div>
                            <div class="achievements_subtitle">{{$item['standard']}}th Standard</div>
                            <div class="achievements_desc">{{$item['details']}}</div>
                    </div>
                @endif
                @if($item['media_type']=="image" && $item['media']!=NULL)
                    <div class="col-lg-8">
                        <div class="passion_title">{{$item['title']}}
                            @if($item['school_approved']==1)   <i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i> @endif
                        </div>
                        <div class="achievements_title_category">{{$name}}</div>
                        <div class="achievements_subtitle">{{$item['standard']}}th Standard</div>
                        <div class="achievements_desc">{{$item['details']}}</div>
                    </div>
                    <div class="col-lg-4">
                        <img class="achievements_img_right" src="{{url('storage/img/'.$item['media'])}}" id="mask_group_121">
                    </div>
                @endif
                <div class="col-lg-10">
                    <div class="passion_stregnth stregnth_red" style="color: #2d5597">
                        <svg class="Polygon_62_ks" viewBox="0 0 15.75 14" style="width: 15px; height: 15px; margin-top: -5px;">
                            <path fill="#2d5597" id="Polygon_62_ks" d="M 10.64280319213867 0 C 11.3653507232666 0 12.03171825408936 0.3897235691547394 12.38595581054688 1.019477605819702 L 15.19845485687256 6.019476413726807 C 15.54092025756836 6.628304004669189 15.54092025756836 7.371695041656494 15.19845485687256 7.980522155761719 L 12.38595581054688 12.98052215576172 C 12.03171825408936 13.610276222229 11.3653507232666 13.99999904632568 10.64280319213867 13.99999904632568 L 5.107193946838379 13.99999904632568 C 4.384647846221924 13.99999904632568 3.718279838562012 13.610276222229 3.364043235778809 12.98052215576172 L 0.5515440106391907 7.980521678924561 C 0.2090787589550018 7.371694564819336 0.2090788334608078 6.628303527832031 0.5515442490577698 6.019475936889648 L 3.364044427871704 1.019477248191833 C 3.718281269073486 0.3897233903408051 4.38464879989624 0 5.107195854187012 0 Z">
                            </path>
                        </svg>
                        <b> {{$item['strength']}} </b>({{$strcat}})
                    </div>
                </div>
                <div class="col-lg-2">
                    @if($item['school_approved']==0) <p style="float: right; margin: 10px 0;">&nbsp;<a href={{"deleteachievement/".$item['id']}} style="text-decoration: none;color:black;"><span class="lifeachievement_edit_delete" style="display:block;" data-id="9313" onclick="return confirm('Are you sure you want to delete the user?\nNote: Once Deleted the Data Cannot Be Retrieved. ')"><i class="fa fa-trash" aria-hidden="true"></i></span></a></p> @endif
                    @if($item['school_approved']==0) <p style="float: right; margin: 10px 0;">&nbsp;<span class="lifeachievement_edit" style="display:block;" data-id="9313" onclick="lifeachievementedit({{$item['id']}})"><i class="fa fa-pen" aria-hidden="true"></i></span></p> @endif
                </div>
                @if($item['media_type']=="link" && $item['media']!=NULL)
                    <?php $ursl=$item['media']
                    ?>
                    <div class="col-lg-12">
                            <a href="{{$ursl}}" target="_blank" style="color:red; text-decoration:none;"> Link </a>
                    </div>
                @endif
            </div>
            <div style="clear:both"></div>
        </div>
    @endif
@endforeach
